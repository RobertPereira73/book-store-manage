@extends('components.body')

@section('header')
    <x-header/>
@endsection

@section('content')
    <div class="w-100 content">
        <div class="w-100 d-flex content">
            <div class="col-2 pt-3 px-4 menu">
                <x-menu/>
            </div>
    
            <div class="col-10 bg-gray main-content">
                <div class="container">
                    @yield('main-content')
                </div>
            </div>
        </div>
    </div>
@endsection