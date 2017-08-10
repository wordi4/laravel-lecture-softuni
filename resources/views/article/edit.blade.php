@extends('layout.master')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h1>Edit article #{{ $article->id }}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            {!! Form::model($article, ['route' => ['article.update', $article->id], 'method' => 'PUT', 'class' => 'form-horizontal']) !!}
            @include('article.partials.form-fields')

            <div class="form-group">
                <div class="col-sm-2 col-sm-offset-10">
                    <button class="btn btn-success btn-block" type="submit">
                        Update
                    </button>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection