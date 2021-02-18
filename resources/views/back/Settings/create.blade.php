@extends('back.layouts.master')
@section('title','Setting Social')
@section('css')
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">{{ trans('setting.Setting Home Page')}}</h4>
            </div>
        </div>

    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
    @endif

    <!-- row closed -->

        <!-- main-content closed -->
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-12  d-block mx-auto my-auto">
                    <div class="card ">
                        <h5 class="card-header">{{ trans('setting.Add New Setting')}}</h5>
                        <div class="card-body">

                            <form style="padding: 20px" action="{{ route('setting.store') }}" method="POST"
                                  enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col">
                                        <input type="text" name="phone" class="form-control" value="{{$setting->phone}}"
                                               aria-describedby="emailHelp" placeholder="{{ trans('setting.Phone') }}">
                                        @error('phone')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <input type="text" name="address" class="form-control"
                                               value="{{ $setting->getTranslation('address', 'ar') }}"
                                               aria-describedby="emailHelp"
                                               placeholder="{{ trans('setting.Address_ar') }}">
                                        @error('address')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <input type="text" name="address_en" class="form-control"
                                               value="{{ $setting->getTranslation('address', 'en') }}"
                                               aria-describedby="emailHelp"
                                               placeholder="{{ trans('setting.Address_en') }}">
                                        @error('address_en')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <input type="email" name="email" class="form-control"
                                               value="{{$setting->email}}" aria-describedby="emailHelp"
                                               placeholder="{{ trans('setting.Email') }}">
                                        @error('email')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <input type="text" name="twitter" class="form-control"
                                               value="{{$setting->twitter}}" aria-describedby="emailHelp"
                                               placeholder="{{ trans('setting.Twitter') }}">
                                        @error('twitter')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <input type="text" name="google" class="form-control"
                                               value="{{$setting->google}}" aria-describedby="emailHelp"
                                               placeholder="{{ trans('setting.Google') }}">
                                        @error('google')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <input type="text" name="facebook" class="form-control"
                                               value="{{$setting->facebook}}" aria-describedby="emailHelp"
                                               placeholder="{{ trans('setting.Facebook') }}">
                                        @error('facebook')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <input type="text" name="linked" class="form-control"
                                               value="{{$setting->linked}}" aria-describedby="emailHelp"
                                               placeholder="{{ trans('setting.Linked In') }}">
                                        @error('linked')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <input type="text" name="skype" class="form-control" value="{{$setting->skype}}"
                                               aria-describedby="emailHelp" placeholder="{{ trans('setting.skype') }}">
                                        @error('skype')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <input type="file" name="photo" class="form-control"
                                               value="{{ old('photo', $setting->photo) }}" aria-describedby="emailHelp"
                                               placeholder="{{ trans('setting.logo') }}">
                                        @error('photo')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <img src="{{asset('Site/images/logo/'.$setting->photo)}}"
                                         style="width: 250px;height: 60px"
                                         alt="logo">
                                </div>

                                <button type="submit"
                                        class="btn btn-primary my-2 px-5">{{ trans('setting.Save') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
@section('js')
@endsection

