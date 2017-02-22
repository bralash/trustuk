@extends('admin.index')
@section('page_title', 'Dashboard')
@section('title', 'Dashboard')
@section('stats')
    @if($proofResponse == 1)
        <h2>Proof of Payment successfully submitted</h2>
    @elseif($proofResponse = 2)
        <h2>Profile Saved successfully</h2>
    @endif
@endsection