@extends('components.authStructure')

@section('title', 'Dashboard')

@section('links')
    @parent
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

    <script src="{{ asset('js/dashboard.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endsection

{{-- @section('content')
    <h2>:)</h2>
@endsection --}}