@extends('admin.dashboard')
@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="page-header"><strong>CHANGE PASSWORD</strong></h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    </div>
                    <div style="margin-top:20px; padding:0 10px  0 10px;">
                        {!! Form::open(['url' => 'preference', 'method' => 'post', 'class' => 'form-horizontal','v-on:submit'=>"preferenceForm" , 'id'=>"userPreferenceForm" ]) !!}
                        {!! Form::hidden('email',\Auth::user()->email) !!}
                        {{ csrf_field() }}


                     <div class="form-group"  v-bind:class="{ 'has-error': submition && wrongPassword}">
                            {!! Form::label('Password', 'Password', array('class' => 'col-md-3 control-label')) !!}
                            <div class="col-md-6">
                                <input type="password" id="password" class="form-control" v-model="password" name="password">
                                <span class="help-block"  v-cloak v-if="submition && wrongPassword">@{{passwordFB}}</span>

                            </div>
                        </div>

                        <div class="form-group" v-bind:class="{ 'has-error': submition && wrongPwdVerification }">
                            {!! Form::label('Confirm Password', 'Confirm Password', array('class' => 'col-md-3 control-label validate[required]')) !!}
                            <div class="col-md-6">
                                <input type="password" id="confirm_password" class="form-control" v-model="confirm_password" name="confirm_password">
                                <span class="help-block"  v-cloak v-if="submition && wrongPwdVerification">@{{passwordVerificationFB}}</span>
                            </div>
                        </div>

                          <div class="form-group" v-bind:class="{ 'has-error': submition && passwordMisMatch }">
                            <div class="col-md-3"></div>
                             <div class="col-md-6"><span class="help-block"  v-cloak v-if="submition && passwordMisMatch">@{{passwordMisMatchFB}}</span>
                             </div>
                             </div>

                        <div class="form-group">
                            <div class="col-md-offset-3 col-md-10">
                                <button type="submit" type="button" class="btn btn-sm">Update Password</button>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>

                    </div>

                </div>
            </div>
        </div>
@stop