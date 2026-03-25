<x-layout ptitle="Register">
    <x-slot:header>
        <h1 class="text-2xl font-bold">Register</h1>
    </x-slot:header>

<form method="post" action="/register">
    @csrf

    <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base/7 font-semibold text-gray-900">Create Account</h2>

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                <x-form-field>
                    <x-form-label for="name">Name</x-form-label>
                    <div class="mt-2">
                        <x-form-input
                            id="name"
                            type="text"
                            name="name"
                            placeholder="Enter your name"
                        />
                        <x-form-error name="name" />
                    </div>
                </x-form-field>

                <x-form-field>
                    <x-form-label for="email">Email</x-form-label>
                    <div class="mt-2">
                        <x-form-input
                            id="email"
                            type="email"
                            name="email"
                            placeholder="Enter your email"
                        />
                        <x-form-error name="email" />
                    </div>
                </x-form-field>

                <x-form-field>
                    <x-form-label for="password">Password</x-form-label>
                    <div class="mt-2">
                        <x-form-input
                            id="password"
                            type="password"
                            name="password"
                            placeholder="Enter password"
                        />
                        <x-form-error name="password" />
                    </div>
                </x-form-field>

                <x-form-field>
                    <x-form-label for="password_confirmation">Confirm Password</x-form-label>
                    <div class="mt-2">
                        <x-form-input
                            id="password_confirmation"
                            type="password"
                            name="password_confirmation"
                            placeholder="Confirm password"
                        />
                    </div>
                </x-form-field>

            </div>
        </div>
    </div>

    <div class="mt-6 flex items-center justify-end gap-x-6">
        <a href="/login" class="border border-gray-300 px-3 py-2 text-sm font-semibold text-gray-900 rounded hover:bg-gray-100">
            Cancel
        </a>

        <x-form-button>
            Register Now
        </x-form-button>
    </div>
</form>
</x-layout>