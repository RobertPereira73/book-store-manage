@extends('components.authStructure')

@section('title', 'Dashboard')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endpush

@push('js')
    <link rel="stylesheet" href="{{ asset('js/dashboard.js') }}">
@endpush

@section('main-content')
    <div class="w-100 p-4">
        <div class="row justify-content-center">
            @foreach ($reports as $report)
                <div class="col-3">
                    <x-card :report="$report" />
                </div>
            @endforeach
        </div>

        <div class="row">
            <div class="col-12">
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                test
            </div>
        </div>

    </div>
@endsection