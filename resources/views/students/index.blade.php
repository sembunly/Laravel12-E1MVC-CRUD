<x-layout ptitle="Student Page">

<x-slot:header>
    <h1 class="text-3xl font-bold text-gray-800">Students</h1>
</x-slot:header>

<div class="mb-6">
    <a href="{{ route('student.create') }}"
       class="bg-blue-600 text-white px-4 py-2 rounded-lg shadow hover:bg-blue-700 transition">
        + New Student
    </a>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

@foreach($students as $student)

<div class="bg-white shadow-lg rounded-xl p-5 hover:shadow-xl transition">

    {{-- Profile --}}
    <div class="flex items-center gap-4 mb-4">

        @if($student->photo)
            <img src="{{ asset('storage/'.$student->photo) }}"
                 class="w-16 h-16 rounded-full object-cover">
        @else
            <div class="w-16 h-16 rounded-full bg-gray-200 flex items-center justify-center">
                👤
            </div>
        @endif

        <div>
            <h2 class="text-lg font-semibold text-gray-800">
                {{ $student->name }}
            </h2>
            <p class="text-sm text-gray-500">
                {{ $student->gender }}
            </p>
        </div>

    </div>

    {{-- Student Info --}}
    <div class="text-sm text-gray-600 space-y-1">
        <p><span class="font-semibold">Phone:</span> {{ $student->phone }}</p>
        <p><span class="font-semibold">Email:</span> {{ $student->email }}</p>
        <p><span class="font-semibold">DOB:</span> {{ $student->dob }}</p>
        <p><span class="font-semibold">POB:</span> {{ $student->pob }}</p>
        <p><span class="font-semibold">Address:</span> {{ $student->address }}</p>
        <p><span class="font-semibold">Note:</span> {{ $student->note }}</p>
    </div>

    {{-- Action --}}
    <div class="mt-4">
        <a href="{{ route('student.show',$student->id) }}"
           class="text-blue-600 font-semibold hover:underline">
           View Details →
        </a>
    </div>

</div>

@endforeach

</div>

</x-layout>