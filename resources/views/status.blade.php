@extends('admin.index')
@section('page_title', 'Transaction Status')
@section('title', 'Transaction Status')
@section('stats')
    <iframe src="{{$status_url}}" frameborder="0"></iframe>
@endsection 