<x-layout>
    <x-slot name="title"> All Jobs</x-slot>
    <h1>All Jobs Listed</h1>
    @forelse ( $jobs as $job)
            <ul>
                <a href="{{ route('jobs.show', $job->id) }}"> {{ $job->title }}</a>
            </ul>
   @empty
       <div>
           <h1>
               There is  No Jobs
           </h1>
       </div>
   @endforelse
</x-layout>
