@extends('home.landingPage')
@section('content')

<div class="col-xs-4 col-md-4">
<div class="panel panel-default">
  <div class="panel-heading">Search Form</div>
  <div class="panel-body">

  	 {!! Form::open(['url' => '', 'method' => 'post', 'class' => 'form-horizontal', 'id'=>"recipientForm",'v-on:submit'=>"recipientValidateForm"]) !!}
     <input type="hidden" name="_token" value="{{ csrf_token() }}">
 

    
    <div class="form-group" v-bind:class="{ 'has-error': submition && wrongRname }">
        {!! Form::label('Recipient Name', 'Recipient Name', array('class' => 'col-md-3 control-label')) !!}

        <div class="col-md-6">
            {!! Form::text('name',NULL,['class' => 'form-control input-sm','id' => 'name','v-model'=>'queryString' , 'v-on:keyup'=>'getResults()','  autocomplete'=>'off']) !!}
            <span class="help-block" v-cloak v-if="submition && wrongRname">@{{nameFB }}</span>
          </div>
        </div>

        <div class="form-group" v-bind:class="{ 'has-error': submition && wrongPname }">
        {!! Form::label('Product Name', 'Product Name', array('class' => 'col-md-3 control-label')) !!}
        <div class="col-md-6">
            {!! Form::text('product_name',NULL,['class' => 'form-control input-sm','id' => 'product_name' ,'placeholder'=>'e.g 2017-31-10','v-model'=>'product_name','  autocomplete'=>'off']) !!}
              <ul v-if="users.length"  class="dropdown-menu-list dropdown-menu">
                <li  v-for="(user,index)in users" :key="user.id" :class="{active:activeClass(index)}"
            @mousedown="hit" @mousemove="setActive(index)">
                   <span v-text="user.name"  v-cloak></span>
                </li>
              </ul>
            <span class="help-block" v-cloak v-if="submition && wrongPname">@{{product_nameFB }}</span>
          </div>
        </div>


        <div class="form-group" v-bind:class="{ 'has-error': submition && wrongPquantity }">
        {!! Form::label('Quantity', 'Quantity', array('class' => 'col-md-3 control-label')) !!}
        <div class="col-md-6">
            {!! Form::text('quantity',NULL,['class' => 'form-control input-sm','id' => 'quantity','v-model'=>'quantity']) !!}
            <span class="help-block" v-cloak v-if="submition && wrongPquantity">@{{quantityFB }}</span>
          </div>
        </div>

        <div class="form-group">
        <div class="col-md-offset-3 col-md-10">
            <button type="submit" type="button" class="btn btn-primary">
                Hand Over
            </button>
        </div>
    </div>
      {!! Form::close() !!}   

    </div>
</div>     
</div>
<div class="col-xs-8 col-md-8">
<div class="panel panel-default">
  <div class="panel-heading">HandOvers</div>
  <div class="panel-body">
   <table class="table" id="handoverTable">
  <thead>
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Username</th>
    </tr>
  </thead>
  </table>
  </div>
</div>
</div>
@endsection
@push('scripts')
<script>
$(function() {
    $('#handoverTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('handoverList') !!}',
        columns: [
            { data: 'name', name: 'name' },
            { data: 'username', name: 'username' },
            { data: 'created_at', name: 'created_at'}
        ]
    });
});
</script>
@endpush