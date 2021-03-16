
<!DOCTYPE HTML>
<html>
<head>
    <title>Title of the document</title>
    <meta charset="utf-8">
    <!--frist mobile meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="{{ asset('website') }}/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('website') }}/css/all.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('website') }}/css/style.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('website') }}/css/style2.css">
    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="exponential.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>




    <!--[if lt IE 9]-->
    <script src="{{ asset('website') }}/js/html5shiv.min.js" ></script>
    <script src="{{ asset('website') }}/js/respond.min.js" ></script>
    <!--<![endif]-->

</head>

<body>

<!-- start upper bar -->
<div class="upper-bar">
    <div class="container-nav">
        <div class="row">
            <div class="col-sm">
                <ul class="icons">
                    <li><i class="fab fa-facebook-f"></i></li>
                    <li><i class="fab fa-twitter"></i></li>
                    <li><i class="fab fa-youtube"></i></li>
                    <li><i class="fab fa-pinterest"></i></li>
                    <li><i class="fab fa-linkedin"></i></li>
                </ul>
            </div>
            <div class="col-sm">
                <span>   Borrow a Tool In Your Home</span>
            </div>
        </div>
    </div>
</div>
<!-- end  upper bar -->


<!-- start navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
	<span class="nav-brand" href="#">
		<span>El- </span> <span>Jar</span>
	</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    @guest
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">

                    @if (Route::has('register'))
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                </li>
                @else

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                            <a  class="dropdown-item" href="{{ route('profile') }}">
                                {{ __('Your Profile') }}
                            </a>
                            <a  class="dropdown-item"  href="{{ route('yourproducut') }}">

                                index
                            </a>
                            <a  class="dropdown-item" href="{{ route('postForm') }}">

                                {{ __('Create AD') }}
                            </a>
                            <a  class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>

                        </div>
                    </li>
                @endguest

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Category
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach ($categories as $category)

                            <a class="dropdown-item" href="{{ route('category', ['id' => $category->id]) }}">{{ $category->name }}</a>

                            @endforeach

                        </div>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('index') }}">Home <span class="sr-only">(current)</span></a>
                    </li>


            </ul>
        </div>
    </div>
</nav>
