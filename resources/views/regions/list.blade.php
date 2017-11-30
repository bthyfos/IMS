@extends('admin.dashboard')
@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">

            <div style="margin-top:20px;">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addRegionModal">
                 NEW
                </button>
            </div>
            <h4 class="page-header"><strong>REGIONS</strong></h4>
</div>
</div>
<div class="row">
        <div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading">
</div>
    <div style="padding:12px 12px 12px 12px;">
    <table class="table" id="regionsTable" >
        <thead>
        <tr>
            <th>Region Id</th>
            <th>Region name</th>
        </tr>
        </thead>
    </table>
    </div>
<div class="panel-body">
<div class="flot-chart">
<div class="flot-chart-content" id="flot-line-chart">

</div>

</div>
</div>
</div>
</div>
</div>
</div>
@stop
@push('scripts')
    <script>
        $(function() {
            $('#regionsTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('getRegions') !!}',
                columns: [
                    { data: 'id', name: 'id' }  ,
                    { data: 'name', name: 'name' }
                ]
            });
        });
    </script>
@endpush