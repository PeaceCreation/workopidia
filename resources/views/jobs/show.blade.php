{{-- @extends('layout')




@section('content')
    <h1> Show Page</h1>
@endsection --}}


<x-layout>
    <x-slot name="title">
        Show
    </x-slot>
    <h1 class="text-2xl"> {{ $job->title }}</h1>
    <p>{{ $job->description }}</p>

</x-layout>
