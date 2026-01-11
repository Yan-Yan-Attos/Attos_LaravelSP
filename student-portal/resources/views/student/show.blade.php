@extends('layout')

@section('content')
<div class="max-w-2xl bg-white p-8 rounded-xl shadow-sm border border-gray-100">
    <h2 class="text-2xl font-bold text-slate-800 mb-6">Student Profile</h2>
    <div class="space-y-4">
        <div class="flex border-b border-gray-50 pb-2">
            <span class="w-32 font-semibold text-gray-500">Name:</span>
            <span class="text-gray-800">John Smith</span>
        </div>
        <div class="flex border-b border-gray-50 pb-2">
            <span class="w-32 font-semibold text-gray-500">Email:</span>
            <span class="text-gray-800">john.smith@university.edu</span>
        </div>
        <div class="flex border-b border-gray-50 pb-2">
            <span class="w-32 font-semibold text-gray-500">Course:</span>
            <span class="text-gray-800">BS Computer Science</span>
        </div>
        <div class="flex border-b border-gray-50 pb-2">
            <span class="w-32 font-semibold text-gray-500">Year Level:</span>
            <span class="text-gray-800">3rd Year</span>
        </div>
    </div>
    <a href="{{ route('students.index') }}" class="mt-8 inline-block text-gray-500 hover:text-emerald-600 underline">Back to List</a>
</div>
@endsection