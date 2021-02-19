<div class="modal fade" id="delete{{ $setting->id }}" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                    id="exampleModalLabel">
                    {{ trans('setting.delete') }}
                </h5>
                <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('setting.destroy','test')}}" method="post">
                    {{ method_field('delete') }}
                    {{ csrf_field() }}
                    {{ trans('setting.warning') }}
                    <input id="id" type="hidden" name="id" class="form-control"
                           value="{{ $setting->id }}">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                                data-dismiss="modal">{{ trans('setting.close') }}</button>
                        <button type="submit"
                                class="btn btn-danger">{{ trans('setting.sure') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

