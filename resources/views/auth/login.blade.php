@extends('layouts.app')

@section('title')
    Login Page
@stop

@section('content')



      <div class="form-signin">
    <div class="text-center">
        <img height="75" src="{{asset('images/travels.png')}}" alt="Metis Logo">
    </div>
    <hr>
    <div class="tab-content">
        <div id="login" class="tab-pane active">
            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    {{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

                    <div class="col-md-12">
                        <input id="email" type="email" class="form-control top" name="email" value="{{ old('email') }}" placeholder="E-mail" required autofocus>

                        @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    {{--<label for="password" class="col-md-4 control-label">Password</label>--}}

                    <div class="col-md-12">
                        <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

                        @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-8 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Login
                        </button>

                    </div>
                </div>

            </form>
        </div>

    </div>
    <hr>
    <div class="text-center">
        <ul class="list-inline">
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Register</a></li>
            <li><a href="{{ route('password.request') }}">Forgot Password</a></li>

        </ul>
    </div>
  </div>



    {{--<script type="text/javascript">--}}
        {{--(function($) {--}}
            {{--$(document).ready(function() {--}}
                {{--$('.list-inline li > a').click(function() {--}}
                    {{--var activeForm = $(this).attr('href') + ' > form';--}}
                    {{--//console.log(activeForm);--}}
                    {{--$(activeForm).addClass('animated fadeIn');--}}
                    {{--//set timer to 1 seconds, after that, unload the animate animation--}}
                    {{--setTimeout(function() {--}}
                        {{--$(activeForm).removeClass('animated fadeIn');--}}
                    {{--}, 1000);--}}
                {{--});--}}
            {{--});--}}
        {{--})(jQuery);--}}
    {{--</script>--}}



@stop