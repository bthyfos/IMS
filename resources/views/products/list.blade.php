@extends('home.landingPage')
@section('content')
<div class="col-xs-8 col-md-12">
  <hr/>
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
    </tr>
  </thead>

</table>
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
            { data: 'name', name: 'name' },
            { data: 'productTypeId', name: 'productTypeId' },
            { data: 'specification', name: 'specification'},
            { data: 'userId', name: 'userId' },
            { data: 'availableQty', name: 'availableQty'}
        ]
    });
});
</script>
@endpush