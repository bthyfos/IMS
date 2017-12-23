<div class="modal fade" id="addProductTypeModal" tabindex="-1" role="dialog" aria-labelledby="addProductTypeModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addProductTypeModalLabel">ADD PRODUCT TYPE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-bottom: 10px;">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                {!! Form::open(['url' => '/addProductType', 'class' => 'form-horizontal' ,'id'=>'addProductTypeForm']) !!}

                <div class="form-group" style="margin-top: 5px;">
                    {!! Form::label('name', 'Name:', ['class' => 'col-lg-2 control-label']) !!}
                    <div class="col-lg-6">
                        {!! Form::text('name', $value = null, ['class' => 'form-control', 'placeholder' => 'Product Type Name']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-lg-6 col-lg-offset-2">
                        {!! Form::submit('Add', ['class' => 'btn btn-sm btn-info pull-left'] ) !!}
                    </div>
                </div>
                {!! Form::close()  !!}
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>