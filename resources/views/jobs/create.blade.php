<x-layout ptitle="Create New job">
    <x-slot:header>
        <h1 class="text-2xl font-bold">Create New Job</h1>
    </x-slot:header>

<form method="post" action="/jobs">
    @csrf

    <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base/7 font-semibold text-gray-900">Create New Job</h2>

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                <x-form-field>
                    <x-form-label for="position">
                        Job Position
                    </x-form-label>

                    <div class="mt-2">
                        <x-form-input id="position" type="text" name="position" placeholder="input Position" />
                        <x-form-error name="position" />
                    </div>
                </x-form-field>

                <x-form-field>
                    <x-form-label for="salary">
                        Job Salary
                    </x-form-label>

                    <div class="mt-2">
                        <x-form-input id="salary" type="text" name="salary" placeholder="input salary" />
                        <x-form-error name="salary" />
                    </div>
                </x-form-field>

            </div>
        </div>
    </div>

    <div class="mt-6 flex items-center justify-end gap-x-6">
        <a href="/jobs" class="border border-gray-300 px-3 py-2 text-sm font-semibold text-gray-900 rounded hover:bg-gray-100">
            Cancel
        </a>

        <x-form-button>
            Submit
        </x-form-button>
    </div>
</form>
</x-layout>