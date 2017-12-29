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

                        {{--<div class="form-group"  v-bind:class="{ 'has-error': submition && wrongEmail }">--}}
                            {{--<label for="email" class="col-md-4 control-label">E-mail</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="email"  class="form-control" name="email" value="{{ old('email') }}"--}}
                                       {{--v-model="email"--}}
                                       {{--autocomplete="off"--}}
                                {{-->--}}
                                {{--<span class="help-block"  v-cloak v-if="submition && wrongEmail">@{{emailFB}}</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                                     <div class="form-group">
                                         <label for="email" class="col-md-4 control-label">E-mail</label>

                                         <div class="col-md-6">

                                                <input name="email" v-validate="'email'" class="form-control" :class="{'input': true, 'is-danger': errors.has('email') }" type="text" autocomplete="off" v-model="email">
                                                 <i v-show="errors.has('email')" class="fa fa-warning" style="color:red;"></i>
                                                 <span v-show="errors.has('email')" v-cloak class="help is-danger" style="color:red;">@{{errors.first('email') }}</span>
                                                 <span class="help-block"  v-cloak v-if="submition && wrongEmail" style="color:red;">@{{emailFB}}</span>
                                         </div>
                                     </div>

                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password"  v-model="password">
                                <span class="help-block"  v-cloak v-if="submition && wrongPassword" style="color:red;">@{{passwordFB}}</span>
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
