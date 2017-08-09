@extends('layout.master')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            @if(!empty($article))
                <h1>Preview article #{{ $article->id }}</h1>

                <ul>
                    <li>
                        Title: <strong>{{ $article->title }}</strong>
                    </li>
                    <li>
                        Description: <strong>{{ $article->description }}</strong>
                    </li>
                    <li>
                        Status: <strong>{{ $article->status }}</strong>
                    </li>
                    <li>
                        Created At: <strong>{{ $article->created_at }}</strong>
                    </li>
                    <li>
                        Updated At: <strong>{{ $article->updated_at }}</strong>
                    </li>
                </ul>
            @else
                <div class="alert alert-danger">
                    No such article
                </div>
            @endif
        </div>
    </div>
@endsection