<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Football Event List') }}
        </h2>
    </x-slot>

    <div class="mx-24 my-4">
        <x-primary-button class="mb-4">{{ __('Create Event') }}</x-primary-button>
        <x-danger-button class="ml-4">{{ __('Archived List') }}</x-primary-button>
            <livewire:event-table />
    </div>


</x-app-layout>
