@extends('layouts.dashboard_layout')


@section('content')
    @php
        use App\Models\Lawyer;
    @endphp

    <div class="py-12">
        <div class="max-w-full sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <form action="{{ route('update-basic-data', ['id' => $data['id'] ] )}}" method="POST">
                        @csrf
                        {{-- name --}}
                        <div class="mt-6">
                            <x-input-label for="name" value="Name" class="sr-only" />

                            <x-text-input id="name" name="name" type="text" class="mt-1 block w-3/4"
                                value="{{ $data['name'] }}" placeholder="{{ __('Name') }}" />
                        </div>

                        {{-- email --}}
                        <div class="mt-6">
                            <x-input-label for="email" value="Email" class="sr-only" />

                            <x-text-input id="email" name="email" type="email" class="mt-1 block w-3/4"
                                value="{{ $data['email'] }}" placeholder="{{ __('Email') }}" />
                        </div>
                        {{-- Phone number --}}
                        <div class="mt-6">
                            <x-input-label for="phonenum" value="Phone Number" class="sr-only" />

                            <x-text-input id="phonenum" name="phoneNum" type="text" class="mt-1 block w-3/4"
                                value="{{ $data['phoneNum'] }}" placeholder="{{ __('Phone Number') }}" />
                        </div>
                        {{-- Password --}}
                        <div class="mt-6">
                            <x-input-label for="password" value="Password" class="sr-only" />

                            <x-text-input id="password" name="password" type="password" class="mt-1 block w-3/4"
                                placeholder="{{ __('New Password(at least 8 digits)') }}" />
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

    @if (Auth::user()->type == 'lawyer')
        <div class="py-12">
            <div class="max-w-full sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        <form action="{{ route('update-lawyer', ['id' => $data['id'] ] )}}" method="POST">
                            @csrf
                            {{-- Fee --}}
                            <div class="mt-6">
                                <x-input-label for="fee" value="fee" class="sr-only" />

                                <x-text-input id="fee" name="fee" type="text" class="mt-1 block w-3/4"
                                    value="{{ Lawyer::where('id', $data['id'])->first()->fee }}"
                                    placeholder="{{ __('fee') }}" />
                            </div>

                            {{-- experience --}}
                            <div class="mt-6">
                                <x-input-label for="experience" value="{{ __('Experience') }}" class="sr-only" />

                                <x-text-input id="experience" name="experience" type="experience" class="mt-1 block w-3/4"
                                    value="{{ Lawyer::where('id', $data['id'])->first()->experience }}"
                                    placeholder="{{ __('experience') }}" />
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
    @endif
@endsection
