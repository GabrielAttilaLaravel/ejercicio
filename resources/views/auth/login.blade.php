@component('layouts.app')

    @slot('css')
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    @endslot

    @slot('content')
        <div class="container">
            <div class="card card-login mx-auto mt-5">
                <div class="card-header">Login</div>
                <div class="card-body">
                    {!! Form::open(['route' => 'login', 'method'=> 'POST']) !!}
                        <label for="login">E-Mail Address or Username</label>
                        {!! Field::text('login', null, ['placeholder' => 'Enter email or usermane', 'id' => 'login', ]) !!}

                        <label for="password">Password</label>
                        {!! Field::password('password', ['placeholder' => 'Password', 'id' => 'password',]) !!}

                        {!! Form::submit('Login', ['class' => 'btn btn-primary btn-block']) !!}
                    {!! Form::close() !!}

                    <div class="text-center">
                        <a class="d-block small mt-3" href="register.html">Register an Account</a>
                        <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
                    </div>
                </div>
            </div>
        </div>
    @endslot
@endcomponent