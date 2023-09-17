@extends('layouts.dashboard_layout')

@section('content')
    @php
        use App\Models\Citizen;
        use App\Models\Lawyer;
        use App\Models\Cases;
        
    @endphp
    <main class="w-full flex-grow p-6">
        <h1 class="text-3xl text-black pb-6">Dashboard</h1>

        <div class="container flex gap-10 flex-wrap justify-center">
            <a href="#"
                class="text-center  block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Total Clients
                </h5>
                <p class=" font-normal text-gray-700 dark:text-gray-400">{{ Citizen::count() }}</p>
            </a>

            <a href="#"
                class="text-center block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Total Lawyers
                </h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">{{ Lawyer::count() }}</p>
            </a>

            <a href="#"
                class="text-center block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Cases Resolved
                </h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">50</p>
            </a>

            <a href="#"
                class="text-center block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Total Cases
                </h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">{{ Cases::count() }}</p>
            </a>
        </div>
    </main>
@endsection
