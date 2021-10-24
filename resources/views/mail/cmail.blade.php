<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Mail') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-auth-validation-errors class="mb-4" :errors="$errors"/>
                    <form method="POST" action="{{ route('mail.create') }}">
                    @method('PUT')
                    @csrf
                    <!-- From -->
{{--                        <div class="mt-4">--}}
{{--                            <x-label for="from" :value="__('From')"/>--}}
{{--                            <x-input id="from" class="block mt-1 w-full" type="email"--}}
{{--                                     name="from"--}}
{{--                                     value="{{ auth()->user()->email }}"--}}
{{--                                     required autofocus hidden/>--}}
{{--                        </div>--}}
                        <div class="mt-4">
                            <x-label for="to" :value="__('To')"/>
                            <x-input id="to" class="block mt-1 w-full" type="email"
                                     name="to"
                                     required autofocus/>
                        </div>

                        <div class="mt-4">
                            <x-label for="title" :value="__('Title')"/>
                            <x-input id="title" class="block mt-1 w-full" type="text"
                                     name="title"
                                     required autofocus/>
                        </div>

                        <div class="mt-4">
                            <x-label for="body" :value="__('Body')"/>
                            <x-input id="body" class="block mt-1 w-full" type="text"
                                     name="body"
                                     required autofocus/>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-4">
                                {{ __('Send') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
