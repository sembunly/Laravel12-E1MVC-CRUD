<x-layout ptitle="Login">
    <x-slot:header>
        <h1 class="text-2xl font-bold">Login</h1>
    </x-slot:header>

<form method="post" action="/login">
    @csrf

    <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base/7 font-semibold text-gray-900">Login</h2>

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                <x-form-field>
                    <x-form-label for="email">
                        Email
                    </x-form-label>

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
                    <x-form-label for="password">
                        Password
                    </x-form-label>

                    <div class="mt-2">
                        <x-form-input
                            id="password"
                            type="password"
                            name="password"
                            placeholder="Enter your password"
                        />
                        <x-form-error name="password" />
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
            Login
        </x-form-button>
    </div>
</form>
</x-layout>