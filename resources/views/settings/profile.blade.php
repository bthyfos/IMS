{!! Form::model($userDetails, ['url' => 'updateUser', 'method' => 'post', 'class' => 'form-horizontal', 'id'=>"updateForm"]) !!}
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

      <div class="form-group"  v-bind:class="{ 'has-error': submition && wrongName }">
          {!! Form::label('Name', 'Name', array('class' => 'col-xs-3 control-label')) !!}
          <div class="col-xs-8" >
              {!! Form::text('name',null,['class' => 'form-control input-sm','id' => 'name','disabled']) !!}
              <span class="help-block"  v-cloak v-if="submition && wrongName">@{{nameFB}}</span>
          </div>
      </div>

        <div class="form-group"  v-bind:class="{ 'has-error': submition && wrongName }">
          {!! Form::label('Surname', 'Surname', array('class' => 'col-xs-3 control-label')) !!}
          <div class="col-xs-8" >
              {!! Form::text('surname',null,['class' => 'form-control input-sm','id' => 'name','disabled']) !!}
              <span class="help-block"  v-cloak v-if="submition && wrongName">@{{nameFB}}</span>
          </div>
      </div>

        <div class="form-group"  v-bind:class="{ 'has-error': submition && wrongName }">
          {!! Form::label('Staff Id', 'Staff Id', array('class' => 'col-xs-3 control-label')) !!}
          <div class="col-xs-8" >
              {!! Form::text('staffId',null,['class' => 'form-control input-sm','id' => 'name','disabled']) !!}
              <span class="help-block"  v-cloak v-if="submition && wrongName">@{{nameFB}}</span>
          </div>
      </div>

        <div class="form-group"  v-bind:class="{ 'has-error': submition && wrongName }">
          {!! Form::label('Email', 'Email', array('class' => 'col-xs-3 control-label')) !!}
          <div class="col-xs-8" >
              {!! Form::text('email',null,['class' => 'form-control input-sm','id' => 'name','disabled']) !!}
              <span class="help-block"  v-cloak v-if="submition && wrongName">@{{nameFB}}</span>
          </div>
      </div>

        <div class="form-group"  v-bind:class="{ 'has-error': submition && wrongName }">
          {!! Form::label('Region', 'Region', array('class' => 'col-xs-3 control-label')) !!}
          <div class="col-xs-8" >
              {!! Form::text('regionId',null,['class' => 'form-control input-sm','id' => 'regionId']) !!}
              <span class="help-block"  v-cloak v-if="submition && wrongName">@{{nameFB}}</span>
          </div>
      </div>

     <!--   <div class="form-group"  v-bind:class="{ 'has-error': submition && wrongName }">
          {!! Form::label('Region', 'Region', array('class' => 'col-xs-3 control-label')) !!}
          <div class="col-xs-8" >
              {!! Form::text('name',NULL,['class' => 'form-control input-sm','id' => 'name','v-model'=>'name']) !!}
              <span class="help-block"  v-cloak v-if="submition && wrongName">@{{nameFB}}</span>
          </div>
      </div> -->

       <div class="form-group"  v-bind:class="{ 'has-error': submition && wrongName }">
          {!! Form::label('Position', 'Position', array('class' => 'col-xs-3 control-label')) !!}
          <div class="col-xs-8" >
              {!! Form::text('positionId',null,['class' => 'form-control input-sm','id' => 'positionId']) !!}
              <span class="help-block"  v-cloak v-if="submition && wrongName">@{{nameFB}}</span>
          </div>
      </div>

     <!--  <div class="form-group"  v-bind:class="{ 'has-error': submition && wrongSpecification }">
          {!! Form::label('Specification', 'Specification', array('class' => 'col-xs-3 control-label')) !!}
          <div class="col-xs-8">
              {!! Form::textarea('specification',NULL,['class' => 'form-control input-sm','id' => 'specification' , 'placeholder'=>'e.g describe the product here...' ,'v-model'=>'specification']) !!}
              <span class="help-block"  v-cloak v-if="submition && wrongSpecification">@{{specificationFB }}</span>

          </div>
      </div> -->

      <div class="form-group"  v-bind:class="{ 'has-error': submition && wrongUnit }">
          {!! Form::label('Physical Address', 'Physical Address', array('class' => 'col-xs-3 control-label')) !!}
          <div class="col-xs-8">
              {!! Form::text('physicalAddress',null,['class' => 'form-control input-sm','id' => 'physicalAddress']) !!}
              <span class="help-block" v-cloak v-if="submition && wrongUnit">@{{unitFB }}</span>
          </div>
      </div>

      <div class="form-group"  v-bind:class="{ 'has-error': submition && wrongUnit }">
          {!! Form::label('Cellphone', 'Cellphone', array('class' => 'col-xs-3 control-label')) !!}
          <div class="col-xs-8">
              {!! Form::text('cellphone',null,['class' => 'form-control input-sm','id' => 'cellphone']) !!}
              <span class="help-block" v-cloak v-if="submition && wrongUnit">@{{unitFB }}</span>
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