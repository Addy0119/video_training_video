<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register | Welcome to Josh Frontend</title>
    <!--global css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <!--end of global css-->
    <!--page level css starts-->
    <link type="text/css" rel="stylesheet" href="{{asset('vendors/iCheck/css/all.css')}}" />
    <link href="{{ asset('vendors/bootstrapvalidator/css/bootstrapValidator.min.css') }}" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/register.css') }}">
    <!--end of page level css-->
</head>
<body>
<div class="container">
    <!--Content Section Start -->
    <div class="row">
        <div class="box animation flipInX font_size">
            {{--<img src="{{ asset('images/consultant_logo.png') }}" alt="logo" class="img-responsive mar">--}}
            <h3 class="text-primary">Sign Up</h3>
            <!-- Notifications -->
            <div id="notific">
            @include('notifications')
            </div>
            <form action="{{ route('register') }}" method="POST" id="reg_form">
                <!-- CSRF Token -->
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                <div class="form-group {{ $errors->first('first_name', 'has-error') }}">
                    <label class="sr-only"> First Name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name"
                           value="{!! old('first_name') !!}" >
                    {!! $errors->first('first_name', '<span class="help-block">:message</span>') !!}
                </div>
                <div class="form-group {{ $errors->first('last_name', 'has-error') }}">
                    <label class="sr-only"> Last Name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name"
                           value="{!! old('last_name') !!}" >
                    {!! $errors->first('last_name', '<span class="help-block">:message</span>') !!}
                </div>
                <div class="form-group {{ $errors->first('email', 'has-error') }}">
                    <label class="sr-only"> User ID</label>
                    <input class="form-control" id="email" name="email" placeholder="User Id"
                           value="{!! old('Email') !!}" >
                    {{--{!! $errors->first('email', '<span class="help-block">:message</span>') !!}--}}

                    {!! $errors->first('email', '<span class="help-block">The UserId has already been taken</span>') !!}
                </div>

                <div class="form-group {{ $errors->first('email', 'has-error') }}">
                    <label class="sr-only">Address</label>
                    <input class="form-control" id="address" name="address" placeholder="Address"
                           value="{!! old('Email') !!}" >
                    {!! $errors->first('address', '<span class="help-block">:message</span>') !!}
                </div>

                <div class="form-group {{ $errors->first('userid', 'has-error') }}">
                    <label class="sr-only"> Email</label>
                    <input type="email" class="form-control" id="userid" name="userid" placeholder="Email"
                           value="{!! old('Email') !!}" >
                    {!! $errors->first('userid', '<span class="help-block">:message</span>') !!}
                </div>
                <div class="form-group {{ $errors->first('password', 'has-error') }}">
                    <label class="sr-only"> Password</label>
                    <input type="password" class="form-control" id="Password1" name="password" placeholder="Password">
                    {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
                </div>
                <div class="form-group {{ $errors->first('password_confirm', 'has-error') }}">
                    <label class="sr-only"> Confirm Password</label>
                    <input type="password" class="form-control" id="Password2" name="password_confirm"
                           placeholder="Confirm Password">
                    {!! $errors->first('password_confirm', '<span class="help-block">:message</span>') !!}
                </div>
                <div class="clearfix"></div>
                {{--<div class="checkbox">--}}
                    {{--<label>--}}
                        {{--<input type="checkbox" name="subscribed" >  I accept <a href="#"> Terms and Conditions</a>--}}
                    {{--</label>--}}
                {{--</div>--}}
                <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>
                <button type="submit" class="btn btn-block br-0 btn-primary my-2">Sign Up</button>
                Already have an account? Please <a href="{{ route('login') }}"> Log In</a>
            </form>
        </div>
    </div>

    <!-- //Content Section End -->
</div>
<!--global js starts-->
<script src='https://www.google.com/recaptcha/api.js'></script>
{{--<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>--}}
<script type="text/javascript" src="{{ asset('js/frontend/jquery.min.js') }}"></script>
<script src="{{ asset('vendors/bootstrapvalidator/js/bootstrapValidator.min.js') }}" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('vendors/iCheck/js/icheck.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/frontend/register_custom.js') }}"></script>
<!--global js end-->
</body>
</html>
