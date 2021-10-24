<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Read Mail') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <diV> From : <p>{{ $mail->from }}</p></diV>
                    <diV> To : <p>{{ $mail->to }}</p></diV>
                    <diV> Subject : <p>{{ $mail->title}}</p></diV>
                    <diV> Body : <p>{{ $mail->body }}</p></diV>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
