{{-- @extends('layout')

@section('content')

@endsection --}}


<x-layout>
    <h1>Workopidia</h1>

    <x-bottom-banner/>


    @forelse ( $jobs as $job)
     <div>
        <h1> {{ $job->title }}</h1>
        <p>{{ $job->description }}</p>
     </div>
    @empty
        <div>
            <h1>
                There is  No Jobs
            </h1>
        </div>
    @endforelse
</x-layout>
