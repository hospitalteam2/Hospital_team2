@extends('back.layouts.master')
@section('title','Department')
@section('css')
    <link href="{{ URL::asset('assets/plugins/notify/css/notifIt.css') }}" rel="stylesheet" xmlns="" xmlns=""/>

@stop
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">{{ trans('department_trans.title_page') }}</h4>
            </div>
        </div>

    </div>
@stop
<!-- breadcrumb -->

@section('content')
    @if (session()->has('delete'))
        <script>
            window.onload = function () {
                notif({
                    msg: "تم حذف القسم بنجاح",
                    type: "success"
                })
            }
        </script>
    @endif
    @if (session()->has('success'))
        <script>
            window.onload = function () {
                notif({
                    msg: "تم  اضافه القسم بنجاح",
                    type: "success"
                })
            }
        </script>
    @endif
    @if (session()->has('update'))
        <script>
            window.onload = function () {
                notif({
                    msg: "تم تعديل القسم بنجاح",
                    type: "success"
                })
            }
        </script>
    @endif
    <!-- row -->
    <div class="row">

        @if ($errors->any())
            <div class="error">{{ $errors->first('Name') }}</div>
        @endif


        <div class="col-xl-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <button type="button" class="button x-small btn btn-secondary" data-toggle="modal"
                            data-target="#exampleModal">
                        {{ trans('department_trans.add_Department') }}
                    </button>
                    <br><br>


                    <!-- add_modal_Department -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                         aria-labelledby="exampleModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                        id="exampleModalLabel">
                                        {{ trans('department_trans.add_Department') }}
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <!-- add_form -->
                                    <form action="{{ route('Departments.store') }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col">
                                                <label for="Name"
                                                       class="mr-sm-2">{{ trans('department_trans.Department_name_ar') }}
                                                    :</label>
                                                <input id="Name" type="text" name="Name" class="form-control">
                                            </div>
                                            <div class="col">
                                                <label for="Name_en"
                                                       class="mr-sm-2">{{ trans('department_trans.Department_name_en') }}
                                                    :</label>
                                                <input type="text" class="form-control" name="Name_en">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label
                                                for="exampleFormControlTextarea1">{{ trans('department_trans.Notes') }}
                                                :</label>
                                            <textarea class="form-control" name="Notes" id="exampleFormControlTextarea1"
                                                      rows="3"></textarea>
                                        </div>
                                        <br><br>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">{{ trans('department_trans.Close') }}</button>
                                            <button type="submit"
                                                    class="btn btn-success">{{ trans('department_trans.submit') }}</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- row closed -->
                    <!--div-->
                    <div class="col-xl-12">
                        <div class="card mg-b-20">
                            <div class="card-header pb-0">
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table key-buttons text-md-nowrap">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>{{ trans('department_trans.Name') }}</th>
                                            <th>{{ trans('department_trans.Notes') }}</th>
                                            <th>{{ trans('department_trans.Processes') }}</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i = 0; ?>
                                        @foreach ($Departments as $Department)
                                            <tr>
                                                <?php $i++; ?>
                                                <td>{{ $i }}</td>
                                                <td>{{ $Department->Name }}</td>
                                                <td>{{ $Department->Notes }}</td>
                                                <td>
                                                    <button type="button" class="btn btn-info btn-sm"
                                                            data-toggle="modal"
                                                            data-target="#edit{{ $Department->id }}"
                                                            title="{{ trans('department_trans.Edit') }}"><i
                                                            class="fa fa-edit"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-danger btn-sm"
                                                            data-toggle="modal"
                                                            data-target="#delete{{ $Department->id }}"
                                                            title="{{ trans('department_trans.Delete') }}"><i
                                                            class="fa fa-trash"></i></button>
                                                </td>
                                            </tr>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- edit_modal_Department -->
                    <div class="modal fade" id="edit{{ $Department->id }}" tabindex="-1" role="dialog"
                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                        id="exampleModalLabel">
                                        {{ trans('department_trans.edit_Department') }}
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <!-- add_form -->
                                    <form action="{{ route('Departments.update', 'test') }}" method="post">
                                        {{ method_field('patch') }}
                                        @csrf
                                        <div class="row">
                                            <div class="col">
                                                <label for="Name"
                                                       class="mr-sm-2">{{ trans('department_trans.Department_name_ar') }}
                                                    :</label>
                                                <input id="Name" type="text" name="Name"
                                                       class="form-control"
                                                       value="{{ $Department->getTranslation('Name', 'ar') }}"
                                                       required>
                                                <input id="id" type="hidden" name="id" class="form-control"
                                                       value="{{ $Department->id }}">
                                            </div>
                                            <div class="col">
                                                <label for="Name_en"
                                                       class="mr-sm-2">{{ trans('department_trans.Department_name_en') }}
                                                    :</label>
                                                <input type="text" class="form-control"
                                                       value="{{ $Department->getTranslation('Name', 'en') }}"
                                                       name="Name_en" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label
                                                for="exampleFormControlTextarea1">{{ trans('department_trans.Notes') }}
                                                :</label>
                                            <textarea class="form-control" name="Notes"
                                                      id="exampleFormControlTextarea1"
                                                      rows="3">{{ $Department->Notes }}</textarea>
                                        </div>
                                        <br><br>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">{{ trans('department_trans.Close') }}</button>
                                            <button type="submit"
                                                    class="btn btn-success">{{ trans('department_trans.submit') }}</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- delete_modal_Department -->
                    <div class="modal fade" id="delete{{ $Department->id }}" tabindex="-1" role="dialog"
                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                        id="exampleModalLabel">
                                        {{ trans('department_trans.delete_Department') }}
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('Departments.destroy', 'test') }}" method="post">
                                        {{ method_field('Delete') }}
                                        @csrf
                                        {{ trans('department_trans.Warning_Department') }}
                                        <input id="id" type="hidden" name="id" class="form-control"
                                               value="{{ $Department->id }}">
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">{{ trans('department_trans.Close') }}</button>
                                            <button type="submit"
                                                    class="btn btn-danger">{{ trans('department_trans.submit') }}</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!--/div-->


    <!-- main-content closed -->@endsection
@section('js')

    <script src="{{ URL::asset('Admin/plugins/notify/js/notifIt.js') }}"></script>
    <script src="{{ URL::asset('Admin/plugins/notify/js/notifit-custom.js') }}"></script>
    <!--Internal  Datatable js -->
    <script src="{{ URL::asset('assets/plugins/notify/js/notifIt.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/notify/js/notifit-custom.js') }}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/pdfmake.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/vfs_fonts.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>
    <!--Internal  Datatable js -->
    <script src="{{URL::asset('assets/js/table-data.js')}}"></script>
    <script>
        $(function () {

            $(".dt-buttons").remove()
        })

    </script>
@endsection
