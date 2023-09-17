@extends('layouts.dashboard_layout')

@section('content')
    @php
        
        use App\Models\Lawyer;
    @endphp
    <style>
        body {
            background: white !important;
        }
    </style>
    <p class="text-lg text-center font-bold m-5">All Lawyers</p>
    <table class="rounded-t-lg m-5 w-5/6 mx-auto bg-gray-200 text-gray-800">
        <tr class="text-left border-b-2 border-gray-300">
            <th class="px-4 py-3">Id</th>
            <th class="px-4 py-3">Name</th>
            <th class="px-4 py-3">Phone No.</th>
            <th class="px-4 py-3">Fee</th>
            <th class="px-4 py-3">Availability</th>
        </tr>
        @foreach ($lawyer as $l)
            <tr class="bg-gray-100 border-b border-gray-200">
                <td class="px-4 py-3">{{ $l->id }}</td>
                <td class="px-4 py-3">{{ $l->name }}</td>
                <td class="px-4 py-3">{{ $l->phoneNum }}</td>
                <td class="px-4 py-3">{{ Lawyer::where('id', $l->id)->first()->fee }}</td>
                <td class="px-4 py-3">
                  @php
                      $available = Lawyer::where('id', $l->id)->first()->availability
                  @endphp
                    @if ($available == 0)
                        <button disabled class="bg-red-500 text-white font-bold py-2 px-4 rounded-full">
                            Not Available
                        </button>
                    @elseif($available == 1)
                        <a href="{{ route('hirelawyer', ['id'=>$l->id]) }}">
                            <button class="bg-green-700 hover:bg-green-900 text-white font-bold py-2 px-4 rounded-full">
                                Hire
                                <?php $l->availability = 1; ?>
                            </button>
                        </a>
                    @endif
                </td>
            </tr>
        @endforeach

    </table>

    <div class="mb-20"></div>
@endsection
