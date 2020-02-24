@extends('layouts.master')
@section('heading')
    <h1>{{ __('ایجا مخاطب جدید') }}</h1>
@stop

@section('content')

    {!! Form::open(['route' => 'contacts.store']) !!}
        @include('contacts.form', ['submitButtonText' => __('ایجاد مخاطب جدید')])
    {!! Form::close() !!}

@stop
