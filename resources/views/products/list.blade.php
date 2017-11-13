@extends('home.landingPage')
@section('content')
<div class="col-xs-8 col-md-12">
<div class="panel panel-default">
  <div class="panel-heading">In Stock Products</div>
  <div class="panel-body">
   <table class="table" id="productsTable">
  <thead>
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Username</th>
    </tr>
  </thead>
  </tbody>
</table>
  </div>
</div>
</div>
@endsection
<!-- @section('footer')
<script>
  jQuery(document).ready(function($){
    var productsTable     = $('#productsTable').DataTable({
                "autoWidth": false,

                "processing": true,
                speed: 500,
                "dom": 'Bfrtip',
                "buttons": [
                    'copyHtml5',
                    'excelHtml5',
                    ,{

                        extend : 'pdfHtml5',
                        title  : 'Siyaleader_Report',
                        header : 'I am text in',
                    },

                ],


                "order" :[[0,"desc"]],
                "ajax": "{!! url('/productList/')!!}",
                "processing": true,
                "serverSide": true,
                "order" :[[0,"desc"]],

                "buttons": [
                    'excelHtml5',
                    'csvHtml5',
                    'pdfHtml5'
                ],


                "columns": [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'surname', name: 'surname'},

                    {data: 'created_at', name: 'created_at'},
                ],

                "aoColumnDefs": [
                    { "bSearchable": false, "aTargets": [ 4] },
                    { "bSortable": false, "aTargets": [ 4] }
                ]

            });
        });


  </script>
@stop
 -->
@push('scripts')
<script>
$(function() {
    $('#productsTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('productList') !!}',
        columns: [
            { data: 'name', name: 'name' },
            { data: 'username', name: 'username' },
            { data: 'created_at', name: 'created_at'}
        ]
    });
});
</script>
@endpush