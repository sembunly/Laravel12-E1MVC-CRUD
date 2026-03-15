<x-layout ptitle="Jobs Page">
    <x-slot:header>
        <h1 class="text-2xl font-bold">This is Jobs Page</h1>
        </x-slot:header>
        <div>
            <a href="/jobs/{{$job->id}}/edit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Edit</a>
        </div>
    <h2>Job Details</h2>
   <ul class="list-disc ml-8">
    <li>Position: {{$job['position']}}</li>
    <li>Salary: ${{$job['salary']}}.00</li>
    <button class="mt-4 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
    <a href="/jobs">Back to Job List</a>
   </ul>
</x-layout>