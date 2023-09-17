@extends('layouts.dashboard_layout')

@section('content')
    @php
        use App\Models\Expertise;
    @endphp
    @if (Auth::user()->type == 'lawyer')
        <div class="py-12">
            <div class="max-w-full sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        <form action="{{ route('expertise-add', ['id' => $id]) }}" method="POST">
                            @csrf

                            {{-- Expertise --}}
                            <div class="mt-6">
                                <x-input-label for="expertise" value="{{ __('Expertise') }}" class="sr-only" />
                                <select name="expertise" id="expertise">
                                    <option value="Land Dispute">Land Dispute</option>
                                    <option value="Domestic Violence">Domestic Violence</option>
                                    <option value="Divorce Specialist">Divorce Specialist</option>
                                    <option value="Crimnal Law">Crimnal Law</option>
                                </select>
                            </div>

                            <div class="mt-6">
                                <x-primary-button class="ml-4" type="submit">
                                    {{ 'Save' }}
                                </x-primary-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <style>
            body {
                background: white !important;
            }
        </style>
        <p class="text-lg text-center font-bold m-5">All Expertise</p>
        <table class="rounded-t-lg m-5 w-5/6 mx-auto bg-gray-200 text-gray-800">
            <tr class="text-left border-b-2 border-gray-300">
                <th class="px-4 py-3">SN</th>
                <th class="px-4 py-3">Expertise</th>
            </tr>
            @php
                $i = 1;
            @endphp
            @foreach ($expertise as $e)
                <tr class="bg-gray-100 border-b border-gray-200">
                    <td class="px-4 py-3">{{ $i++ }}</td>
                    <td class="px-4 py-3">{{ $e->expertise }}</td>
                </tr>
            @endforeach

        </table>

        <div class="mb-20"></div>
    @endif
@endsection
