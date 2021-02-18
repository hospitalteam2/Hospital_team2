@extends('back.layouts.master2')
@section('css')
    <!-- Sidemenu-respoansive-tabs css -->
    <link href="{{URL::asset('assets/plugins/sidemenu-responsive-tabs/css/sidemenu-responsive-tabs.css')}}"
          rel="stylesheet">
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row no-gutter">
            <!-- The image half -->
            <div class="col-md-6 col-lg-6 col-xl-7 d-none d-md-flex bg-primary-transparent">
                <div class="row wd-100p mx-auto text-center">
                    <div class="col-md-12 col-lg-12 col-xl-12 my-auto mx-auto wd-100p">
                        <img style="height: 700px; width: 100%" src="{{URL::asset('assets/img/media/photo2.jpg')}}"
                             class="my-auto ht-xl-80p wd-md-100p wd-xl-80p mx-auto" alt="logo">
                    </div>
                </div>
            </div>
            <!-- The content half -->
            <div class="col-md-6 col-lg-6 col-xl-5 bg-white">
                <div class="login d-flex align-items-center py-2">
                    <!-- Demo content-->
                    <div class="container p-0">
                        <div class="row">
                            <div class="col-md-10 col-lg-10 col-xl-9 mx-auto">
                                <div class="card-sigin">
                                    <img src="Site/images/logo.png" alt="" title=""
                                         style="width: 350px;height: 80px; margin-left: 60px">
                                    <br><br><br> <br><br><br>
                                    {{--                                    <div class="mb-5 d-flex"><a href="{{ url('/' . $page='index') }}">--}}
                                    {{--                                            <img src="{{URL::asset('assets/img/brand/favicon.png')}}"--}}
                                    {{--                                                class="sign-favicon ht-40" alt="logo"></a>--}}
                                    {{--                                        <h1 class="main-logo1 ml-1 mr-0 my-auto tx-28">Va<span>le</span>x</h1></div>--}}
                                    <div class="card-sigin">
                                        <div class="main-signup-header">
                                            <div class="class ml-2">
                                                <h2>Welcome back!</h2>
                                                <h5 class="font-weight-semibold mb-4">Please sign in to continue.</h5>
                                            </div>

                                            <form method="POST" action="{{ route('login') }}">
                                                @csrf

                                                <div class="form-group ">
                                                    <label class="pl-3"> <strong> Email: </strong></label>

                                                    <div class="col-md-12">
                                                        <input id="email" type="email"
                                                               class="form-control @error('email') is-invalid @enderror"
                                                               name="email" value="{{ old('email') }}" required
                                                               autocomplete="email" autofocus>

                                                        @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                       <strong>{{ $message }}</strong>
                                                       </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group ">
                                                    <label class="pl-3"><strong>Password:</strong></label>

                                                    <div class="col-md-12">
                                                        <input id="password" type="password"
                                                               class="form-control @error('password') is-invalid @enderror"
                                                               name="password" required autocomplete="current-password">

                                                        @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                              <strong>{{ $message }}</strong>
                                                         </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group  ">
                                                    <div class="col-md-6 ">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                   name="remember"
                                                                   id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                            <label class="form-check-label" for="remember">
                                                                {{ __('Remember Me') }}
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-0">
                                                    <div class="col-md-8 ml-3 ">
                                                        <button type="submit" class="btn btn-primary">
                                                            {{ __('Login') }}
                                                        </button>

                                                        @if (Route::has('password.request'))
                                                            <a class="btn btn-link"
                                                               href="{{ route('password.request') }}">
                                                                {{ __('Forgot Your Password?') }}
                                                            </a>
                                                        @endif
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End -->
                </div>
            </div><!-- End -->
        </div>
    </div>
@endsection
@section('js')
@endsection
