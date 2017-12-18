@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div id ="loginCard">
                    <div class="card">
                      <div class="card-header">
                        LOGIN
                      </div>

                              <div class="card-body">
                                <br/>
                                 <form class="form-horizontal" method="POST" action="{{ route('app.login') }}" id="Login"  v-on:submit="loginForm" >
                        {{ csrf_field() }}

                        <div class="form-group"  v-bind:class="{ 'has-error': submition && wrongEmail }">
                            <label for="email" class="col-md-4 control-label">E-mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"
                                       v-model="email"
                                       autocomplete="off"
                                >
                                <span class="help-block"  v-cloak v-if="submition && wrongEmail">@{{emailFB}}</span>
                            </div>
                        </div>

                        <div class="form-group"  v-bind:class="{ 'has-error': submition && wrongPassword}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password"  v-model="password">
                                <span class="help-block"  v-cloak v-if="submition && wrongPassword">@{{passwordFB}}</span>
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

                        <div class="form-group" >
                            <div class="col-md-8 col-md-offset-4">
                                <button  v-on:click="logIn"  v-html="message" type="submit" class="btn btn-primary"></button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Password?
                                </a>
                            </div>
                        </div>
                    </form>
                           
                          </div>

                          <div class="card-footer text-muted">
                        </div>
            </div>



            </div>
        </div>
    </div>
</div>
@endsection
@section('footer')


@endsection
