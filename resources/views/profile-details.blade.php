@extends('admin.index')
@section('page_title', 'Profile')
@section('title','Profile')
@section('stats')

    <div class="profile-wrapper details">
        <form class="pure-form pure-form-stacked" action="/auth/details" method="post">
            {{csrf_field()}}
            <fieldset>
                <legend>Personal Details</legend>
                <div class="pure-g">
                    <div class="pure-u-1 pure-u-md-1-3">
                        <label for="title">Title</label>
                        <p>{{$user_info->title}}</p>
                    </div>

                    <div class="pure-u-1 pure-u-md-1-3">
                        <label for="multi-last-name">Full Name</label>
                        <p>{{Auth::user()->name}}</p>
                    </div>

                    <div class="pure-u-1 pure-u-md-1-3">
                        <label for="multi-email">Date of Birth</label>
                        <p>{{$user_info->dob}}</p>
                    </div>

                    <div class="pure-u-1 pure-u-md-1-3">
                        <label for="gender">Gender</label>
                        <p>{{$user_info->gender}}</p>
                    </div>

                    <div class="pure-u-1 pure-u-md-1-3">
                        <label for="address">Address</label>
                        <p>{{$user_info->address}}</p>
                    </div>

                    <div class="pure-u-1 pure-u-md-1-3">
                        <label for="marital">Marital Status</label>
                        <p>{{$user_info->marital}}</p>
                    </div>


                    <div class="pure-u-1 pure-u-md-1-3">
                        <label for="profession">Profession</label>
                        <p>{{$user_info->profession}}</p>
                    </div>

                    <div class="pure-u-1 pure-u-md-1-3">
                        <label for="contact">Contact Number</label>
                        <p>{{$user_info->contact}}</p>
                    </div>

                    <div class="pure-u-1 pure-u-md-1-3">
                        <label for="country">Residence Country</label>
                        <p>{{$user_info->country}}</p>
                    </div>

                    <div class="pure-u-1 pure-u-md-1-3">
                        <label for="id_type">ID Type</label>
                        <p>{{$user_info->id_type}}</p>
                    </div>

                    <div class="pure-u-1 pure-u-md-1-3">
                        <label for="id_number">ID Number</label>
                        <p>{{$user_info->id_number}}</p>
                    </div>

                </div>
            </fieldset>

            <fieldset>

                <legend>Spouse Details (If any)</legend>
                <div class="pure-g">
                    <div class="pure-u-1 pure-u-md-1-3">
                        <label for="spouse_fullname">Full Name</label>
                        <p>{{$user_info->spouse_fullname}}</p>
                    </div>

                    <div class="pure-u-1 pure-u-md-1-3">
                        <label for="spouse_dob">Date of Birth</label>
                        <p>{{$user_info->spouse_dob}}</p>
                    </div>

                    <div class="pure-u-1 pure-u-md-1-3">
                        <label for="spouse_profession">Profession</label>
                        <p>{{$user_info->spouse_profession}}</p>
                    </div>

                    <div class="pure-u-1 pure-u-md-1-3">
                        <label for="spouse_gender">Gender</label>
                        <p>{{$user_info->spouse_gender}}</p>
                    </div>



                    <div class="pure-u-1 pure-u-md-1-3">
                        <label for="spouse_contact">Contact</label>
                        <p>{{$user_info->spouse_contact}}</p>
                    </div>
                </div>
            </fieldset>

            <fieldset>

                <legend>Beneficiary Details (If any)</legend>
                <div class="pure-g">
                    <div class="pure-u-1 pure-u-md-1-3">
                        <label for="bene_fullname">Full Name</label>
                        <p>{{$user_info->bene_fullname}}</p>
                    </div>

                    <div class="pure-u-1 pure-u-md-1-3">
                        <label for="bene_dob">Date of Birth</label>
                        <p>{{$user_info->bene_dob}}</p>
                    </div>

                    <div class="pure-u-1 pure-u-md-1-3">
                        <label for="bene_share">Share</label>
                        <p>{{$user_info->bene_share}}</p>
                    </div>

                </div>
            </fieldset>

            <fieldset>

                <legend>Next of Kin Details</legend>
                <div class="pure-g">
                    <div class="pure-u-1 pure-u-md-1-3">
                        <label for="kin_fullname">Full Name</label>
                        <p>{{$user_info->kin_fullname}}</p>
                    </div>

                    <div class="pure-u-1 pure-u-md-1-3">
                        <label for="kin_dob">Date of Birth</label>
                        <p>{{$user_info->kin_dob}}</p>
                    </div>

                    <div class="pure-u-1 pure-u-md-1-3">
                        <label for="kin_relation">Relationship to Investor</label>
                        <p>{{$user_info->kin_relation}}</p>
                    </div>

                    <div class="pure-u-1 pure-u-md-1-3">
                        <label for="kin_profession">Profession</label>
                        <p>{{$user_info->kin_profession}}</p>
                    </div>

                    <div class="pure-u-1 pure-u-md-1-3">
                        <label for="kin_contact">Contact</label>
                        <p>{{$user_info->kin_contact}}</p>
                    </div>

                    <div class="pure-u-1 pure-u-md-1-3">
                        <label for="kin_id_type">ID Card Type</label>
                        <p>{{$user_info->kin_id_type}}</p>
                    </div>

                </div>
            </fieldset>
        </form>
    </div>

@endsection