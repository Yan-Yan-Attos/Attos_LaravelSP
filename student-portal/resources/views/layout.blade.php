<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Portal</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <nav class="bg-white shadow-sm border-b border-gray-200 p-4">
        <div class="max-w-5xl mx-auto flex justify-between items-center">
            <h1 class="font-bold text-emerald-600 text-lg">Student Portal</h1>
            <div class="space-x-4">
                <a href="{{ route('home') }}" class="text-gray-600 hover:text-emerald-600">Home</a>
                <a href="{{ route('students.index') }}" class="text-gray-600 hover:text-emerald-600">All Students</a>
                <a href="{{ route('students.create') }}" class="bg-emerald-600 text-white px-4 py-2 rounded-md hover:bg-emerald-700">Add New</a>
            </div>
        </div>
    </nav>

    <div class="max-w-5xl mx-auto mt-8 p-4">
        @yield('content')
    </div>
</body>
</html>