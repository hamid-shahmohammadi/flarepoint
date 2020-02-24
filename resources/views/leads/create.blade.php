@extends('layouts.master')
@section('heading')
    <h1>{{ __('مشتری راغب') }}</h1>
@stop

@section('content')

    {!! Form::open([
            'route' => 'leads.store'
            ]) !!}

    <div class="form-group">
        {!! Form::label('title', __('عنوان'), ['class' => 'control-label']) !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description', __('توضیحات'), ['class' => 'control-label']) !!}
        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-inline">
        <div class="form-group col-lg-3 removeleft">
            {!! Form::label('status', __('وضعیت'), ['class' => 'control-label']) !!}
            {!! Form::select('status', array(
            '1' => 'Contact Client', '2' => 'Completed'), null, ['class' => 'form-control'] )
         !!}
        </div>
        <div class="form-group col-lg-4 removeleft">
            {!! Form::label('contact_date', __('Deadline'), ['class' => 'control-label']) !!}
            {!! Form::date('contact_date', \Carbon\Carbon::now()->addDays(7), ['class' => 'form-control']) !!}
        </div>
        <div class="form-group col-lg-5 removeleft removeright">
            {!! Form::label('contact_time', __('Time'), ['class' => 'control-label']) !!}
            {!! Form::time('contact_time', '11:00', ['class' => 'form-control']) !!}
        </div>

    </div>
    <div class="form-group">
        <label class="control-label">تاریخ شمسی</label>
        <input type="text" id="pcal1" class="pdate form-jdate">

    </div>


    <div class="form-group">
        {!! Form::label('user_assigned_id', __('Assign user'), ['class' => 'control-label']) !!}
        {!! Form::select('user_assigned_id', $users, null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        @if(Request::get('client') != "")
            {!! Form::hidden('client_id', Request::get('client')) !!}
        @else
            {!! Form::label('client_id', __('Assign Client'), ['class' => 'control-label']) !!}
            {!! Form::select('client_id', $clients, null, ['class' => 'form-control']) !!}
        @endif
    </div>

    {!! Form::submit(__('ثبت مشتری راغب'), ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}


@stop
@section('css')
    <link href="{{ URL::asset('css/jdate/js-persian-cal.css') }}" rel="stylesheet" type="text/css">
@stop
@section('js')
    <script type="text/javascript" src="{{ URL::asset('js/jdate/js-persian-cal.min.js') }}"></script>
    <script>
        var objCal1 = new AMIB.persianCalendar( 'pcal1' );
    </script>
@stop
