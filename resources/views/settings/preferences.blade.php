{!! Form::model($userDetails,['url' => 'preference', 'method' => 'post', 'class' => 'form-horizontal','v-on:submit'=>"preferenceForm" ,'id'=>'userPreferenceForm' ]) !!}
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

      <div class="form-group">

          {!! Form::label('New Password', 'Password', array('class' => 'col-xs-3 control-label')) !!}
          <div class="col-xs-8" >
            <input name="password"  class="form-control"   type="password"  v-model='password'>
            {{--<span  v-cloak v-show="errors.has('password')" class="help-block">@{{ errors.first('password') }}</span>--}}
              <span class="help-block"  v-cloak v-if="submition && wrongPassword">@{{passwordFB}}</span>
          </div>

      </div>



      <div class="form-group">
          {!! Form::label('Confirm Password', 'Confirm Password', array('class' => 'col-xs-3 control-label')) !!}
          <div class="col-xs-8">
             <input name="confirm_password" class="form-control" type="password" v-model='confirm_password'>
               {{--<span  v-cloak v-show="errors.has('confirm_password')" class="help-block">@{{ errors.first('confirm_password') }}</span>--}}
              <span class="help-block"  v-cloak v-if="submition && wrongPwdVerification">@{{passwordVerificationFB}}</span>
              <span class="help-block"  v-cloak v-if="submition && wrongPwdVerificationDv">@{{passwordMisMatchFB}}</span>
          </div>
      </div>

      <div class="form-group" >
          <div class="col-md-offset-3 col-md-10">
              <button type="submit" type="button" class="btn btn-primary">
                  Reset Password
              </button>
          </div>
      </div>
{!! Form::close() !!}
