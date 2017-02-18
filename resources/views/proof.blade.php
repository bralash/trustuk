@extends('admin.index')
@section('page_title', 'Proof of Payment')
@section('title', 'Proof of Payment')
@section('stats')
    <p>Please upload an image of the payment</p>
    <div class="deposit-wrapper">
        <form action="/admin/proof" method="post" enctype="multipart/form-data">
            {{csrf_field()}}

            <input type="text" name="name" value="{{Auth::user()->name}}" hidden>
            <input type="email" name="email" value="{{Auth::user()->email}}" hidden>
            <div class="field">
                <label for="image">Choose image file</label>
                <input type="file" name="image" required>
            </div>
            <b style="color: tomato">Please size image shouldn't exceed 2MB</b> <br>

            <button type="submit">Upload</button>
        </form>
    </div>
@endsection