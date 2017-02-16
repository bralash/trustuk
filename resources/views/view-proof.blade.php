@extends('admin.super')
@section('page_title','Proof of Payment')
@section('stats')
    <ul class="proof">
        @foreach($proofs as $proof)
            <li>
                <h2 class="name">{{$proof->name}}</h2>
                <span><b>Email:</b> {{$proof->email}}</span>
                <span><b>Date/Time:</b> {{$proof->created_at}}</span>
                <span>
                    <b>Image Link:</b>
                    <div class="image">
                        <a href="/images/{{$proof->image}}" target="_blank">
                            <img src="/images/{{$proof->image}}" alt="Proof of payment">
                        </a>
                    </div>
                </span>
            </li>
        @endforeach
    </ul>
@endsection