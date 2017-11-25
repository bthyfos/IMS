<div class="modal fade" id="addDepartmentModal" tabindex="-1" role="dialog" aria-labelledby="addDepartmentModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addDepartmentModalLabel">ADD DEPARTMENT</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                {!! Form::open(['url' => '/addDepartment', 'class' => 'form-horizontal' ,'id'=>'addDepartmentForm']) !!}

                <div class="form-group" style="margin-top: 5px;">
                    {!! Form::label('departmentName', 'Name:', ['class' => 'col-lg-2 control-label']) !!}
                    <div class="col-lg-6">
                        {!! Form::text('departmentName', $value = null, ['class' => 'form-control', 'placeholder' => 'Department Name']) !!}
                    </div>
                </div>

                <div class="form-group" style="margin-top: 5px;">
                    {!! Form::label('regionId', 'Region:', ['class' => 'col-lg-2 control-label']) !!}
                    <div class="col-lg-6">
                        {!! Form::select('regionId', $selectRegions, ['class' => 'form-control']) !!}
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-lg-6 col-lg-offset-2">
                        {!! Form::submit('Submit', ['class' => 'btn btn-sm btn-info pull-left'] ) !!}
                    </div>
                </div>
                {!! Form::close()  !!}
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
