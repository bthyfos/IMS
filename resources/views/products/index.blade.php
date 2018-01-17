@extends('home.landingPage')
@section('content')
<div style="margin: 10px 0 10px 15px;">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addProductTypeModal">
                        NEW
                    </button>
                </div>

<div class="col-md-12">
<hr>

<div class="panel panel-default">
  <div class="panel-heading">New Product Form</div>
  <div class="panel-body">
      {!! Form::open(['url' => 'createProduct', 'method' => 'post', 'class' => 'form-horizontal', 'id'=>"addProductsForm" ,'v-on:submit'=>"validateForm" ]) !!}
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

      <div class="form-group">
          {!! Form::label('Name', 'Name', array('class' => 'col-md-3 control-label')) !!}
          <div class="col-md-6" >
<<<<<<< HEAD
              {!! Form::text('name',NULL,['class' => 'form-control input-sm','id' => 'name','v-model'=>'name']) !!}
              <span class="help-block"  v-cloak v-if="submition && wrongName" style="color:red;">@{{nameFB}}</span>
          </div>
      </div>

      <div class="form-group" >
=======
              {!! Form::text('name',NULL,['class' => 'form-control input-sm','id' => 'name','v-model'=>'name', 'v-validate' =>"'alpha_spaces'", 'autocomplete'=>'off']) !!}
               <span style="color: red;"  v-cloak v-show="errors.has('name')" class="help is-danger">@{{ errors.first('name') }}</span>
              <span class="help-block"  v-cloak v-if="submition && wrongName">@{{nameFB}}</span>
          </div>
      </div>

      <div class="form-group">
>>>>>>> 60624c774d074318ad7d9a582ca2d8f4ba2da151
          {!! Form::label('Product Type', 'Product Type', array('class' => 'col-md-3 control-label')) !!}
          <div class="col-md-6">
             <select @change="updateDroneType($event.target.value)"  name="productTypeId" v-cloak class="form-control" id="droneTypeData"  v-model="productTypeId">
                                @foreach($productType as $type)
                                    <option  :value="{{$type->id}}">{{$type->name}}</option>
                                @endforeach
                            </select>
             <!--  {!! Form::text('productTypeId',null,['class' => 'form-control input-sm','id' => 'productTypeId' ,'v-model'=>'productTypeId']) !!} -->
              <span class="help-block" v-cloak v-if="submition && wrongTypeId" style="color:red;">@{{type_idFB }}</span>

          </div>
      </div>

<<<<<<< HEAD
      <div class="form-group" >
          {!! Form::label('Specification', 'Specification', array('class' => 'col-md-3 control-label')) !!}
          <div class="col-md-6">
              {!! Form::textarea('specification',NULL,['class' => 'form-control input-sm','id' => 'specification' , 'placeholder'=>'e.g describe the product here...' ,'v-model'=>'specification']) !!}
              <span class="help-block"  v-cloak v-if="submition && wrongSpecification" style="color:red;">@{{specificationFB }}</span>
=======
      <div class="form-group">
          {!! Form::label('Specification', 'Specification', array('class' => 'col-md-3 control-label')) !!}
          <div class="col-md-6">
              {!! Form::textarea('specification',NULL,['class' => 'form-control input-sm','id' => 'specification' , 'placeholder'=>'e.g describe the product here...' ,'v-model'=>'specification','autocomplete'=>'off']) !!}
              <span class="help-block"  v-cloak v-if="submition && wrongSpecification">@{{specificationFB }}</span>
>>>>>>> 60624c774d074318ad7d9a582ca2d8f4ba2da151

          </div>
      </div>

<<<<<<< HEAD
      <div class="form-group" >
          {!! Form::label('Price', 'Price', array('class' => 'col-md-3 control-label')) !!}
          <div class="col-md-6">
              {!! Form::text('price',NULL,['class' => 'form-control input-sm','id' => 'price','v-model'=>'price']) !!}
              <span class="help-block" v-cloak v-if="submition && wrongPrice" style="color:red;">@{{priceFB }}</span>
          </div>
      </div>

      <div class="form-group" >
          {!! Form::label('Quantity', 'Quantity', array('class' => 'col-md-3 control-label')) !!}
          <div class="col-md-6">
              {!! Form::text('initialQty',NULL,['class' => 'form-control input-sm','id' => 'initialQty','v-model'=>'initialQty']) !!}
              <span class="help-block" v-cloak v-if="submition && wrongUnit" style="color:red;">@{{unitFB }}</span>
=======
      <div class="form-group">
          {!! Form::label('Price', 'Price', array('class' => 'col-md-3 control-label')) !!}
          <div class="col-md-6">
               <input name="price" class="form-control" v-model="price" v-validate="'decimal'" :class="{'input': true, 'is-danger': errors.has('price') }" type="text" autocomplete= "off" placeholder="100.00">
            <span style="color: red;"  v-cloak v-show="errors.has('price')" class="help is-danger">@{{ errors.first('price') }}</span>
              <span class="help-block" v-cloak v-if="submition && wrongPrice">@{{priceFB }}</span>
          </div>
      </div>

      <div class="form-group">
          {!! Form::label('Quantity', 'Quantity', array('class' => 'col-md-3 control-label')) !!}
          <div class="col-md-6">
            <input name="initialQty" class="form-control" v-model="initialQty" v-validate="'numeric'" :class="{'input': true, 'is-danger': errors.has('initialQty') }" type="text" autocomplete= "off">
            <span style="color: red;"  v-cloak v-show="errors.has('initialQty')" class="help is-danger">@{{ errors.first('initialQty') }}</span>
              <span class="help-block" v-cloak v-if="submition && wrongUnit">@{{unitFB }}</span>
>>>>>>> 60624c774d074318ad7d9a582ca2d8f4ba2da151
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