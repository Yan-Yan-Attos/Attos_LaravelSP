@extends('layout')

@section('content')
<div class="max-w-xl mx-auto bg-white p-8 rounded-xl shadow-sm border border-gray-100">
    <div class="border-b border-gray-100 pb-4 mb-6">
        <h2 class="text-2xl font-bold text-slate-800">Register New Student</h2>
        <p class="text-sm text-gray-500">Fill in the fields below to add a student to the directory.</p>
    </div>

    <form class="space-y-5">
        <div>
            <label class="block text-sm font-semibold text-slate-700 mb-1">Full Name</label>
            <input type="text" placeholder="e.g. Jane Doe" class="w-full p-2.5 border border-gray-200 rounded-lg focus:ring-2 focus:ring-emerald-500 outline-none">
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-1">Course</label>
                <select class="w-full p-2.5 border border-gray-200 rounded-lg focus:ring-2 focus:ring-emerald-500 outline-none bg-white">
                    <option value="" disabled selected>Select Course</option>
                    <option value="BSIT">BSIT</option>
                    <option value="BSCS">BSCS</option>
                    <option value="BSIS">BSIS</option>
                </select>
            </div>

            <div>
                <label class="block text-sm font-semibold text-slate-700 mb-1">Year Level</label>
                <select class="w-full p-2.5 border border-gray-200 rounded-lg focus:ring-2 focus:ring-emerald-500 outline-none bg-white">
                    <option value="1">1st Year</option>
                    <option value="2">2nd Year</option>
                    <option value="3">3rd Year</option>
                    <option value="4">4th Year</option>
                </select>
            </div>
        </div>

        <button type="submit" class="w-full mt-4 bg-slate-800 text-white py-3 rounded-lg font-bold hover:bg-slate-900 transition">
            Save Student Profile
        </button>
    </form>
</div>
@endsection