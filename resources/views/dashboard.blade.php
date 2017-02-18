@extends('admin.index')
@section('page_title', 'Dashboard')
@section('title', 'Dashboard')
@section('stats')
    @if($proofResponse == 1)
        <h2>Proof of Payment successfully submitted</h2>
    @endif
@endsection