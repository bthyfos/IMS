@extends('home.landingPage')
@section('content')

<div class="col-xs-6 col-md-12">
<div class="panel panel-default">
  <div class="panel-heading">New Product Form</div>
  <div class="panel-body">
      {!! Form::open(['url' => 'storeProducts', 'method' => 'post', 'class' => 'form-horizontal', 'id'=>"addProductsForm" ,'v-on:submit'=>"validateForm" ]) !!}
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

      <div class="form-group"  v-bind:class="{ 'has-error': submition && wrongName }">
          {!! Form::label('Name', 'Name', array('class' => 'col-md-3 control-label')) !!}
          <div class="col-md-6" >
              {!! Form::text('name',NULL,['class' => 'form-control input-sm','id' => 'name','v-model'=>'name']) !!}
              <span class="help-block"  v-cloak v-if="submition && wrongName">@{{nameFB}}</span>
          </div>
      </div>

      <div class="form-group"  v-bind:class="{ 'has-error': submition && wrongTypeId }">
          {!! Form::label('Product Type', 'Product Type', array('class' => 'col-md-3 control-label')) !!}
          <div class="col-md-6">
              {!! Form::text('type_id',null,['class' => 'form-control input-sm','id' => 'type_id' ,'v-model'=>'type_id']) !!}
              <span class="help-block" v-cloak v-if="submition && wrongTypeId">@{{type_idFB }}</span>

          </div>
      </div>

      <div class="form-group"  v-bind:class="{ 'has-error': submition && wrongSpecification }">
          {!! Form::label('Specification', 'Specification', array('class' => 'col-md-3 control-label')) !!}
          <div class="col-md-6">
              {!! Form::textarea('specification',NULL,['class' => 'form-control input-sm','id' => 'specification' , 'placeholder'=>'e.g describe the product here...' ,'v-model'=>'specification']) !!}
              <span class="help-block"  v-cloak v-if="submition && wrongSpecification">@{{specificationFB }}</span>

          </div>
      </div>

      <div class="form-group "  v-bind:class="{ 'has-error': submition && wrongOrderedDate }">
          {!! Form::label('Ordered Date', 'Ordered Date', array('class' => 'col-md-3 control-label')) !!}
          <div class="col-md-6">
              {!! Form::text('ordered_date',NULL,['class' => 'form-control input-sm','id' => 'ordered_date' ,'placeholder'=>'e.g 2017-13-10' ,'v-model'=>'ordered_date']) !!}
              <span class="help-block"  v-cloak v-if="submition && wrongOrderedDate">@{{ordered_dateFB }}</span>
          </div>
      </div>

      <div class="form-group "  v-bind:class="{ 'has-error': submition && wrongReceivedDate }">
          {!! Form::label('Received Date', 'Received Date', array('class' => 'col-md-3 control-label')) !!}
          <div class="col-md-6">
              {!! Form::text('received_date',NULL,['class' => 'form-control input-sm','id' => 'received_date' ,'placeholder'=>'e.g 2017-31-10' ,'v-model'=>'received_date']) !!}
              <span class="help-block" v-cloak v-if="submition && wrongReceivedDate">@{{received_dateFB }}</span>
          </div>
      </div>

      <div class="form-group"  v-bind:class="{ 'has-error': submition && wrongPrice }">
          {!! Form::label('Price', 'Price', array('class' => 'col-md-3 control-label')) !!}
          <div class="col-md-6">
              {!! Form::text('price',NULL,['class' => 'form-control input-sm','id' => 'price','v-model'=>'price']) !!}
              <span class="help-block" v-cloak v-if="submition && wrongPrice">@{{priceFB }}</span>
          </div>
      </div>

      <div class="form-group"  v-bind:class="{ 'has-error': submition && wrongUnit }">
          {!! Form::label('Unit', 'Unit', array('class' => 'col-md-3 control-label')) !!}
          <div class="col-md-6">
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
  </div>
</div>
</div>
@endsection
@section('footer')
@stop