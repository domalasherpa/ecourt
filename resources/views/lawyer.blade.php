@extends('layouts.dashboard_layout')

@section('content')
<style>
    body{background:white!important;}
</style>
<p class="text-lg text-center font-bold m-5">All Lawyers</p>
<table class="rounded-t-lg m-5 w-5/6 mx-auto bg-gray-200 text-gray-800">
  <tr class="text-left border-b-2 border-gray-300">
    <th class="px-4 py-3">Id</th>
    <th class="px-4 py-3">Name</th>
    <th class="px-4 py-3">Phone No.</th>
    <th class="px-4 py-3">Email</th>
  </tr>
  @foreach ($lawyer as $l)
  <tr class="bg-gray-100 border-b border-gray-200">
    <td class="px-4 py-3">{{ $l->id }}</td>
    <td class="px-4 py-3">{{ $l->name }}</td>
    <td class="px-4 py-3">{{ $l->phoneNum }}</td>
    <td class="px-4 py-3">{{ $l->email }}</td>
  </tr> 
  @endforeach

</table>

<div class="mb-20"></div>
       
@endsection
