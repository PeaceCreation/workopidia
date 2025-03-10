{{-- @php

$isActive = request()->is('jobs');

echo $isActive  ? 'Active' : ''


@endphp --}}

<!-- Header -->
        <header class="bg-blue-900 text-white p-4">
            <div class="container mx-auto flex justify-between items-center">
                <h1 class="text-3xl font-semibold">
                    <a href="{{ url('/') }}">Workopia</a>
                </h1>
                <nav class="hidden md:flex items-center space-x-4">
                    <x-nav-link  url="/" :active="request()->is('/')"> Home</x-nav-link>
                    <x-nav-link  url="/jobs" :active="request()->is('jobs')">All Jobs</x-nav-link>
                    <x-nav-link  url="/jobs/saved" :active="request()->is('jobs/saved')"> Saved Jobs</x-nav-link>
                    <x-nav-link  url="/login" :active="request()->is('login')"> login</x-nav-link>
                    <x-nav-link  url="/register" :active="request()->is('register')"> register</x-nav-link>
                    <x-nav-link  url="/dashboard" :active="request()->is('dashboard')" icon="gauge"> Dashboard</x-nav-link>

                    <x-button-link icon="edit" url="jobs/create"> Create a Job</x-button-link>
                </nav>
                <button
                    id="hamburger"
                    class="text-white md:hidden flex items-center"
                >
                    <i class="fa fa-bars text-2xl"></i>
                </button>
            </div>
            <!-- Mobile Menu -->
            <nav
                id="mobile-menu"
                class="md:hidden bg-blue-900 text-white mt-5 pb-4 space-y-2"
            >
            <x-nav-link  url="/jobs" :active="request()->is('jobs')" hoverClass="hover:bg-blue-700 px-2">All Jobs</x-nav-link>
            <x-nav-link  url="/jobs/saved" :active="request()->is('jobs/saved')" hoverClass="hover:bg-blue-700 px-2"> Saved Jobs</x-nav-link>
            <x-nav-link  url="/login" :active="request()->is('login')" hoverClass="hover:bg-blue-700 px-2"> login</x-nav-link>
            <x-nav-link  url="/register" :active="request()->is('register')" hoverClass="hover:bg-blue-700 px-2" > register</x-nav-link>
            <x-nav-link  url="/dashboard" :active="request()->is('dashboard')" icon="gauge" hoverClass="hover:bg-blue-700 px-2"> Dashboard</x-nav-link>
                <a
                    href="{{ url('/jobs/create') }}"
                    class="block px-4 py-2 bg-yellow-500 hover:bg-yellow-600 text-black"
                >
                    <i class="fa fa-edit"></i> Create Job
                </a>
            </nav>
        </header>
