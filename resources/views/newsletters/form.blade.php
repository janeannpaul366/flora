@if(isset($newsletter))
    {!! Form::model($newsletter,['method'=>'put','id'=>'frm']) !!}
@else
    {!! Form::open(['id'=>'frm']) !!}
@endif

<div class="modal-header">
        <h5 class="modal-title">Send Newsletter</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
</div>
<div class="modal-body">
        <div class="form-group row required">
                {{ Form::label("email","Email",["class"=>"col-form-label col-md-3"]) }}
                <div class="col-md-9">
                    {{ Form::text("email",null,["class"=>"form-control".($errors->has('email')?" is-invalid":""),'placeholder'=>'Email']) }}
                    <span id="error-email" class="invalid-feedback"></span>
                </div>
            </div>
</div>

<div class="modal-footer">
    <button type="button" class="btn btn-danger" data-dismiss="modal"> Close</button>
    {{ Form::submit("Save",["class"=>"btn btn-primary"]) }}
</div>

{{ Form::close() }}
