<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ADD TEACHER') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
               
                <form method="POST" action="{{ route('create.teacher') }}" enctype="multipart/form-data" >
                  @csrf
             <!-- Email Address -->
                  <div class="mt-4">
                <x-label for="image" :value="__('Picture')" />

                <x-input id="image" class="block mt-1 w-full" type="file" name="image" :value="old('image')" required />
            </div>
            <!-- Name -->
            <div class="mt-4">
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

           
            <!-- Kurs -->
            <div class="mt-4">
                <x-label for="kurs" :value="__('Kurs')" />

                <x-input id="kurs" class="block mt-1 w-full" type="text" name="kurs" :value="old('kurs')" required autofocus />
            </div>
            

            <!-- Phone -->
            <div class="mt-4">
                <x-label for="phone" :value="__('Number')" />

                <x-input id="phone" class="block mt-1 w-full"
                                type="number"
                                name="phone" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <!-- <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a> -->

                <x-button class="ml-4">
                    {{ __('Add') }}
                </x-button>
            </div>
        </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
