@extends('layout.master')

@section('content')
    <h2>Escaped tags</h2>
    {{ '<h3>lorem ipsum</h3><script>alert();</script>' }}
    <hr/>

    <h2>Not escaped tags</h2>
    {!! '<p style="color: red;">lorem ipsum</p><script>document.write(\'js script works\');</script>' !!}
    <hr/>

    <h2>For loop</h2>
    @for($i = 0; $i <= 5; $i++)
        {{ $i }}
    @endfor
    <hr/>

    <h2>Foreach loop</h2>
    @php
        $items = ['item1', 'item2', 'item3']
    @endphp

    @foreach($items as $value)
        <p>
            <strong>{{ $value }}</strong><br/>
            first item: {{ $loop->first ? 'yes' : 'no' }}<br/>
            last item: {{ $loop->last ? 'yes' : 'no' }}<br/>
            count: {{ $loop->count }}<br/>
            iteration: {{ $loop->iteration }}
        </p>
    @endforeach
    <hr/>

    <h2>Forelse loop</h2>
    @php
        $items = ['item1', 'item2', 'item3']
    @endphp

    <div class="row">
        @forelse($items as $value)
            <div class="col-sm-4">
                <strong>{{ $value }}</strong><br/>
                first item: {{ $loop->first ? 'yes' : 'no' }}<br/>
                last item: {{ $loop->last ? 'yes' : 'no' }}<br/>
                count: {{ $loop->count }}<br/>
                iteration: {{ $loop->iteration }}<br/>
                index: {{ $loop->index }}<br/>
                remaining: {{ $loop->remaining }}
            </div>
        @empty
            <div class="col-sm-12">No items</div>
        @endforelse
    </div>
    <hr/>

    <h2>Comments</h2>
    {{-- This comment will not be present in the rendered HTML --}}
    <hr/>
@endsection