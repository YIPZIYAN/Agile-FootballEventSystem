<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Football Merchandise List') }}
        </h2>
    </x-slot>
    @foreach ($merchandises as $merchandise)
        <img src="{{ 'data:image/jpeg;base64,' . $merchandise->image }}" />
    @endforeach
</x-app-layout>
