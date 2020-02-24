@extends('layouts.master')

@section('heading')
    <h1>{{ __('ایجاد مشتری') }}</h1>
    <hr>
@stop

@section('content')

<!--    <div class="container-fluid">
        <?php $data = Session::get('data'); ?>
        {!! Form::open(['url' => '/clients/create/cvrapi']) !!}
            <div class="form-group">
                <div class="input-group">
                    {!! Form::text('vat', null, ['class' => 'form-control', 'placeholder' => 'Insert company VAT']) !!}
                    <div class="popoverOption input-group-addon"
                         rel="popover"
                         data-placement="left"
                         data-html="true"
                         data-original-title="<span>Only for DK, atm.</span>">?
                    </div>
                </div>
                {!! Form::submit('Get client info', ['class' => 'btn btn-primary clientvat']) !!}
            </div>

        {!!Form::close()!!}
    </div> -->

    {!! Form::open(['route' => 'clients.store']) !!}
        @include('clients.form', ['submitButtonText' => __('ایجاد مشتری جدید')])
    {!! Form::close() !!}

@stop
