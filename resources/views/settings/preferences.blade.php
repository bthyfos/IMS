{!! Form::open(['url' => '', 'method' => 'post', 'class' => 'form-horizontal', 'id'=>"addProductsForm" ,'v-on:submit'=>"validateForm" ]) !!}
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

      <div class="form-group"  v-bind:class="{ 'has-error': submition && wrongName }">
          {!! Form::label('Name', 'Name', array('class' => 'col-xs-3 control-label')) !!}
          <div class="col-xs-8" >
              {!! Form::text('name',NULL,['class' => 'form-control input-sm','id' => 'name','v-model'=>'name']) !!}
              <span class="help-block"  v-cloak v-if="submition && wrongName">@{{nameFB}}</span>
          </div>
      </div>

      <div class="form-group"  v-bind:class="{ 'has-error': submition && wrongSpecification }">
          {!! Form::label('Specification', 'Specification', array('class' => 'col-xs-3 control-label')) !!}
          <div class="col-xs-8">
              {!! Form::textarea('specification',NULL,['class' => 'form-control input-sm','id' => 'specification' , 'placeholder'=>'e.g describe the product here...' ,'v-model'=>'specification']) !!}
              <span class="help-block"  v-cloak v-if="submition && wrongSpecification">@{{specificationFB }}</span>

          </div>
      </div>

      <div class="form-group"  v-bind:class="{ 'has-error': submition && wrongUnit }">
          {!! Form::label('Unit', 'Unit', array('class' => 'col-xs-3 control-label')) !!}
          <div class="col-xs-8">
              {!! Form::text('unit',NULL,['class' => 'form-control input-sm','id' => 'unit','v-model'=>'unit']) !!}
              <span class="help-block" v-cloak v-if="submition && wrongUnit">@{{unitFB }}</span>
          </div>
      </div>

      <div class="form-group" >
          <div class="col-md-offset-3 col-md-10">
              <button type="submit" type="button" class="btn btn-primary">
                  Add To Stock
              </button>
          </div>
      </div>
      {!! Form::close() !!}