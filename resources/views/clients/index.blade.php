@extends('layouts.master')
@section('heading')
    <h1>{{ __('همه مشتریان') }}</h1>
@stop

@section('content')

    <table class="table table-striped" id="clients-table">
        <thead>
        <tr>
            <th>{{ __('شرکت') }}</th>
            <th>{{ __('شماره اصلی') }}</th>
            <th>{{ __('ایمیل اصلی') }}</th>
            <th>{{ __('فروشنده') }}</th>
            <th>{{ __('عملیات') }}</th>
        </tr>
        </thead>
    </table>

@stop

@push('scripts')
<script>
    $(function () {
        $('#clients-table').DataTable({
            processing: true,
            serverSide: true,

            ajax: '{!! route('clients.data') !!}',
            columns: [

                {data: 'namelink', name: 'name'},
                {data: 'primary_number', name: 'primary_number'},
                {data: 'emaillink', name: 'primary_email'},
                {data: 'salesperson', name: 'salesperson'},
                {data: 'actions', name: 'actions', orderable: false, searchable: false},

            ],
            "oLanguage": {
                "sSearch": "جستجو"
            }
        });
    });
</script>
@endpush
