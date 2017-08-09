@extends('layout.master')

@section('content')
    Home goes here
    {{--<div class="row">--}}
        {{--<div class="col-sm-12">--}}
            {{--<h1>Latest articles</h1>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="row" style="margin-bottom: 25px;">--}}
        {{--<div class="col-sm-2 col-sm-offset-10">--}}
            {{--<a class="btn btn-success btn-block" href="{{ route('article.create') }}">--}}
                {{--Add--}}
            {{--</a>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="row">--}}
        {{--<div class="col-sm-12">--}}
            {{--@if(empty($articles))--}}
                {{--<div class="alert alert-info">--}}
                    {{--No articles found.--}}
                {{--</div>--}}
            {{--@else--}}
                {{--@include('article.partials.table')--}}
            {{--@endif--}}
        {{--</div>--}}
    {{--</div>--}}
@endsection