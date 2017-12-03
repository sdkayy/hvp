@extends('layouts.master')

@section('content')
	<div class="wrapper">
        <div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="title">Welcome to HeliosVPN</h1>
                        <h4>Welcome to the no BS VPN.</h4>
                        <br />
                        <a href="{{ route('welcome') }}" class="btn btn-danger btn-raised btn-lg">
                            <i class="fa fa-play"></i> Watch video
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="main main-raised">
            <div class="container">
                <div class="section text-center section-landing">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="title">Let's talk product</h2>
                            <h5 class="description">This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn't scroll to get here. Add a button if you want the user to see more.</h5>
                        </div>
                    </div>

                    <div class="features">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="info">
                                    <div class="icon icon-info">
                                        <i class="material-icons">security</i>
                                    </div>
                                    <h4 class="info-title">Security</h4>
                                    <p>Security is a big part of a VPN, we provide you with a secure and anonymous way to browse the internet safely</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="info">
                                    <div class="icon icon-success">
                                        <i class="material-icons">verified_user</i>
                                    </div>
                                    <h4 class="info-title">Ease of use</h4>
                                    <p>At HeliosVPN we want to provide a simple and effective user interface to allow for a "hassle-free" environment</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="info">
                                    <div class="icon icon-danger">
                                        <i class="material-icons">my_location</i>
                                    </div>
                                    <h4 class="info-title">Locations</h4>
                                    <p>We are constantly looking for new locations. We try and provide our users with as many as possible. If you have any suggestions please give us <a href="#feedback">feedback</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section text-center">
                    <h2 class="title">Here is our team</h2>

                    <div class="team">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="team-player">
                                    <img src="/img/avatar.jpg" alt="Thumbnail Image" class="img-raised img-circle">
                                    <h4 class="title">X <br />
                                        <small class="text-muted">GON' </small>
                                    </h4>
                                    <p class="description">Give <a href="#">it</a> to ya</p>
                                    <a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-twitter"></i></a>
                                    <a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-instagram"></i></a>
                                    <a href="#pablo" class="btn btn-simple btn-just-icon btn-default"><i class="fa fa-facebook-square"></i></a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="team-player">
                                    <img src="/img/christian.jpg" alt="Thumbnail Image" class="img-raised img-circle">
                                    <h4 class="title">WAITIN<br />
                                        <small class="text-muted">FOR</small>
                                    </h4>
                                    <p class="description">You <a href="#">to</a> get it on ya own</p>
                                    <a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-twitter"></i></a>
                                    <a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="team-player">
                                    <img src="/img/kendall.jpg" alt="Thumbnail Image" class="img-raised img-circle">
                                    <h4 class="title">X<br />
                                        <small class="text-muted">Gon'</small>
                                    </h4>
                                    <p>Deliver<a href="#">to</a> ya</p>
                                    <a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-google-plus"></i></a>
                                    <a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-youtube-play"></i></a>
                                    <a href="#pablo" class="btn btn-simple btn-just-icon btn-default"><i class="fa fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="section landing-section">
                	<section id="feedback">
	                    <div class="row">
	                        <div class="col-md-8 col-md-offset-2">
	                            <h2 class="text-center title">Give us your feedback</h2>
	                            <h4 class="text-center description">Divide details about your product or agency work into parts. Write a few lines about each one and contact us about any further collaboration. We will responde get back to you in a couple of hours.</h4>
	                            <form class="contact-form">
	                                <div class="row">
	                                    <div class="col-md-6">
	                                        <div class="form-group label-floating">
	                                            <label class="control-label">Your Name</label>
	                                            <input type="email" class="form-control">
	                                        </div>
	                                    </div>
	                                    <div class="col-md-6">
	                                        <div class="form-group label-floating">
	                                            <label class="control-label">Your Email</label>
	                                            <input type="email" class="form-control">
	                                        </div>
	                                    </div>
	                                </div>

	                                <div class="form-group label-floating">
	                                    <label class="control-label">Your Messge</label>
	                                    <textarea class="form-control" rows="4"></textarea>
	                                </div>

	                                <div class="row">
	                                    <div class="col-md-4 col-md-offset-4 text-center">
	                                        <button class="btn sdk btn-raised">
	                                            Send Message
	                                        </button>
	                                    </div>
	                                </div>
	                            </form>
	                        </div>
	                    </div>
                	</section>

                </div>
            </div>
        </div>
        @include('layouts.footer')
    </div>
@endsection