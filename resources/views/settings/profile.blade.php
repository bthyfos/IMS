{!! Form::model($userDetails, ['url' => 'updateUser', 'method' => 'post', 'class' => 'form-horizontal', 'id'=>"updateForm" ,'v-on:submit'=>"updateProfileForm" ]) !!}
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

      <div class="form-group">
          {!! Form::label('Name', 'Name', array('class' => 'col-xs-3 control-label')) !!}
          <div class="col-xs-8" >
              {!! Form::text('name',null,['class' => 'form-control input-sm','disabled']) !!}
          </div>
      </div>

        <div class="form-group">
          {!! Form::label('Surname', 'Surname', array('class' => 'col-xs-3 control-label')) !!}
          <div class="col-xs-8" >
              {!! Form::text('surname',null,['class' => 'form-control input-sm','id' => 'Surname','disabled']) !!}
          </div>
      </div>

        <div class="form-group">
          {!! Form::label('Staff Id', 'Staff Id', array('class' => 'col-xs-3 control-label')) !!}
          <div class="col-xs-8" >
              {!! Form::text('staffId',null,['class' => 'form-control input-sm','id' => 'staffId','disabled']) !!}
          </div>
      </div>

        <div class="form-group">
          {!! Form::label('Email', 'Email', array('class' => 'col-xs-3 control-label')) !!}
          <div class="col-xs-8" >
              {!! Form::text('email',null,['class' => 'form-control input-sm','id' => 'email','disabled']) !!}
          </div>
      </div>

        <div class="form-group">
          {!! Form::label('Region', 'Region', array('class' => 'col-xs-3 control-label')) !!}
          <div class="col-xs-8" >
              {!! Form::text('regionId',null,['class' => 'form-control input-sm','id' => 'regionId']) !!}
              <span class="help-block"  v-cloak v-if="submition && wrongRegion">@{{regionFB}}</span>
          </div>
      </div>

       <div class="form-group">
          {!! Form::label('Position', 'Position', array('class' => 'col-xs-3 control-label')) !!}
          <div class="col-xs-8" >
              {!! Form::text('positionId',null,['class' => 'form-control input-sm','id' => 'positionId']) !!}
              <span class="help-block"  v-cloak v-if="submition && wrongPosition">@{{positionFB}}</span>
          </div>
      </div>

      <div class="form-group">
          {!! Form::label('Physical Address', 'Physical Address', array('class' => 'col-xs-3 control-label')) !!}
          <div class="col-xs-8">
              {!! Form::text('physicalAddress',null,['class' => 'form-control input-sm','id' => 'physicalAddress']) !!}
              <span class="help-block" v-cloak v-if="submition && wrongphysicalAddress">@{{physicalAddressFB }}</span>
          </div>
      </div>

      <div class="form-group"  v-bind:class="{ 'has-error': submition && wrongUnit }">
          {!! Form::label('Cellphone', 'Cellphone', array('class' => 'col-xs-3 control-label')) !!}
          <div class="col-xs-8">
              {!! Form::text('cellphone',null,['class' => 'form-control input-sm','id' => 'cellphone']) !!}
              <span class="help-block" v-cloak v-if="submition && wrongCellphone">@{{cellphoneFB }}</span>
          </div>
      </div>

      <div class="form-group" >
          <div class="col-md-offset-3 col-md-10">
              <button type="submit" type="button" class="btn btn-primary">
                 Update 
              </button>
          </div>
      </div>
      {!! Form::close() !!}