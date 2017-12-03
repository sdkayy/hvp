<nav class="navbar navbar-transparent navbar-absolute">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">HeliosVPN</a>
        </div>

        <div class="collapse navbar-collapse" id="navigation-example">
            <ul class="nav navbar-nav navbar-right">
                @if(!Auth::check())
                    <li>
                        <!--<a href="login">
                            Login
                        </a>-->
                        <a data-toggle="modal" data-target="#loginModal">
                          Login
                        </a>
                    </li>
                    <li>
                        <a data-toggle="modal" data-target="#loginModal">
                          Register
                        </a>
                    </li>
                @else
                    <li>
                        <a href="dashboard">
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="settings">
                            Settings
                        </a>
                    </li>
                    <li>
                        <a href="logout">
                            Logout
                        </a>
                    </li>
                @endif
                <li>
                    <a href="https://twitter.com/CreativeTim" target="_blank" class="btn btn-simple btn-white btn-just-icon">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.facebook.com/CreativeTim" target="_blank" class="btn btn-simple btn-white btn-just-icon">
                        <i class="fa fa-facebook-square"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/CreativeTimOfficial" target="_blank" class="btn btn-simple btn-white btn-just-icon">
                        <i class="fa fa-instagram"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>