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
                                        <input type="text" name="phone" class="form-control"
                                               aria-describedby="emailHelp" placeholder="{{ trans('setting.Phone') }}">
                                        @error('phone')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <input type="text" name="address" class="form-control"
                                               aria-describedby="emailHelp"
                                               placeholder="{{ trans('setting.Address') }}">
                                        @error('address')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <input type="text" name="address_en" class="form-control"
                                               aria-describedby="emailHelp"
                                               placeholder="{{ trans('setting.Address_en') }}">
                                        @error('address_en')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <input type="email" name="email" class="form-control" aria-describedby="emailHelp"
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
                                               aria-describedby="emailHelp"
                                               placeholder="{{ trans('setting.Twitter') }}">
                                        @error('twitter')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <input type="text" name="google" class="form-control" aria-describedby="emailHelp"
                                               placeholder="{{ trans('setting.Google') }}">
                                        @error('google')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <input type="text" name="facebook" class="form-control" aria-describedby="emailHelp"
                                               placeholder="{{ trans('setting.Facebook') }}">
                                        @error('facebook')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <input type="text" name="linked" class="form-control" aria-describedby="emailHelp"
                                               placeholder="{{ trans('setting.Linked In') }}">
                                        @error('linked')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <input type="text" name="skype" class="form-control"
                                               aria-describedby="emailHelp" placeholder="{{ trans('setting.skype') }}">
                                        @error('skype')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <input type="file" name="photo" class="form-control" aria-describedby="emailHelp"
                                               placeholder="{{ trans('setting.logo') }}">
                                        @error('photo')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
{{--                                <div class="row">--}}
{{--                                    <img src="{{asset('Site/images/logo/'.$setting->photo)}}"--}}
{{--                                         style="width: 250px;height: 60px"--}}
{{--                                         alt="logo">--}}
{{--                                </div>--}}

                                <button type="submit"
                                        class="btn btn-primary my-2 px-5">{{ trans('setting.Save') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title mg-b-0">{{ trans('setting.show_Setting') }}</h4>
                            <i class="mdi mdi-dots-horizontal text-gray"></i>
                        </div>
                        <p class="tx-12 tx-gray-500 mb-2">{{ trans('setting.show_Setting') }}</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table text-md-nowrap" id="example1">
                                <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">{{ trans('setting.Phone') }}</th>
                                    <th class="wd-15p border-bottom-0">{{ trans('setting.Address') }}</th>
                                    <th class="wd-20p border-bottom-0">{{ trans('setting.Twitter') }}</th>
                                    <th class="wd-15p border-bottom-0">{{ trans('setting.Google') }}</th>
                                    <th class="wd-10p border-bottom-0">{{ trans('setting.Facebook') }}</th>
                                    <th class="wd-25p border-bottom-0">{{ trans('setting.Linked In') }}</th>
                                    <th class="wd-25p border-bottom-0">{{ trans('setting.skype') }}</th>
                                    <th class="wd-25p border-bottom-0">{{ trans('setting.Email') }}</th>
                                    <th class="wd-25p border-bottom-0">{{ trans('setting.logo') }}</th>
                                    <th class="wd-25p border-bottom-0">{{ trans('setting.process') }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i = 0; ?>
                                @foreach ($settings as $setting)
                                    <?php $i++; ?>
                                <tr>
                                    <td>{{ $setting->phone }}</td>
                                    <td>{{ $setting->address }}</td>
                                    <td>{{ $setting->twitter }}</td>
                                    <td>{{ $setting->google}}</td>
                                    <td>{{ $setting->facebook}}</td>
                                    <td>{{ $setting->linked}}</td>
                                    <td>{{ $setting->skype }}</td>
                                    <td>{{ $setting->email }}</td>
                                    <td><img src="{{asset('Site/images/logo/'.$setting->photo)}}"
                                             style="width: 250px;height: 60px"
                                             alt="logo"></td>


                                    <td>
{{--                                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal"--}}
{{--                                                data-target="#edit{{ $setting->id }}"--}}
{{--                                                title="{{ trans('setting.Edit') }}"><i class="fa fa-edit"></i></button>--}}
                                     <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                data-target="#delete{{ $setting->id }}"
                                                title="{{ trans('setting.Delete') }}"><i
                                                class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
{{--                                    @include('back.Settings.edit')--}}
                                    @include('back.Settings.delete')
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
@endsection
@section('js')
@endsection

