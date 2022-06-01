<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Your notes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-wrap gap-2 justify-center p-2">
            @foreach ($notes as $note)
            <div class="p-6 bg-white rounded w-full md:w-1/5">
                <p class="text-base font-bold border-b border-slate-100 mb-2">
                    {{ $note->title }}
                </p>
                <p class="text-sm">
                    {{ $note->content }}
                </p>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
