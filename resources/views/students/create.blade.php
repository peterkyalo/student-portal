<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Student') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Validation Errors -->
        <x-validation-errors class="mb-4" :errors="$errors" />

            <div class="px-4 py-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form method="POST" action="{{ url('add-student') }}">
                    @csrf

                    <!-- Student Name -->
                    <div class="mb3 mt-4">
                        <x-label for="name" :value="__('Student Name')" />

                        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" autofocus />
                    </div>

                    <!-- Student Email -->
                    <div class="mb3 mt-4">
                        <x-label for="email" :value="__('Student Email')" />

                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" autofocus />
                    </div>
                    <!-- Student Phone -->
                    <div class="mb3 mt-4">
                        <x-label for="phone" :value="__('Student Phone')" />

                        <x-input id="email" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" autofocus />
                    </div>

                    <div class="flex items-center justify-end mt-4">

                        <x-button class="ml-3">
                            {{ __('Save Student') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
