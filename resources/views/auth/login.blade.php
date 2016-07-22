<!DOCTYPE html>
    <!--[if IE 9 ]><html class="ie9"><![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login - Flexavi</title>
        
        <!-- Vendor CSS -->
        <link href="{{ asset('back-end/vendors/bower_components/animate.css/animate.min.css')}}" rel="stylesheet">
        <link href="{{ asset('back-end/vendors/bower_components/google-material-color/dist/palette.css')}}" rel="stylesheet">
        <link href="{{ asset('back-end/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css')}}" rel="stylesheet">
            
        <!-- CSS -->
        <link href="{{ asset('back-end/css/app.min.1.css')}}" rel="stylesheet">
        <link href="{{ asset('back-end/css/app.min.2.css')}}" rel="stylesheet">
    </head>


<div class="container">
    <div class="login" data-lbg="teal">
            <!-- Login -->
            <div class="l-block toggled" id="l-login">
                <div class="lb-header palette-Teal bg">
                    <i class="zmdi zmdi-account-circle"></i>
                    Welkom bij Flexavi, log hier in.
                </div>

                <div class="lb-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                        <!-- email -->
                        <div class="form-group fg-float{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="fg-line">
                                <input id="email" type="email" class="input-sm form-control fg-input" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                                <label class="fg-label">Email Address</label>
                                
                            </div>
                        </div>
                            <!-- password -->
                        <div class="form-group fg-float{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="fg-line">
                                <input id="password" type="password" class="input-sm form-control fg-input" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            <label class="fg-label">Password</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"><i class="input-helper"></i> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn palette-Teal bg"> Login</button>
                            </div>
                        </div>
                        <div class="m-t-20">
                        <a data-bg="teal" class="palette-Blue text d-block m-b-5" href="/register">Create an account</a>
                        <a data-bg="purple" class="palette-Blue text" href="/password/reset">Forgot password?</a>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- Older IE warning message -->
        <!--[if lt IE 9]>
            <div class="ie-warning">
                <h1 class="c-white">Warning!!</h1>
                <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
                <div class="iew-container">
                    <ul class="iew-download">
                        <li>
                            <a href="http://www.google.com/chrome/">
                                <img src="img/browsers/chrome.png" alt="">
                                <div>Chrome</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.mozilla.org/en-US/firefox/new/">
                                <img src="img/browsers/firefox.png" alt="">
                                <div>Firefox</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.opera.com">
                                <img src="img/browsers/opera.png" alt="">
                                <div>Opera</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.apple.com/safari/">
                                <img src="img/browsers/safari.png" alt="">
                                <div>Safari</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                                <img src="img/browsers/ie.png" alt="">
                                <div>IE (New)</div>
                            </a>
                        </li>
                    </ul>
                </div>
                <p>Sorry for the inconvenience!</p>
            </div>
        <![endif]-->

        <!-- Javascript Libraries -->
        <script src="{{ asset('back-end/vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>
        <script src="{{ asset('back-end/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('back-end/vendors/bower_components/Waves/dist/waves.min.js')}}"></script>

        <!-- Placeholder for IE9 -->
        <!--[if IE 9 ]>
            <script src="vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
        <![endif]-->

        <script src="{{ asset('back-end/js/functions.js')}}"></script>
        
    </body>
</html>
