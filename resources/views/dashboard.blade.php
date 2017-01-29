@extends('admin.index')
@section('page_title', 'Dashboard')
@section('title', 'Dashboard')
@section('stats')
    <div class="ui three column grid">
        <div class="column">
            <div class="stat">

            </div>
        </div>
        <div class="column">
            <div class="stat blue-shade">
                <span class="top">$10.00</span>
                <span class="label">Current Investment</span>
            </div>
        </div>
        <div class="column">
            <div class="stat green-shade">
                <span class="top">$200.00</span>
                <span class="label">Expected Income</span>
            </div>
        </div>
    </div>
@endsection