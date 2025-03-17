@extends('layouts.guest')

@section('content')

<div class="pt-20 pb-10  bg-gradient-to-r from-blue-100 to-purple-100 bg-radial-[at_25%_25%]">
    @include('guest.component.hero')
    @include('guest.component.stat')
    
    {{-- @include('guest.component.icon-section') --}}
    @include('guest.component.features')
    @include('guest.component.program')
</div>


@endsection
