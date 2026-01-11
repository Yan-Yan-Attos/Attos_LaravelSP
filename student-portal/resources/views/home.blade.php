@extends('layout')

@section('content')
<div class="bg-white p-12 rounded-xl shadow-sm border border-gray-100">
    <h1 class="text-3xl font-bold text-slate-800 mb-4">Welcome to the Student Portal</h1>
    <p class="text-gray-600 mb-8 leading-relaxed">
        This system is designed to manage academic records efficiently. <br>
        Navigate through the tabs to view, add, or update student information.
    </p>
    <a href="{{ route('students.index') }}" class="bg-emerald-600 text-white px-6 py-3 rounded-lg hover:bg-emerald-700 transition">
        Get Started →
    </a>
</div>
@endsection