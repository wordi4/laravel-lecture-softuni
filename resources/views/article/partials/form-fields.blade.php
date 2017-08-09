<div class="form-group">
    {{ Form::label('title', 'Title *', ['class' => 'control-label col-sm-4']) }}
    <div class="col-sm-8">
        {{ Form::input('text', 'title', NULL, ['class' => 'form-control']) }}
    </div>
</div>

<div class="form-group">
    {{ Form::label('description', 'Description *', ['class' => 'control-label col-sm-4']) }}
    <div class="col-sm-8">
        {{ Form::textarea('description', NULL, ['class' => 'form-control', 'rows' => 5]) }}
    </div>
</div>

<div class="form-group">
    {{ Form::label('status', 'Status *', ['class' => 'control-label col-sm-4']) }}
    <div class="col-sm-8">
        {{ Form::select('status', ['active' => 'Active', 'inactive' => 'Inactive'], NULL, ['class' => 'form-control']) }}
    </div>
</div>