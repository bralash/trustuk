@extends('admin.super')
@section('page_title','Users')
@section('stats')
    <ul class="proof">
        @foreach($users as $user)
            <li>
                <h2 class="name">{{$user->name}}</h2>
                <span><b>Email:</b> {{$user->email}}</span>
                <span><b>Referral:</b> {{$user->referral}}</span>
                <span><b>Date/Time:</b> {{$user->created_at}}</span>
                {{--<span>--}}
                    {{--<b>Image Link:</b>--}}
                    {{--<div class="image">--}}
                        {{--<a href="{{url('/')}}\proof\{{$proof->image}}" target="_blank">--}}
                            {{--<img src="{{url('/')}}\proof\{{$proof->image}}" alt="Proof of payment">--}}
                        {{--</a>--}}
                    {{--</div>--}}
                {{--</span>--}}
            </li>
        @endforeach
    </ul>
@endsection