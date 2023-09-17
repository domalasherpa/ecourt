@extends('layouts.dashboard_layout')

@section('content')
    @php
        use App\Models\User;
    @endphp
    @if (Auth::user()->type == 'admin')
        <style>
            body {
                background: white !important;
            }
        </style>
        <p class="text-lg text-center font-bold m-5">All Users</p>
        <table class="rounded-t-lg m-5 w-5/6 mx-auto bg-gray-200 text-gray-800">
            <tr class="text-left border-b-2 border-gray-300">
                <th class="px-4 py-3">Id</th>
                <th class="px-4 py-3">Name</th>
                <th class="px-4 py-3">Phone No.</th>
                <th class="px-4 py-3">Email</th>
            </tr>
            @foreach ($user as $u)
                <tr class="bg-gray-100 border-b border-gray-200">
                    <td class="px-4 py-3">{{ $u->id }}</td>
                    <td class="px-4 py-3">{{ $u->name }}</td>
                    <td class="px-4 py-3">{{ $u->phoneNum }}</td>
                    <td class="px-4 py-3">{{ $u->email }}</td>
                </tr>
            @endforeach

        </table>

        <div class="mb-20"></div>
    @else
        <script>
            window.location = "/dashboard";
        </script>
    @endif
@endsection
