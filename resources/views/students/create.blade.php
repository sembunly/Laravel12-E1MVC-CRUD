<x-layout ptitle="Student Create">
    <x-slot:header>
        <h1 class="text-2xl font-bold">Student Create</h1>
    </x-slot:header>

    <form action="{{ route('student.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold text-gray-900">Create New Student</h2>

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
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Gender --}}
                    <div class="sm:col-span-2">
                        <label for="gender" class="block text-sm font-medium text-gray-900">Gender</label>
                        <div class="mt-2">
                            <select
                                id="gender"
                                name="gender"
                                class="block w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500"
                            >
                                <option value="">Select Gender</option>
                                <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                                <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                            </select>
                        </div>
                        @error('gender')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
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
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
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
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- DOB --}}
                    <div class="sm:col-span-3">
                        <label for="dob" class="block text-sm font-medium text-gray-900">Date of Birth</label>
                        <div class="mt-2">
                            <input
                                id="dob"
                                type="date"
                                name="dob"
                                value="{{ old('dob') }}"
                                class="block w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500"
                            />
                        </div>
                        @error('dob')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- POB --}}
                    <div class="sm:col-span-3">
                        <label for="pob" class="block text-sm font-medium text-gray-900">Place of Birth</label>
                        <div class="mt-2">
                            <input
                                id="pob"
                                type="text"
                                name="pob"
                                value="{{ old('pob') }}"
                                class="block w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500"
                                placeholder="Input place of birth"
                            />
                        </div>
                        @error('pob')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
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
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Photo --}}
                    <div class="sm:col-span-6">
                        <label for="photo" class="block text-sm font-medium text-gray-900">Photo</label>
                        <div class="mt-2">
                            <input
                                id="photo"
                                type="file"
                                name="photo"
                                class="block w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500"
                            />
                        </div>
                        @error('photo')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Note --}}
                    <div class="sm:col-span-6">
                        <label for="note" class="block text-sm font-medium text-gray-900">Note</label>
                        <div class="mt-2">
                            <textarea
                                id="note"
                                name="note"
                                rows="4"
                                class="block w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500"
                                placeholder="Optional note..."
                            >{{ old('note') }}</textarea>
                        </div>
                        @error('note')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="{{ route('student.index') }}"
               class="rounded border border-gray-300 px-3 py-2 text-sm font-semibold text-gray-900 hover:bg-gray-100">
                Cancel
            </a>

            <button type="submit"
                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                Save
            </button>
        </div>
    </form>
</x-layout>