<x-layout ptitle="Employee Create">
    <x-slot:header>
        <h1 class="text-2xl font-bold">Employee Create</h1>
    </x-slot:header>

    <form action="/employee" method="POST">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold text-gray-900">Create New Employee</h2>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                    {{-- Name --}}
                    <div class="sm:col-span-4">
                        <label for="name" class="block text-sm font-medium text-gray-900">Name</label>
                        <div class="mt-2">
                            <input
                                id="name"
                                type="text"
                                name="name"
                                value="{{ old('name') }}"
                                class="block w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500"
                                placeholder="Input name"
                            />
                        </div>
                        @error('name')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Gender --}}
                    <div class="sm:col-span-2">
                        <label for="gender" class="block text-sm font-medium text-gray-900">Gender</label>
                        <div class="mt-2">
                            <input
                                id="gender"
                                type="text"
                                name="gender"
                                value="{{ old('gender') }}"
                                class="block w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500"
                                placeholder="Male/Female"
                            />
                        </div>
                        @error('gender')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Phone --}}
                    <div class="sm:col-span-3">
                        <label for="phone" class="block text-sm font-medium text-gray-900">Phone</label>
                        <div class="mt-2">
                            <input
                                id="phone"
                                type="text"
                                name="phone"
                                value="{{ old('phone') }}"
                                class="block w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500"
                                placeholder="Input phone"
                            />
                        </div>
                        @error('phone')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Email --}}
                    <div class="sm:col-span-3">
                        <label for="email" class="block text-sm font-medium text-gray-900">Email</label>
                        <div class="mt-2">
                            <input
                                id="email"
                                type="email"
                                name="email"
                                value="{{ old('email') }}"
                                class="block w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500"
                                placeholder="example@gmail.com"
                            />
                        </div>
                        @error('email')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Address --}}
                    <div class="sm:col-span-6">
                        <label for="address" class="block text-sm font-medium text-gray-900">Address</label>
                        <div class="mt-2">
                            <input
                                id="address"
                                type="text"
                                name="address"
                                value="{{ old('address') }}"
                                class="block w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500"
                                placeholder="Input address"
                            />
                        </div>
                        @error('address')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Notes --}}
                    <div class="sm:col-span-6">
                        <label for="notes" class="block text-sm font-medium text-gray-900">Notes</label>
                        <div class="mt-2">
                            <textarea
                                id="notes"
                                name="notes"
                                rows="4"
                                class="block w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500"
                                placeholder="Optional notes..."
                            >{{ old('notes') }}</textarea>
                        </div>
                        @error('notes')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/employee" class="border border-gray-300 px-3 py-2 text-sm font-semibold text-gray-900 rounded hover:bg-gray-100">
                Cancel
            </a>

            <button type="submit"
                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                Save
            </button>
        </div>
    </form>
</x-layout>