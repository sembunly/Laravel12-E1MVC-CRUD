<x-layout ptitle="Employee Page">

<x-slot:header>
    <h1 class="text-3xl font-bold text-gray-800">Employees</h1>
</x-slot:header>

<div class="mb-6">
    <a href="/employee/create"
       class="bg-blue-600 text-white px-4 py-2 rounded-lg shadow hover:bg-blue-700 transition">
        + New Employee
    </a>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

@foreach($employees as $employee)

<div class="bg-white shadow-lg rounded-xl p-5 hover:shadow-xl transition">

    <div class="mb-3">
        <h2 class="text-lg font-semibold text-gray-800">
            {{ $employee->name }}
        </h2>
        <p class="text-sm text-gray-500">{{ $employee->gender }}</p>
    </div>

    <div class="text-sm text-gray-600 space-y-1">
        <p><span class="font-semibold">Phone:</span> {{ $employee->phone }}</p>
        <p><span class="font-semibold">Email:</span> {{ $employee->email }}</p>
        <p><span class="font-semibold">Address:</span> {{ $employee->address }}</p>
        <p><span class="font-semibold">Notes:</span> {{ $employee->notes }}</p>
    </div>

    <div class="mt-4">
        <a href="/employee/{{ $employee->id }}"
           class="text-blue-600 font-semibold hover:underline">
           View Details →
        </a>
    </div>

</div>

@endforeach

</div>

</x-layout>