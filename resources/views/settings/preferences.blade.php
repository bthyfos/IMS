{!! Form::model($userDetails,['url' => 'preference', 'method' => 'post', 'class' => 'form-horizontal','v-on:submit'=>"preferenceForm" ,'id'=>'userPreferenceForm' ]) !!}
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
  
      <div class="form-group">

          {!! Form::label('New Password', 'New Password', array('class' => 'col-xs-3 control-label')) !!}
          <div class="col-xs-8" >
             <input type="password" name="password"  class="form-control input-sm" id="password"  v-model='password'>
              <!-- {!! Form::password('password',NULL,['class' => 'form-control input-sm','id' => 'name','v-model'=>'name']) !!} -->
              <span class="help-block"  v-cloak v-if="submition && wrongPassword">@{{passwordFB}}</span>
          </div>
      </div>


      <div class="form-group">
          {!! Form::label('Confirm Password', 'Confirm Password', array('class' => 'col-xs-3 control-label')) !!}
          <div class="col-xs-8">
             <input type="password" name="confirm_password"  class="form-control input-sm" id="confirm_password" v-model='confirm_password'>
              <!-- {!! Form::text('specification',NULL,['class' => 'form-control input-sm','id' => 'specification' , 'placeholder'=>'e.g describe the product here...' ,'v-model'=>'specification']) !!} -->
              <span class="help-block"  v-cloak v-if="submition && wrongPwdVerification">@{{passwordVerificationFB}}</span>

          </div>
      </div>

       <div class="form-group" v-bind:class="{ 'has-error': submition && passwordMisMatch }">
                            <div class="col-md-3"></div>
                             <div class="col-md-6"><span class="help-block"  v-cloak v-if="submition && passwordMisMatch">@{{passwordMisMatchFB}}</span>
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