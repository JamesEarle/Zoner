
<div class="navigation">
    <div class="secondary-navigation">
        <div class="container">
            <div class="contact">
                <figure><strong>Phone:</strong>+1 647-404-3067</figure>
                <figure><strong>Email:</strong><a href="mailto:requests@cbhousing.com">requests@cbhousing.com</a></figure>
            </div>
            <div class="user-area">
                <div class="actions">
                    <?php
                        if(Auth::check()) {
                            echo Auth::user()->name;
                        ?>
                            <a href="{{ URL('logout') }}">Logout</a>
                        <?php
                        } else {
                        ?>
                            <a href="{{ URL('create') }}" class="promoted"><strong>Register</strong></a>
                            <a href="{{ URL('signin') }}">Sign In</a>
                        <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <header class="navbar" id="top" role="banner">
            <div class="navbar-header">
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-brand nav" id="brand">
                    <a href="{{ URL('/') }}"><img class="c_logo" src="{{ asset('/img/CBH_logo.png') }}" alt="brand"></a>
                </div>
            </div>
            <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{{ URL('/')}}">Homepage</a></li>
                    <li class="active"><a href="{{ URL('list-lines') }}">Properties</a></li>
                    <li class="active"><a href="{{ URL('about') }}">About Us</a></li>
                    <li class="active"><a href="{{ URL('submit') }}">Submit</a></li>
                    <li class="active"><a href="{{ URL('contact') }}">Contact</a></li>
                </ul>
            </nav><!-- /.navbar collapse-->
            <div class="add-your-property">
                <a href="{{ URL('submit') }}" class="btn btn-default"><i class="fa fa-plus"></i><span class="text">Add Your Property</span></a>
            </div>
        </header><!-- /.navbar -->
    </div><!-- /.container -->
</div><!-- /.navigation -->