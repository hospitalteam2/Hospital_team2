@extends('back.layouts.master')
@section('css')
     <link href="{{ URL::asset('assets/plugins/notify/css/notifIt.css') }}" rel="stylesheet"/>

     <link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
     <link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
     <link href="{{URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
     <link href="{{URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
     <link href="{{URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
     <link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">

@endsection
@section('title')
    {{trans('main_header_trans.Articals')}}
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">{{trans('main_header_trans.Articals')}}</h4><span
                    class="text-muted mt-1 tx-13 mr-2 mb-0">/{{trans('main_header_trans.Admin')}}</span>
            </div>
        </div>

    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    @if (session()->has('deleted'))
        <script>
            window.onload = function () {
                notif({
                    msg: "{{ trans('Articals.deleted') }}",
                    type: "success"
                })
            }
        </script>
    @endif
    @if (session()->has('success'))
        <script>
            window.onload = function () {
                notif({
                    msg: "{{ trans('Articals.success') }}",
                    type: "success"
                })
            }
        </script>
    @endif
    @if (session()->has('update'))
        <script>
            window.onload = function () {
                notif({
                    msg:"{{ trans('Articals.update') }}",
                    type: "success"
                })
            }
        </script>
    @endif

    <!-- row -->
    <div class="row row-sm">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <div class="col-xl-12">
            <div class="card  ">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <a class="modal-effect btn btn-outline-primary btn-block" data-effect="effect-scale"
                           data-toggle="modal" href="#modaldemo8">{{ trans('Articals.add_artical') }}</a>
                    </div>
                    @include('back.Articals.create')
                </div>
                <div class="card-body">
                    <div class="table-responsive">

                        <table class="table text-md-nowrap" id="example1">
                            <thead>
                            <tr>
                                <th class="border-bottom-0">#</th>
                                <th class="border-bottom-0"> {{ trans('Articals.title') }}</th>
                                <th class="border-bottom-0">{{ trans('Articals.description') }}</th>

                                <th class="border-bottom-0">{{ trans('Articals.image') }}</th>
                                <th class="border-bottom-0">{{ trans('Articals.options') }}</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php $i = 0; ?>
                            @foreach ($articals as $artical)
                                <?php $i++; ?>
                                <tr>
                                    <td  >{{ $i}}</td>
                                    <td style="width: 30%">{{ $artical->title }}</td>
                                    <td style="width: 30%">{{ $artical->description }}</td>

                                    <td style="width: 20%">
                                        <img
                                            src="{{asset('images_admin/'.$artical->image)}}"
                                            style="margin-top: 10px; width: 100px; height: 60px; border-radius: 2px "
                                            alt="">
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                                data-target="#edit{{ $artical->id }}"
                                                title="{{ trans('Articals.Edit') }}"><i class="fa fa-edit"></i></button>
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                data-target="#delete{{ $artical->id }}"
                                                title="{{ trans('Articals.Delete') }}"><i
                                                class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                @include('back.Articals.edit')
                                @include('back.Articals.delete')

                            @endforeach
                            </tbody>



                        </table>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- row closed -->

    <!-- main-content closed -->
@endsection
@section('js')

    <script src="{{ URL::asset('assets/plugins/notify/js/notifIt.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/notify/js/notifit-custom.js') }}"></script>

    <!--Internal  Datatable js -->
    <script src="{{ URL::asset('assets/js/table-data.js') }}"></script>
    <script src="{{ URL::asset('assets/js/modal.js') }}"></script>
    <!--Internal  Notify js -->
    <script src="{{ URL::asset('Admin/plugins/notify/js/notifIt.js') }}"></script>
    <script src="{{ URL::asset('Admin/plugins/notify/js/notifit-custom.js') }}"></script>

    <script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
     <!--Internal  Datatable js -->
{{--    <script src="{{URL::asset('assets/js/table-data.js')}}"></script>--}}

@endsection
