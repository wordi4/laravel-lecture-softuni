<table class="table table-bordered">
    <thead>
    <tr>
        <td>ID</td>
        <td>Title</td>
        <td>Description</td>
        <td width="100">Status</td>
        <td width="150">Created At</td>
        <td width="150">Actions</td>
    </tr>
    </thead>
    <tbody>
    @foreach($articles as $article)
        <tr>
            <td>
                <strong>{{ $article->id }}</strong>
            </td>
            <td>
                <a href="{{ route('article.show', $article->id) }}">
                    <h4>{{ $article->title }}</h4>
                </a>
            </td>
            <td>
                {{ $article->description }}
            </td>
            <td>
                {{ $article->status }}
            </td>
            <td>
                {{ $article->created_at ? $article->created_at->format('Y/m/d H:i:s') : 'n/a' }}
            </td>
            <td>
                <a href="{{ route('article.edit', $article->id) }}" class="btn btn-primary btn-xs pull-left" style="margin: 0 5px 0 0;">
                    Edit
                </a>
                {!! Form::open(['method' => 'DELETE', 'route' => ['article.destroy', $article->id], 'class' => 'pull-left delete-form']) !!}
                    <button class="btn btn-danger btn-xs" type="submit">
                        Remove
                    </button>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>