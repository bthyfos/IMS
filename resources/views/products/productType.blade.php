<div class="modal fade" id="addProductTypeModal" tabindex="-1" role="dialog" aria-labelledby="addProductTypeModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addProductTypeModalLabel"><strong>ADD PRODUCT TYPE</strong></h5>

            </div>
            <div class="modal-body" id="addProductTypeForm">

                {!! Form::open(['url' => '/addProductType', 'class' => 'form-horizontal' ,'id'=>'addProductTypeForm' ,'v-on:submit'=>"productTypeForm"]) !!}

                <div class="form-group" style="margin-top: 5px;">
                    {!! Form::label('name', 'Name', ['class' => 'col-lg-3 control-label']) !!}
                    <div class="col-lg-3">
                        {!! Form::text('name', $value = null, ['class' => 'form-control', 'placeholder' => 'Product Type Name','v-model'=>'name']) !!}
                         <span class="help-block"  v-cloak v-if="submition && wrongName" style="color:red;">@{{nameFB}}</span>
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
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>