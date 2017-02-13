@extends('admin.index')
@section('page_title','Make Deposit')
@section('title', 'Make Deposit')
@section('stats')
    <div class="deposit-wrapper">
        <form action="/admin/deposit" method="post">
            {{csrf_field()}}

            <div class="field">
                <span>Please pay to the bitcoin address <b>17S6JEtYEM48FqEufJarqSgP4xfcMoMV4N</b></span>
                <img src="http://i.imgur.com/ODC8i15.png" alt="">
            </div>

            {{--<button class="button ui blue" type="submit">Deposit</button>--}}
        </form>
    </div>
@endsection