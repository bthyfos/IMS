@extends('home.landingPage')
@section('content')
<div class="col-xs-8 col-md-12">
<div class="panel panel-default">
 
  <div class="panel-heading">In Stock Products</div>
  <div class="panel-body">
  <div class = "table-responsive">
   <table class="table" id="productsTable">
  <thead>
    <tr>
      <th>Product Name</th>
      <th>Product Type</th>
      <th>Specification</th>
      <th>Created By</th>
      <th>Available Qty</th>
        <th>Action</th>
    </tr>
  </thead>

</table>
</div>
  </div>
</div>
</div>

<div class="modal fade" id="detailsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><strong>Details</strong></h5>
        </div>
        <div class="modal-body">

            {!! Form::open(['url' => '/addProductType', 'class' => 'form-horizontal' ,'id'=>'addProductTypeForm' ,'v-on:submit'=>"productTypeForm"]) !!}

            <div class="form-group" style="margin-top: 5px;">
                {!! Form::label('name', 'Name', ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-6">
                    {!! Form::text('name', $value = null, ['class' => 'form-control', 'placeholder' => 'Product Type Name','v-model'=>'name']) !!}
                    <span class="help-block"  v-cloak v-if="submition && wrongName" style="color:red;">@{{nameFB}}</span>
                </div>
            </div>
            <div class="form-group" style="margin-top: 5px;">
                {!! Form::label('name', 'Product Type Name', ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-6">
                    {!! Form::text('name', $value = null, ['class' => 'form-control', 'placeholder' => 'Product Type Name','v-model'=>'name']) !!}
                    <span class="help-block"  v-cloak v-if="submition && wrongName" style="color:red;">@{{nameFB}}</span>
                </div>
            </div>
            <div class="form-group" style="margin-top: 5px;">
                {!! Form::label('name', 'Created By', ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-6">
                    {!! Form::text('name', $value = null, ['class' => 'form-control', 'placeholder' => 'Product Type Name','v-model'=>'name']) !!}
                    <span class="help-block"  v-cloak v-if="submition && wrongName" style="color:red;">@{{nameFB}}</span>
                </div>
            </div>
            <div class="form-group" style="margin-top: 5px;">
                {!! Form::label('name', 'Specification', ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-6">
                    {!! Form::text('name', $value = null, ['class' => 'form-control', 'placeholder' => 'Product Type Name','v-model'=>'name']) !!}
                    <span class="help-block"  v-cloak v-if="submition && wrongName" style="color:red;">@{{nameFB}}</span>
                </div>
            </div>
            <div class="form-group" style="margin-top: 5px;">
                {!! Form::label('name', 'Available Quantity', ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-6">
                    {!! Form::text('name', $value = null, ['class' => 'form-control', 'placeholder' => 'Product Type Name','v-model'=>'name']) !!}
                    <span class="help-block"  v-cloak v-if="submition && wrongName" style="color:red;">@{{nameFB}}</span>
                </div>
            </div>

            <div class="form-group" style="margin-top: 5px;">
                {!! Form::label('name', 'Price', ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-6">
                    {!! Form::text('name', $value = null, ['class' => 'form-control', 'placeholder' => 'Product Type Name','v-model'=>'name']) !!}
                    <span class="help-block"  v-cloak v-if="submition && wrongName" style="color:red;">@{{nameFB}}</span>
                </div>
            </div>

            <div class="form-group" style="margin-top: 5px;">
                {!! Form::label('name', 'Added Date', ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-6">
                    {!! Form::text('name', $value = null, ['class' => 'form-control', 'placeholder' => 'Product Type Name','v-model'=>'name']) !!}
                    <span class="help-block"  v-cloak v-if="submition && wrongName" style="color:red;">@{{nameFB}}</span>
                </div>
            </div>
            {!! Form::close()  !!}


        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>
</div>


@endsection
@push('scripts')
<script>
$(function() {
    $('#productsTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('productList') !!}',
        columns: [
            { data: 'name' },
            { data: 'product_type.name'},
            { data: 'specification'},
            {
                data: 'user',
                render: function ( data) {
                    return data.name +' '+ data.surname;
                }
            },
            { data: 'availableQty'},
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ],

        initComplete: function () {
            this.api().columns().every(function () {
                var column = this;
                if(column[0][0] == 5){
                    // intentionally empty, we want to exclude column 5 from searching
                } else {
                    var input = document.createElement("input");
                    $(input).appendTo($(column.footer()).empty())
                        .on('keypress', function () {
                            column.search($(this).val(), false, false, true).draw();
                        });
                }
            });
        }


    });
});

function  getDetails(id)
{

    console.log(id);




}

$( '#detailsModal' ).on( 'show.bs.modal', function (e) {
    var target = e.relatedTarget;
    // get values for particular rows
    var tr = $( target ).closest( 'tr' );
    var tds = tr.find( 'td' );

    // put values into editor's form elements
    // tds.eq(0).val() -- 1st column
    $( '#id_cartao' ).val( tds.eq(0).val() );
    // tds.eq(1).val() -- 2nd column and so on.
    // same goes to others element
});

</script>
@endpush