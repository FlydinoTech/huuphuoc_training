<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Register for User</title>
        <link href="/css/auth/all.css" rel="stylesheet">
        <link href="/css/app.css" rel="stylesheet">
        <link rel="icon" type="image/png" href="/img/auth/favicon-32x32.png" sizes="32x32">
    </head>
    <body class="background-log">
        <div class="wrapper">
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <div class="form-03">
                                {!! Form::open(['method' => 'POST', 'route' => ['auth.register']]) !!}
                                    <div class="login-form">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="travel-login ">
                                                    <a href=""><h4 class="title-01">Register for User</h4></a>
                                                    <h5 class="title-anchor">Not a member yet? <a href="{{ route('auth.login')}}">Login!</a></h5>
                                                    @include('template.errorValidate')
                                                    @if (session('msg'))
                                                        <div class="alert alert-danger">
                                                            <p>{{ session('msg') }}</p>
                                                        </div>
                                                    @endif
                                                    @if (session('msgSuccess'))
                                                        <div class="alert alert-success">
                                                            <p>{{ session('msgSuccess') }}</p>
                                                        </div>
                                                    @endif
                                                    <div class="label-effect margin-bottom-30">
                                                        <span>{{ Form::label('email', 'Email', ['class' => 'foo']) }} </span>
                                                        {{Form::email('email')}}
                                                    </div>
                                                    <div class="label-effect margin-bottom-30">
                                                        <span>{{ Form::label('password', 'Password', ['class' => 'foo']) }} </span>
                                                        {{ Form::password('password', ['class' => 'ipd', 'id' => 'password', 'placeholder' =>  'Your Password']) }}
                                                    </div>
                                                    <div class="label-effect margin-bottom-30">
                                                        <span>{{ Form::label('password', 'Confirm_Password', ['class' => 'foo']) }} </span>
                                                        {{ Form::password('password', ['class' => 'ipd', 'name' => 'confirm_password', 'placeholder' =>  'Confirm Password']) }}
                                                    </div>
                                                    <div class="label-effect margin-bottom-30">
                                                        <span>{{ Form::label('name', 'Name', ['class' => 'foo']) }} </span>
                                                        {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' =>  'Your Name']) }}
                                                    </div>
                                                    <div class="form-btn">
                                                        {!! Form::submit( 'Register', ['class' => 'submit-btn']) !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>
            </section>
            
        </div>
    </body>
</html>
