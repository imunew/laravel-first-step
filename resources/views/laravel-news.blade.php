@extends('layouts.app')

@section('content')
    <div>
        @foreach ($items as $item)
        <rss-item link="{{ $item->link }}" title="{{ $item->title }}"></rss-item>
        @endforeach
    </div>
@endsection
