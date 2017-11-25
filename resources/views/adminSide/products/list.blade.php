@extends('admin.dashboard')
@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div>
                    {{--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addRegionModal">--}}
                        {{--NEW--}}
                    {{--</button>--}}
                </div>
                <h4 class="page-header"><strong>STOCK AVAILABLE</strong></h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    </div>
                    <div>
                        <table class="table" id="stockTable">
                            <thead>
                            <tr>
                                <th>PRODUCT ID </th>
                                <th>PRODUCT NAME</th>
                                <th>AVAILABLE QUANTITY</th>
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
            $('#stockTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('productsInStock') !!}',
                columns: [
                    { data: 'id', name: 'id' }  ,
                    { data: 'name', name: 'name' },
                    { data: 'availableQty', name: 'availableQty' }

                ]
            });
        });
    </script>
@endpush