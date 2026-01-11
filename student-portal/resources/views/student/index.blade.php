@extends('layout')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200">
    <h2 class="text-xl font-bold mb-4">Student Directory</h2>
    <table class="w-full text-left border-collapse">
        <thead class="bg-gray-50 text-gray-600 text-sm">
            <tr>
                <th class="p-3 border-b">Name</th>
                <th class="p-3 border-b">Course</th>
                <th class="p-3 border-b">Year</th>
                <th class="p-3 border-b">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr class="hover:bg-gray-50">
                <td class="p-3 border-b">John Doe</td>
                <td class="p-3 border-b text-emerald-700 font-medium">BSIT</td>
                <td class="p-3 border-b text-gray-500">3rd Year</td>
                <td class="p-3 border-b">
                    <a href="{{ route('students.show') }}" class="text-blue-500 mr-2">View</a>
                    <a href="{{ route('students.edit') }}" class="text-gray-400">Edit</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection