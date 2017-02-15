@extends('admin.index')
@section('page_title', 'Profile')
@section('title','Profile')
@section('stats')
    @if(empty($user_info))
    <div class="profile-wrapper">
        <form class="pure-form pure-form-stacked" action="/auth/details" method="post">
            {{csrf_field()}}
            <fieldset>
                <legend>Personal Details</legend>
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                <div class="pure-g">
                    <div class="pure-u-1 pure-u-md-1-3">
                        <label for="title">Title</label>
                        <input id="title" name="title" class="pure-u-23-24" type="text" required>
                    </div>

                    <div class="pure-u-1 pure-u-md-1-3">
                        <label for="multi-last-name">Full Name</label>
                        <input id="multi-last-name" value="{{Auth::user()->name}}" class="pure-u-23-24" type="text" readonly>
                    </div>

                    <div class="pure-u-1 pure-u-md-1-3">
                        <label for="multi-email">Date of Birth</label>
                        <input id="dob" name="dob" class="pure-u-23-24" type="date" required>
                    </div>

                    <div class="pure-u-1 pure-u-md-1-3">
                        <label for="gender">Gender</label>
                        <select name="gender" id="gender" class="pure-input-1-2" required>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="pure-u-1 pure-u-md-1-3">
                        <label for="address">Address</label>
                        <input id="address" name="address" class="pure-u-23-24" type="text" required>
                    </div>

                    <div class="pure-u-1 pure-u-md-1-3">
                        <label for="marital">Marital Status</label>
                        <select name="marital" id="marital" class="pure-input-1-2" required>
                            <option value="single">Single</option>
                            <option value="married">Married</option>
                            <option value="divorced">Divorced</option>
                            <option value="widowed">Widowed</option>
                        </select>
                    </div>


                    <div class="pure-u-1 pure-u-md-1-3">
                        <label for="profession">Profession</label>
                        <input id="profession" name="profession" class="pure-u-23-24" type="text" required>
                    </div>

                    <div class="pure-u-1 pure-u-md-1-3">
                        <label for="contact">Contact Number</label>
                        <input id="contact" name="contact" class="pure-u-23-24" type="text" required>
                    </div>

                    <div class="pure-u-1 pure-u-md-1-3">
                        <label for="country">Residence Country</label>
                        <input id="country" name="country" class="pure-u-23-24" type="text" required>
                    </div>

                    <div class="pure-u-1 pure-u-md-1-3">
                        <label for="id_type">ID Type</label>
                        <input id="id_type" name="id_type" class="pure-u-23-24" type="text" required>
                    </div>

                    <div class="pure-u-1 pure-u-md-1-3">
                        <label for="id_number">ID Number</label>
                        <input id="id_number" name="id_number" class="pure-u-23-24" type="text" required>
                    </div>

                </div>
            </fieldset>

            <fieldset>

                <legend>Spouse Details (If any)</legend>
                <div class="pure-g">
                    <div class="pure-u-1 pure-u-md-1-3">
                        <label for="spouse_fullname">Full Name</label>
                        <input id="spouse_fullname" name="spouse_fullname" class="pure-u-23-24" type="text">
                    </div>

                    <div class="pure-u-1 pure-u-md-1-3">
                        <label for="spouse_dob">Date of Birth</label>
                        <input id="spouse_dob" name="spouse_dob" class="pure-u-23-24" type="text">
                    </div>

                    <div class="pure-u-1 pure-u-md-1-3">
                        <label for="spouse_profession">Profession</label>
                        <input id="spouse_profession" name="spouse_profession" class="pure-u-23-24" type="text">
                    </div>

                    <div class="pure-u-1 pure-u-md-1-3">
                        <label for="spouse_gender">Gender</label>
                        <select name="spouse_gender" id="spouse_gender" class="pure-input-1-2">
                            <option value="male">Male</option>
                            <option value="male">Female</option>
                            <option value="male">Other</option>
                        </select>
                    </div>



                    <div class="pure-u-1 pure-u-md-1-3">
                        <label for="spouse_contact">Contact</label>
                        <input id="spouse_contact" name="spouse_contact" class="pure-u-23-24" type="text">
                    </div>
                </div>
            </fieldset>

            <fieldset>

                <legend>Beneficiary Details (If any)</legend>
                <div class="pure-g">
                    <div class="pure-u-1 pure-u-md-1-3">
                        <label for="bene_fullname">Full Name</label>
                        <input id="bene_fullname" name="bene_fullname" class="pure-u-23-24" type="text">
                    </div>

                    <div class="pure-u-1 pure-u-md-1-3">
                        <label for="bene_dob">Date of Birth</label>
                        <input id="bene_dob" name="bene_dob" class="pure-u-23-24" type="text">
                    </div>

                    <div class="pure-u-1 pure-u-md-1-3">
                        <label for="bene_share">Share</label>
                        <input id="bene_share" name="bene_share" class="pure-u-23-24" type="text">
                    </div>

                </div>
            </fieldset>

            <fieldset>

                <legend>Next of Kin Details</legend>
                <div class="pure-g">
                    <div class="pure-u-1 pure-u-md-1-3">
                        <label for="kin_fullname">Full Name</label>
                        <input id="kin_fullname" name="kin_fullname" class="pure-u-23-24" type="text">
                    </div>

                    <div class="pure-u-1 pure-u-md-1-3">
                        <label for="kin_dob">Date of Birth</label>
                        <input id="kin_dob" name="kin_dob" class="pure-u-23-24" type="text">
                    </div>

                    <div class="pure-u-1 pure-u-md-1-3">
                        <label for="kin_relation">Relationship to Investor</label>
                        <input id="kin_relation" name="kin_relation" class="pure-u-23-24" type="text">
                    </div>

                    <div class="pure-u-1 pure-u-md-1-3">
                        <label for="kin_profession">Profession</label>
                        <input id="kin_profession" name="kin_profession" class="pure-u-23-24" type="text">
                    </div>

                    <div class="pure-u-1 pure-u-md-1-3">
                        <label for="kin_contact">Contact</label>
                        <input id="kin_contact" name="kin_contact" class="pure-u-23-24" type="text">
                    </div>

                    <div class="pure-u-1 pure-u-md-1-3">
                        <label for="kin_id_type">ID Card Type</label>
                        <input id="kin_id_type" name="kin_id_type" class="pure-u-23-24" type="text">
                    </div>

                </div>
            </fieldset>
            <button type="submit" class="pure-button pure-button-primary">Submit</button>
        </form>
    </div>
    @else
    <div class="profile-wrapper">
            <form class="pure-form pure-form-stacked" action="/auth/details" method="post">
                {{csrf_field()}}
                <fieldset>
                    <legend>Personal Details</legend>
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                    <div class="pure-g">
                        <div class="pure-u-1 pure-u-md-1-3">
                            <label for="title">Title</label>
                            <p>{{$user_info->title}}</p>
                            {{--<input id="title" name="title" class="pure-u-23-24" type="text" required>--}}
                        </div>

                        <div class="pure-u-1 pure-u-md-1-3">
                            <label for="multi-last-name">Full Name</label>
                            <p>{{Auth::user()->name}}</p>
                            {{--<input id="multi-last-name" value="{{Auth::user()->name}}" class="pure-u-23-24" type="text" readonly>--}}
                        </div>

                        <div class="pure-u-1 pure-u-md-1-3">
                            <label for="multi-email">Date of Birth</label>
                            <p>{{$user_info->dob}}</p>
                            {{--<input id="dob" name="dob" class="pure-u-23-24" type="date" required>--}}
                        </div>

                        <div class="pure-u-1 pure-u-md-1-3">
                            <label for="gender">Gender</label>
                            <p>{{$user_info->gender}}</p>
                        </div>

                        <div class="pure-u-1 pure-u-md-1-3">
                            <label for="address">Address</label>
                            <p>{{$user_info->address}}</p>
                            {{--<input id="address" name="address" class="pure-u-23-24" type="text" required>--}}
                        </div>

                        <div class="pure-u-1 pure-u-md-1-3">
                            <label for="marital">Marital Status</label>
                            <P>{{$user_info->marital}}</P>
                            {{--<select name="marital" id="marital" class="pure-input-1-2" required>--}}
                                {{--<option value="single">Single</option>--}}
                                {{--<option value="married">Married</option>--}}
                                {{--<option value="divorced">Divorced</option>--}}
                                {{--<option value="widowed">Widowed</option>--}}
                            {{--</select>--}}
                        </div>


                        <div class="pure-u-1 pure-u-md-1-3">
                            <label for="profession">Profession</label>
                            <p>{{$user_info->profession}}</p>
                            {{--<input id="profession" name="profession" class="pure-u-23-24" type="text" required>--}}
                        </div>

                        <div class="pure-u-1 pure-u-md-1-3">
                            <label for="contact">Contact Number</label>
                            <p>{{$user_info->contact}}</p>
                            {{--<input id="contact" name="contact" class="pure-u-23-24" type="text" required>--}}
                        </div>

                        <div class="pure-u-1 pure-u-md-1-3">
                            <label for="country">Residence Country</label>
                            <p>{{$user_info->country}}</p>
                            {{--<input id="country" name="country" class="pure-u-23-24" type="text" required>--}}
                        </div>

                        <div class="pure-u-1 pure-u-md-1-3">
                            <label for="id_type">ID Type</label>
                            <p>{{$user_info->id_type}}</p>
                            {{--<input id="id_type" name="id_type" class="pure-u-23-24" type="text" required>--}}
                        </div>

                        <div class="pure-u-1 pure-u-md-1-3">
                            <label for="id_number">ID Number</label>
                            <p>{{$user_info->id_number}}</p>
                            {{--<input id="id_number" name="id_number" class="pure-u-23-24" type="text" required>--}}
                        </div>

                    </div>
                </fieldset>

                <fieldset>

                    <legend>Spouse Details (If any)</legend>
                    <div class="pure-g">
                        <div class="pure-u-1 pure-u-md-1-3">
                            <label for="spouse_fullname">Full Name</label>
                            <p>{{$user_info->spouse_fullname}}</p>
                            {{--<input id="spouse_fullname" name="spouse_fullname" class="pure-u-23-24" type="text">--}}
                        </div>

                        <div class="pure-u-1 pure-u-md-1-3">
                            <label for="spouse_dob">Date of Birth</label>
                            <p>{{$user_info->spouse_dob}}</p>
                            {{--<input id="spouse_dob" name="spouse_dob" class="pure-u-23-24" type="text">--}}
                        </div>

                        <div class="pure-u-1 pure-u-md-1-3">
                            <label for="spouse_profession">Profession</label>
                            <p>{{$user_info->spouse_profession}}</p>
                            {{--<input id="spouse_profession" name="spouse_profession" class="pure-u-23-24" type="text">--}}
                        </div>

                        <div class="pure-u-1 pure-u-md-1-3">
                            <label for="spouse_gender">Gender</label>
                            <p>{{$user_info->spouse_gender}}</p>
                            {{--<select name="spouse_gender" id="spouse_gender" class="pure-input-1-2">--}}
                                {{--<option value="male">Male</option>--}}
                                {{--<option value="male">Female</option>--}}
                                {{--<option value="male">Other</option>--}}
                            {{--</select>--}}
                        </div>



                        <div class="pure-u-1 pure-u-md-1-3">
                            <label for="spouse_contact">Contact</label>
                            <p>{{$user_info->spouse_gender}}</p>
                            {{--<input id="spouse_contact" name="spouse_contact" class="pure-u-23-24" type="text">--}}
                        </div>
                    </div>
                </fieldset>

                <fieldset>

                    <legend>Beneficiary Details (If any)</legend>
                    <div class="pure-g">
                        <div class="pure-u-1 pure-u-md-1-3">
                            <label for="bene_fullname">Full Name</label>
                            <p>{{$user_info->bene_fullname}}</p>
                            {{--<input id="bene_fullname" name="bene_fullname" class="pure-u-23-24" type="text">--}}
                        </div>

                        <div class="pure-u-1 pure-u-md-1-3">
                            <label for="bene_dob">Date of Birth</label>
                            <p>{{$user_info->bene_dob}}</p>
                            {{--<input id="bene_dob" name="bene_dob" class="pure-u-23-24" type="text">--}}
                        </div>

                        <div class="pure-u-1 pure-u-md-1-3">
                            <label for="bene_share">Share</label>
                            <p>{{$user_info->bene_share}}</p>
                            {{--<input id="bene_share" name="bene_share" class="pure-u-23-24" type="text">--}}
                        </div>

                    </div>
                </fieldset>

                <fieldset>

                    <legend>Next of Kin Details</legend>
                    <div class="pure-g">
                        <div class="pure-u-1 pure-u-md-1-3">
                            <label for="kin_fullname">Full Name</label>
                            <p>{{$user_info->kin_fullname}}</p>
                            {{--<input id="kin_fullname" name="kin_fullname" class="pure-u-23-24" type="text">--}}
                        </div>

                        <div class="pure-u-1 pure-u-md-1-3">
                            <label for="kin_dob">Date of Birth</label>
                            <p>{{$user_info->kin_dob}}</p>
                            {{--<input id="kin_dob" name="kin_dob" class="pure-u-23-24" type="text">--}}
                        </div>

                        <div class="pure-u-1 pure-u-md-1-3">
                            <label for="kin_relation">Relationship to Investor</label>
                            <p>{{$user_info->kin_relation}}</p>
                            {{--<input id="kin_relation" name="kin_relation" class="pure-u-23-24" type="text">--}}
                        </div>

                        <div class="pure-u-1 pure-u-md-1-3">
                            <label for="kin_profession">Profession</label>
                            <p>{{$user_info->kin_profession}}</p>
                            {{--<input id="kin_profession" name="kin_profession" class="pure-u-23-24" type="text">--}}
                        </div>

                        <div class="pure-u-1 pure-u-md-1-3">
                            <label for="kin_contact">Contact</label>
                            <p>{{$user_info->kin_contact}}</p>
                            {{--<input id="kin_contact" name="kin_contact" class="pure-u-23-24" type="text">--}}
                        </div>

                        <div class="pure-u-1 pure-u-md-1-3">
                            <label for="kin_id_type">ID Card Type</label>
                            <p>{{$user_info->kin_id_type}}</p>
                            {{--<input id="kin_id_type" name="kin_id_type" class="pure-u-23-24" type="text">--}}
                        </div>

                    </div>
                </fieldset>
                {{--<button type="submit" class="pure-button pure-button-primary">Submit</button>--}}
            </form>
        </div>
    @endif
@endsection