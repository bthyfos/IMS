@extends('home.landingPage')
@section('content')
<div class="col-xs-8 col-md-12">
<div class="panel panel-default">
  <div class="panel-heading">Out Of Stock Products</div>
  <div class="panel-body">
   
  	<table class="table" id="productsTable">
  <thead>
    <tr>
      <th>PRODUCT ID</th>
      <th>PRODUCT NAME</th>
      <th>RAN OUT SINCE</th>
    </tr>
  </thead>
  </tbody>
</table>

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
        ajax: '{!! route('inavailableStockList') !!}',
        columns: [
           { data: 'id', name: 'id' }  ,
                    { data: 'name', name: 'name' },
                    { data: 'updated_at', name: 'updated_at'}
        ]
    });
});
</script>
@endpush