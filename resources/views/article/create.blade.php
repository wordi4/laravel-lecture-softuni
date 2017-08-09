@extends('layout.master')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h1>Add article</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">


            <form method="POST">
                {{ csrf_token() }}
            </form>

            {!! Form::open(['route' => 'article.store', 'class' => 'form-horizontal']) !!}
                @include('article.partials.form-fields')

                <div class="form-group">
                    <div class="col-sm-2 col-sm-offset-10">
                        <button class="btn btn-success btn-block" type="submit">
                            Add
                        </button>
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection