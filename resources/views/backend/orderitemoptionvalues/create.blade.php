@extends('backend.layouts.app')

@section('title', __('labels.backend.orderitemoptionvalues.management') . ' | ' . __('labels.backend.orderitemoptionvalues.create'))


@section('content')
    {{ html()->form('POST', route('admin.orderitemoptionvalues.store'))->class('form-horizontal')->open() }}
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        @lang('labels.backend.orderitemoptionvalues.management')
                        <small class="text-muted">@lang('labels.backend.orderitemoptionvalues.create')</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <hr>

            <div class="row mt-4 mb-4">
                <div class="col">

                    <div class="form-group row">
                        {{ html()->label(__('labels.backend.orderitemoptionvalues.name'))->class('col-md-2 form-control-label')->for('name') }}

                        <div class="col-md-10">
                            {{ html()->text('name')
                                ->class('form-control')
                                ->placeholder(__('labels.backend.orderitemoptionvalues.name'))
                                ->attribute('maxlength', 191)
                                ->autofocus()
                                ->required()
                                 }}
                        </div><!--col-->
                    </div><!--form-group-->

                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->

        <div class="card-footer clearfix">
            <div class="row">
                <div class="col">
                    {{ form_cancel(route('admin.orderitemoptionvalues.index'), __('buttons.general.cancel')) }}
                </div><!--col-->

                <div class="col text-right">
                    {{ form_submit(__('buttons.general.crud.create')) }}
                </div><!--col-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
    {{ html()->form()->close() }}
@endsection
