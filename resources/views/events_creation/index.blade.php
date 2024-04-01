<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Football Event List') }}
        </h2>
    </x-slot>

    <div class="mx-24 my-4">
        <a href={{ route('event.create') }}>
            <x-primary-button>{{ __('Create Event') }}</x-primary-button>
        </a>
        <a>
            <x-danger-button class="ml-4">{{ __('Archived List') }}</x-danger-button>
        </a>
        <livewire:event-table />
    </div>


</x-app-layout>
