@extends('home.landingPage')
@section('content')

<div class="col-xs-4 col-md-4">
<div class="panel panel-default">
  <div class="panel-heading">Search Form</div>
  <div class="panel-body">

  	 {!! Form::open(['url' => '', 'method' => 'post', 'class' => 'form-horizontal', 'id'=>"recipientForm",'v-on:submit'=>"recipientValidateForm"]) !!}
     <input type="hidden" name="_token" value="{{ csrf_token()}}">
    <div class="form-group" v-bind:class="{ 'has-error': submition && wrongRname }">
        {!! Form::label('Recipient Name', 'Recipient Name', array('class' => 'col-md-3 control-label')) !!}

        <div class="col-md-6">
            {{--{!! Form::text('name',NULL,['class' => 'form-control input-sm','id' => 'name','v-model'=>'' , 'v-on:keyup'=>'getResults()','  autocomplete'=>'off']) !!}--}}
            <input type="text" class="form-control"
                   :placeholder="placeholder"
                   autocomplete="off"
                   v-model="query"
                   @keydown.down="down"
                   @keydown.up="up"
                   @keydown.enter.prevent="hit"
                   @keydown.esc="reset"
                   @input="update($event)"
            />

            <ul v-show="hasItems" class="dropdown-menu-list dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                <li v-for="(item , index) in items" :class="{active:activeClass(index)}"
                    @mousedown="hit" @mousemove="setActive(index)">
                    <a v-html="highlighting(item, vue)"></a>
                </li>
            </ul>
            <ul v-if="showSearchingFlag" v-show="!hasItems&&!isEmpty" class="dropdown-menu" role="menu"
                aria-labelledby="dropdownMenu">
                <li class="active" @mousemove="setActive(index)" v-if="!loading">
                    <a>
                        <span v-html="NoResultText"></span>
                    </a>
                </li>
                <li class="active" @mousemove="setActive(index)" v-else>
                    <a>
                        <span v-html="SearchingText"></span>
                    </a>
                </li>
            </ul>
            <span class="help-block" v-cloak v-if="submition && wrongRname">@{{nameFB }}</span>
          </div>
        </div>

        <div class="form-group" v-bind:class="{ 'has-error': submition && wrongPname }">
        {!! Form::label('Product Name', 'Product Name', array('class' => 'col-md-3 control-label')) !!}
        <div class="col-md-6">
            {!! Form::text('product_name',NULL,['class' => 'form-control input-sm','id' => 'product_name' ,'placeholder'=>'e.g 2017-31-10','v-model'=>'product_name','  autocomplete'=>'off']) !!}
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