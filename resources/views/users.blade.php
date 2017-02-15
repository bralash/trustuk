@extends('admin.super')
@section('page_title','Users')
@section('stats')
    <ul class="proof">
        @foreach($users as $user)
            <li>
                <h2 class="name"><a href="/super/{{$user->id}}">{{$user->name}}</a></h2>
                <span><b>Email:</b> {{$user->email}}</span>
                <span><b>Referral:</b> {{$user->referral}}</span>
                <span><b>Date/Time:</b> {{$user->created_at}}</span>
                <span><b>Plan:</b> {{$user->plans}}</span>
                <span><b>Amount to deposit:</b> ${{$user->amount}}</span>
                <span><b>Referred by:</b> {{$user->referral_name}}</span>
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