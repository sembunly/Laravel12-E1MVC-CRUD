<x-layout ptitle="Edit job">
    <x-slot:header>
        <h1 class="text-2xl font-bold">Edit Job</h1>
        </x-slot:header>

<form method="post" action="/jobs/{{$job->id}}">
    @csrf
    @method ('PATCH')
  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">
      <h2 class="text-base/7 font-semibold text-gray-900">Edit Job</h2>

      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-4">
          <label for="position" class="block text-sm/6 font-medium text-gray-900">Position</label>
          <div class="mt-2">
            <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
              <input id="position"
                    value="{{$job->position}}"
                    type="text"
                    name="position" placeholder="input Position" class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" />
            </div>
          </div>
        @error('position')
            <div class="text-red-500 text-sm">
                {{ $message }}
            </div>
        @enderror
        </div>

        <div class="sm:col-span-4">
          <label for="salary" class="block text-sm/6 font-medium text-gray-900">Salary</label>
          <div class="mt-2">
            <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
              <input id="salary"
                    value="{{$job->salary}}"
                    type="text"
                    name="salary" placeholder="$xxxx" class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" />
            </div>
          </div>
        @error('salary')
            <div class="text-red-500 text-sm">
                {{ $message }}
            </div>
        @enderror
        </div>

      </div>
    </div>
  </div>

  <div class="mt-6 flex items-center justify-end gap-x-6">
    <a href="/jobs" class="border border-gray-300 px-3 py-2 text-sm font-semibold text-gray-900 rounded hover:bg-gray-100">
    Cancel
</a>
    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
        Update
    </button>

    <button type="submit" form="form-delete" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
        Delete
    </button>
  </div>
</form>

<form id="form-delete" action="/jobs/{{$job->id}}" method="post" class="hidden">
    @csrf
    @method('delete')
</form>
</x-layout>