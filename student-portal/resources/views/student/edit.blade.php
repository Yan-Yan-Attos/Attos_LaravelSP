@extends('layout')

@section('content')
<div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-sm border border-gray-200">
    <h2 class="text-xl font-bold mb-6">Edit Student</h2>
    
    <form class="space-y-4">
        <div>
            <label class="block text-sm text-gray-600 mb-1">Student Name</label>
            <input type="text" value="John Doe" class="w-full border p-2 rounded outline-none focus:border-emerald-500">
        </div>

        <div>
            <label class="block text-sm text-gray-600 mb-1">Course</label>
            <select class="w-full border p-2 rounded outline-none bg-white">
                <option value="BSIT" selected>BSIT</option>
                <option value="BSCS">BSCS</option>
                <option value="BSIS">BSIS</option>
            </select>
        </div>

        <div>
            <label class="block text-sm text-gray-600 mb-1">Year Level</label>
            <select class="w-full border p-2 rounded outline-none bg-white">
                <option value="1">1st Year</option>
                <option value="2">2nd Year</option>
                <option value="3" selected>3rd Year</option>
                <option value="4">4th Year</option>
            </select>
        </div>

        <div class="pt-4 flex gap-2">
            <button type="submit" class="bg-emerald-600 text-white px-6 py-2 rounded font-bold hover:bg-emerald-700">Update</button>
            <a href="{{ route('students.index') }}" class="bg-gray-200 text-gray-700 px-6 py-2 rounded hover:bg-gray-300">Cancel</a>
        </div>
    </form>
</div>
@endsection