<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            {{HTML::linkroute('home','DVWA',array(),array('class' => 'navbar-brand'))}}
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li>{{link_to_route('instruction_path','Instruction')}}</li>
                <li>{{link_to_route('vulnerability_path','Vulnerabilities')}}</li>
                <li>{{link_to_route('about_path','about')}}</li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
            @if($currentUser)
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{$currentUser->username}}<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li>{{link_to_route('csrf_profile_update_path','Profile')}}</li>
                        <li>{{link_to_route('logout_path','Logout')}}</li>
                    </ul>
                </li>
             @else
                <li>{{link_to_route('signup_path','Register')}}</li>
                <li>{{link_to_route('signin_path','SignIn')}}</li>
                @endif
                </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>