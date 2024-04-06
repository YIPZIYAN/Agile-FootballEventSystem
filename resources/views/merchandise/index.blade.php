<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Football Merchandise List') }}
        </h2>
    </x-slot>

    <div class="mx-24 my-4">
        <a href={{ route('merchandise.create') }}>
            <x-primary-button class="mb-4">{{ __('Add New Merchandise') }}</x-primary-button>
        </a>
        <a href={{ route('merchandise.create') }}>
            <x-danger-button class="ml-4">{{ __('Archived List') }}</x-primary-button>
        </a>
        <livewire:merchandise-table />
    </div>

</x-app-layout>
