<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Server;
use App\Setting;
use Illuminate\Support\Facades\Hash;
use Emarref\Jwt\Claim;

class ApiController extends Controller
{
    /*
        Log a user in and assign a JWT
    */
    public function login()
    {
    	$this->validate(request(), [
    		'username' => 'required',
    		'password' => 'required'
    	]);

    	$user = User::where('username', request('username'))->first();

    	if(Hash::check(request('password'), $user->password))
    	{
    		$token = new \Emarref\Jwt\Token();
    		$token->addClaim(new Claim\PrivateClaim('username', $user->username));
    		$token->addClaim(new Claim\PrivateClaim('email', $user->email));
    		$token->addClaim(new Claim\PrivateClaim('sub_type', $user->sub_plan));
			//Basic Claims
			$token->addClaim(new Claim\Expiration(new \DateTime('8 Hours')));
			$token->addClaim(new Claim\Issuer('helios_api'));
			$token->addClaim(new Claim\IssuedAt(new \DateTime('now')));

    		$jwt = new \Emarref\Jwt\Jwt();
			$algorithm = new \Emarref\Jwt\Algorithm\Hs256('verysecret');
			$encryption = \Emarref\Jwt\Encryption\Factory::create($algorithm);
			$serializedToken = $jwt->serialize($token, $encryption);
			return json_encode(array("status" => true, "jwt" => $serializedToken));
    	} else {
            return json_encode(array("status" => false, "error" => "invalid_info"));
        }
    }

    /*
        Register a user (NO JWT WOULD BE ASSIGNED YET)
    */
    public function register()
    {
        $this->validate(request(), [
            'username' => 'required',
            'password' => 'required'
        ]);

        $user = User::create([
            'username' => request('username'),
            'password' => bcrypt(request('password')),
            'email' => request('email')
        ]);
    }

    /*
        Get a users details
    */
    public function getUser($username) 
    {
        $this->validate(request(), [
            'jwt' => 'required'
        ]);

        $user = User::where('username', '=', $username)->get();
        return json_encode(array("status" => true, "user" => $user));
    }

    /*
        Verify a session
    */
    public function verifySession() 
    {
        if($this->verifyJTW(request()->header('jwt')) === true)
            return json_encode(array("verify_status" => true));
        else
            return json_encode(array("verify_status" => false));
    }

    /*
        Get all servers verify JWT first
    */
    public function servers()
    {
        if($this->verifyJTW(request()->header('jwt')) === true)
            return json_encode(array("servers" => Server::where('is_down', 0)->get()));
        else
            return json_encode(array("error" => "Sam!_That_is_not_Rubby!"));
    }

    /*
        Get all settings and verify JWT first
    */  
    public function settings()
    {
        if($this->verifyJTW(request()->header('jwt')) === true)
            return json_encode(array("settings" => User::where('id', 1)->get()[0]->settings()->get()));
        else
            return json_encode(array("error" => "Sam!_That_is_not_Rubby!"));
    }

    /*
        Set a setting if it exist, else create it.
    */
    public function setSetting()
    {
        if($this->verifyJTW(request()->header('jwt')) === true)
        {
            $set_name   = request('setting');
            $set_val    = request('value');
            $user_id    = request('uid');

            $setting = Setting::where('setting_name', $set_name)->get()->count();
            if($setting > 0)
            {
                $setting = Setting::where('setting_name', $set_name)->get()[0];
                $setting->setting_value = $set_val;
                $setting->save();
                return json_encode(array("status" => true));
            }
            else
            {
                $setting = Setting::create([
                    'user_id' => $user_id,
                    'setting_name' => $set_name,
                    'setting_value' => $set_val 
                ]);
                return json_encode(array("status" => true));
            }
        }
        else
            return json_encode(array("error" => "Sam!_That_is_not_Rubby!"));
    }

    /*
        Helper
    */
    public function verifyJTW($token)
    {
        try 
        {
            $algorithm = new \Emarref\Jwt\Algorithm\Hs256('verysecret');
            $encryption = \Emarref\Jwt\Encryption\Factory::create($algorithm);
            $jwt = new \Emarref\Jwt\Jwt();

            $token = $jwt->deserialize($token);
            $context = new \Emarref\Jwt\Verification\Context($encryption);
            $context->setIssuer('helios_api');

            if($jwt->verify($token, $context))
                return true;
            else
                return false;
        }
        catch (\InvalidArgumentException $ex)
        {
            return false;
        }
    }
}
