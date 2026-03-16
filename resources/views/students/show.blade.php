<x-layout ptitle="Student Page">

<x-slot:header>
    <h1 class="text-3xl font-bold text-gray-800">Student Details</h1>
</x-slot:header>

{{-- Action Buttons --}}
<div class="flex gap-3 mb-6">

    {{-- Edit --}}
    <a href="{{ route('student.edit', $student->id) }}"
        class="rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white hover:bg-indigo-500">
        Edit
    </a>

    {{-- Delete --}}
    <button
        type="submit"
        form="form-delete"
        onclick="return confirm('Are you sure you want to delete this student?')"
        class="rounded-md bg-red-600 px-4 py-2 text-sm font-semibold text-white hover:bg-red-500">
        Delete
    </button>

    {{-- Back --}}
    <a href="{{ route('student.index') }}"
        class="rounded-md bg-blue-500 px-4 py-2 text-sm font-semibold text-white hover:bg-blue-600">
        Back to Student List
    </a>

</div>


<div class="bg-white shadow-lg rounded-xl p-6">

    <div class="flex items-center gap-4 mb-6">

            @if($student->photo)
                <img src="{{ asset('storage/'.$student->photo) }}"
                    class="w-16 h-16 rounded-full object-cover">
            @else
                <div class="w-16 h-16 rounded-full bg-gray-200 flex items-center justify-center">
                    👤
                </div>
            @endif

        <div>
            <h2 class="text-xl font-semibold text-gray-800">
                {{ $student->name }}
            </h2>
            <p class="text-sm text-gray-500">{{ $student->gender }}</p>
        </div>

    </div>

    <div class="text-gray-700 space-y-2">

        <p><strong>Phone:</strong> {{ $student->phone }}</p>
        <p><strong>Email:</strong> {{ $student->email }}</p>
        <p><strong>DOB:</strong> {{ $student->dob }}</p>
        <p><strong>POB:</strong> {{ $student->pob }}</p>
        <p><strong>Address:</strong> {{ $student->address }}</p>
        <p><strong>Note:</strong> {{ $student->note }}</p>

    </div>

</div>


{{-- Delete Form --}}
<form id="form-delete" action="{{ route('student.destroy', $student->id) }}" method="POST" class="hidden">
    @csrf
    @method('DELETE')
</form>

</x-layout>