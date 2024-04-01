<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create a Football Event') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                {{ __('Football Event Information') }}
                            </h2>
                        </header>

                        <form method="post" action="{{ route('event.store') }}" class="mt-6 space-y-6">
                            @csrf
                            @method('post')
                            <div>
                                <x-input-label for="title" :value="__('Title')" />
                                <x-text-input id="title" name="title" type="text" class="mt-1 block w-full"
                                    :value="old('title')" required autofocus />
                                <x-input-error class="mt-2" :messages="$errors->get('title')" />
                            </div>

                            <div>
                                <x-input-label for="description" :value="__('Description')" />
                                <x-textarea-input id="description" name="description" type="text"
                                    class="mt-1 block w-full" required autofocus content="{{ old('description') }}" />
                                <x-input-error class="mt-2" :messages="$errors->get('description')" />
                            </div>

                            <div>
                                <x-input-label for="startDate" :value="__('Start Date')" />
                                <x-date-input id="startDate" name="startDate" :value="old('startDate')"
                                    class="mt-1 block w-full" required autofocus />
                                <x-input-error class="mt-2" :messages="$errors->get('startDate')" />
                            </div>

                            <div>
                                <x-input-label for="endDate" :value="__('End Date')" />
                                <x-date-input id="endDate" name="endDate" :value="old('endDate')" class="mt-1 block w-full"
                                    required autofocus />
                                <x-input-error class="mt-2" :messages="$errors->get('endDate')" />
                            </div>

                            <div>
                                <x-input-label for="noOfTeams" :value="__('Number of Teams')" />
                                <x-text-input id="noOfTeams" name="noOfTeams" type="number" class="mt-1 block w-full"
                                    :value="old('noOfTeams')" required autofocus />
                                <x-input-error class="mt-2" :messages="$errors->get('noOfTeams')" />
                            </div>

                            <div>
                                <x-input-label for="location" :value="__('Location')" />
                                <x-textarea-input id="location" name="location" type="text"
                                    class="mt-1 block w-full" required autofocus content="{{ old('location') }}" />
                                <x-input-error class="mt-2" :messages="$errors->get('location')" />
                            </div>

                            <div>
                                <x-input-label for="deadline" :value="__('Deadline')" />
                                <x-date-input id="deadline" name="deadline" :value="old('deadline')"
                                    class="mt-1 block w-full" required autofocus />
                                <x-input-error class="mt-2" :messages="$errors->get('deadline')" />
                            </div>

                            <div>
                                <x-input-label for="fees (RM)" :value="__('Fees')" />
                                <x-text-input id="fees" name="fees" type="text" class="mt-1 block w-full"
                                    :value="old('fees')" required autofocus />
                                <x-input-error class="mt-2" :messages="$errors->get('fees')" />
                            </div>

                            <div class="flex items-center gap-4">
                                <x-primary-button>{{ __('Submit') }}</x-primary-button>
                            </div>

                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
