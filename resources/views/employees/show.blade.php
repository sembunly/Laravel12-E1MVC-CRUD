<x-layout ptitle="Employee Page">

    <x-slot:header>
        <h1 class="text-2xl font-bold">Employee Details Page</h1>
    </x-slot:header>

    {{-- Action Buttons --}}
    <div class="flex gap-3 mb-6">

        {{-- Edit --}}
        <a href="{{ route('employee.edit', $employee->id) }}"
           class="rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white hover:bg-indigo-500">
            Edit
        </a>

        {{-- Delete --}}
        <button
            type="submit"
            form="form-delete"
            onclick="return confirm('Are you sure you want to delete this employee?')"
            class="rounded-md bg-red-600 px-4 py-2 text-sm font-semibold text-white hover:bg-red-500">
            Delete
        </button>

        {{-- Back --}}
        <a href="{{ route('employee.index') }}"
           class="rounded-md bg-blue-500 px-4 py-2 text-sm font-semibold text-white hover:bg-blue-600">
            Back to Employee List
        </a>

    </div>

    {{-- Employee Details --}}
    <div class="bg-white shadow rounded-lg p-6">

        <h2 class="text-xl font-semibold mb-4">Employee Information</h2>

        <ul class="list-disc ml-6 space-y-2 text-gray-700">
            <li><strong>Name:</strong> {{ $employee->name }}</li>
            <li><strong>Gender:</strong> {{ $employee->gender }}</li>
            <li><strong>Phone:</strong> {{ $employee->phone }}</li>
            <li><strong>Email:</strong> {{ $employee->email }}</li>
            <li><strong>Address:</strong> {{ $employee->address }}</li>
            <li><strong>Notes:</strong> {{ $employee->notes }}</li>
        </ul>

    </div>

    {{-- Delete Form --}}
    <form id="form-delete" action="{{ route('employee.destroy', $employee->id) }}" method="POST" class="hidden">
        @csrf
        @method('DELETE')
    </form>

</x-layout>