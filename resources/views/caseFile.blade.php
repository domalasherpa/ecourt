@extends('layouts.dashboard_layout')

@section('content')
    <div class="container w-full p-4 bg-gray-300">
        <div class="flex flex-wrap justify-center">
            <div class="w-full lg:w-6/12 px-4">
                <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-white">
                    <div class="flex-auto p-5 lg:p-10">
                        <h4 class="text-2xl mb-4 text-black font-semibold">
                            Have a suggestion?
                        </h4>
                        <form id="feedbackForm" action="{{ route('case.new.file', ['id' => Auth::user()->id]) }}"
                            method="POST">
                            @csrf
                            <div class="relative w-full mb-3">
                                <label class="block uppercase text-gray-700 font-bold mb-2" for="dispute_type">Dispute
                                    Type</label>
                                <!-- drop down with options Land Dispute, Domestic violence, Criminal -->
                                <select name="dispute_type" id="dispute_type"
                                    style="
                        width: 100%;
                        background-color: #e5e5e5;
                        padding: 10px;
                        border-radius: 5px;
                      "
                                    required>
                                    <option value="" hidden disabled selected>
                                        Select Dispute Type
                                    </option>
                                    <option value="Land Dispute">Land Dispute</option>
                                    <option value="Domestic Violence">Domestic Violence</option>
                                    <option value="Divorce Specialist">Divorce Specialist</option>
                                    <option value="Crimnal Law">Crimnal Law</option>
                                </select>
                            </div>
                            <div class="relative w-full mb-3">
                                <label class="block uppercase text-gray-700 font-bold mb-2"
                                    for="description">Description</label>
                                <textarea maxlength="300" name="description" id="description" rows="8" cols="80"
                                    class="border-0 px-3 py-3 bg-gray-200 placeholder-black text-gray-800 rounded text-sm shadow focus:outline-none w-full"
                                    placeholder="" required style="resize: none"></textarea>
                            </div>
                            <div class="text-center mt-6">
                                <button id="feedbackBtn"
                                    class="bg-yellow-300 text-black text-center mx-auto active:bg-yellow-400 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1"
                                    type="submit" style="transition: all 0.15s ease 0s">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
