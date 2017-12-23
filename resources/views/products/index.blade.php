@extends('home.landingPage')
@section('content')
<div style="margin: 10px 0 10px 15px;">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addProductTypeModal">
                        NEW
                    </button>
                </div>

<div class="col-xs-6 col-md-12">
<hr>

<div class="panel panel-default">
  <div class="panel-heading">New Product Form</div>
  <div class="panel-body">
      {!! Form::open(['url' => 'createProduct', 'method' => 'post', 'class' => 'form-horizontal', 'id'=>"addProductsForm" ,'v-on:submit'=>"validateForm" ]) !!}
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
             <select @change="updateDroneType($event.target.value)"  name="productTypeId" v-cloak class="form-control" id="droneTypeData"  v-model="productTypeId">
                                @foreach($productType as $type)
                                    <option  :value="{{$type->id}}">{{$type->name}}</option>
                                @endforeach
                            </select>
             <!--  {!! Form::text('productTypeId',null,['class' => 'form-control input-sm','id' => 'productTypeId' ,'v-model'=>'productTypeId']) !!} -->
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

      <div class="form-group"  v-bind:class="{ 'has-error': submition && wrongPrice }">
          {!! Form::label('Price', 'Price', array('class' => 'col-md-3 control-label')) !!}
          <div class="col-md-6">
              {!! Form::text('price',NULL,['class' => 'form-control input-sm','id' => 'price','v-model'=>'price']) !!}
              <span class="help-block" v-cloak v-if="submition && wrongPrice">@{{priceFB }}</span>
          </div>
      </div>

      <div class="form-group"  v-bind:class="{ 'has-error': submition && wrongUnit }">
          {!! Form::label('Quantity', 'Quantity', array('class' => 'col-md-3 control-label')) !!}
          <div class="col-md-6">
              {!! Form::text('initialQty',NULL,['class' => 'form-control input-sm','id' => 'initialQty','v-model'=>'initialQty']) !!}
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