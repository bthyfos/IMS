<div class="modal fade" id="addPositionModal" tabindex="-1" role="dialog" aria-labelledby="addPositionModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addPositionModalLabel">ADD POSITIONS</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                {!! Form::open(['url' => '/addPosition', 'class' => 'form-horizontal' ,'id'=>'addPositionForm']) !!}

                <div class="form-group" style="margin-top: 5px;">
                    {!! Form::label('positionName', 'Name:', ['class' => 'col-lg-2 control-label']) !!}
                    <div class="col-lg-6">
                        {!! Form::text('positionName', $value = null, ['class' => 'form-control', 'placeholder' => 'Type here']) !!}
                    </div>
                </div>

                <div class="form-group" style="margin-top: 5px;">
                    {!! Form::label('regionId', 'Region:', ['class' => 'col-lg-2 control-label']) !!}
                    <div class="col-lg-6">
                        {!! Form::select('regionId', $selectRegions, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="form-group" style="margin-top: 5px;">
                    {!! Form::label('departmentId', 'Department:', ['class' => 'col-lg-2 control-label']) !!}
                    <div class="col-lg-6">
                        {!! Form::select('departmentId', $selectDepartments, ['class' => 'form-control']) !!}
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-lg-6 col-lg-offset-2">
                        {!! Form::submit('Add', ['class' => 'btn btn-primary pull-left'] ) !!}
                    </div>
                </div>
                {!! Form::close()  !!}
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>

