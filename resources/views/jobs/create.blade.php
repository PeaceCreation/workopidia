

<x-layout>
    <x-slot name="title">
        Create a Job
    </x-slot>
    <h1>Create New Job</h1>
    <form action="/jobs" method="POST">
        @csrf
        <div class="mt-4">
            <input type="text" name="title" placeholder="Title " value="{{ old('title') }}">
            @error('title')
            <div class="py-2 text-red-500">
                    <small>
                        {{ $message }}
                    </small>
            </div>
            @enderror
        </div>
        <div class="mt-4">
            <input type="text" name="description" placeholder="Description " value="{{ old('description') }}">
            @error('title')
            <div class="py-2 text-red-500">
                        <small>
                            {{ $message }}
                        </small>
                </div>
            @enderror
        </div>
            <div class="mt-4">
                <input type="submit" value="submit" class="btn btn-danger">
            </div>
            <h1> Welcome To Workopidia Website Updated </h1>
    </form>
</x-layout>

