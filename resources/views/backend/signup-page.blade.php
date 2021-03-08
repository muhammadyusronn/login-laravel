@extends('backend.layout.sign-template')
@section('content')
<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top navbar-transparent">
    <div class="container">        
        <div class="navbar-translate n_logo">
            <a class="navbar-brand" href="{{url('')}}" title="">Go To Website</a>
            <button class="navbar-toggler" type="button">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </button>
        </div>
        <div class="navbar-collapse">
            <ul class="navbar-nav">              
                <li class="nav-item">
                    <a class="nav-link btn btn-white btn-round" href="/login-page">SIGN IN</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
<div class="page-header">
    <div class="page-header-image" style="background-image:url({{asset('resource/assets/images/login.jpg')}})"></div>
    <div class="container">
        <div class="col-md-12 content-center">
            <div class="card-plain">
                <ul>
                @if (count($errors) > 0)
                <div class="alert alert-danger" role="alert">
                    @foreach ($errors->all() as $err)
                        {{$err}}                    
                    @endforeach
                </div>
                @endif
                </ul>
                <form class="form" method="post" action="{{url('signup')}}">
                    {{ csrf_field() }}
                    <div class="header">
                        <div class="logo-container">
                            <img src="{{asset('resource/assets/images/logo.svg')}}" alt="">
                        </div>
                        <h5>Sign Up</h5>
                        <span>Register a new membership</span>
                    </div>
                    <div class="content">                                                
                        <div class="input-group">
                            <input type="text" name="name" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}"  placeholder="Enter User Name" value="{{old('name')}}">
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-account-circle"></i>
                            </span>
                        </div>
                        <div class="input-group">
                            <input type="text" class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}" name="email" placeholder="Enter Email" value="{{old('email')}}">
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-email"></i>
                            </span>
                        </div>
                        <div class="input-group">
                            <input type="password" name="password" placeholder="Password" class="form-control {{$errors->has('password') ? 'is-invalid' : ''}}" />
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-lock"></i>
                            </span>
                        </div>
                        <div class="input-group">
                            <input type="password" name="password_confirmation" placeholder="Password Confirmation" class="form-control {{$errors->has('password_confirmation') ? 'is-invalid' : ''}}" />
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-lock"></i>
                            </span>
                        </div>                        
                    </div>
                    <div class="footer text-center">
                        <button type="submit" class="btn btn-primary btn-round btn-lg btn-block waves-effect waves-light">SIGN UP</button>                        
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <div class="copyright">
                &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script>,
                <span>Designed by <a href="http://thememakker.com/" target="_blank">ThemeMakker</a></span>
            </div>
        </div>
    </footer>
</div>
@endsection