@extends('layout.master')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h1>Articles</h1>
        </div>
    </div>
    <div class="row" style="margin-bottom: 25px;">
        <div class="col-sm-2 col-sm-offset-10">
            <a class="btn btn-success btn-block" href="{{ route('article.create') }}">
                Add
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            @if(empty($articles))
                <div class="alert alert-info">
                    No articles found.
                </div>
            @else
                @include('article.partials.table')
                {{ $articles->links() }}
            @endif
        </div>
    </div>
@endsection