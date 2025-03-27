<x-layout>
    <x-slot name="title"> All Jobs</x-slot>
    <h1 class="text-2xl">All Jobs Listed</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-6">

    @forelse ( $jobs as $job)
        <x-job-card :job="$job" />
   @empty
       <div>
           <h1>
               There is  No Jobs
           </h1>
       </div>
   @endforelse
</div>
</x-layout>


