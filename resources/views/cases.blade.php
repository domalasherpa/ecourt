@extends('layouts.dashboard_layout')

@section('content')
    @php
        use App\Models\User;
    @endphp
    <style>
        body {
            background: white !important;
        }
    </style>
    <p class="text-lg text-center font-bold m-5">All Cases</p>
    <table class="rounded-t-lg m-5 w-5/6 mx-auto bg-gray-200 text-gray-800">
        <tr class="text-left border-b-2 border-gray-300">
            <th class="px-4 py-3">SN</th>
            <th class="px-4 py-3">Title</th>
            <th class="px-4 py-3">Description</th>
            <th class="px-4 py-3">Status</th>
        </tr>
        @php
            $i = 1;
        @endphp
        @foreach ($cases as $c)
            <tr class="bg-gray-100 border-b border-gray-200">
                <td class="px-4 py-3">{{ $i++ }}</td>
                <td class="px-4 py-3">{{ $c->dispute_type }}</td>
                <td class="px-4 py-3">{{ $c->description }}</td>
                <td class="px-4 py-3">{{ ($c->lawyerId == null) ? 'Not Taken' : 'On Going' }}</td>

            </tr>
        @endforeach

    </table>

    <div class="mb-20"></div>
@endsection
