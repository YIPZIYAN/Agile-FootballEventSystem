<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Football Event') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                {{ $event->title }}
                            </h2>
                            <p>{{ $event->id }}</p>
                        </header>

                        <form method="post" action="{{ route('event.update', $event) }}" class="mt-6 space-y-6">
                            @csrf
                            @method('patch')
                            <div>
                                <x-input-label for="title" :value="__('Title')" />
                                <x-text-input id="title" name="title" type="text" class="mt-1 block w-full"
                                    :value="old('title', $event->title)" required autofocus />
                                <x-input-error class="mt-2" :messages="$errors->get('title')" />
                            </div>

                            <div>
                                <x-input-label for="description" :value="__('Description')" />
                                <x-textarea-input id="description" name="description" type="text"
                                    class="mt-1 block w-full" required autofocus
                                    content="{{ old('description', $event->description) }}" />
                                <x-input-error class="mt-2" :messages="$errors->get('description')" />
                            </div>

                            <div>
                                <x-input-label for="startDate" :value="__('Start Date')" />
                                <x-date-input id="startDate" name="startDate" :value="old('startDate', $event->startDate)"
                                    class="mt-1 block w-full" required autofocus />
                                <x-input-error class="mt-2" :messages="$errors->get('startDate')" />
                            </div>

                            <div>
                                <x-input-label for="endDate" :value="__('End Date')" />
                                <x-date-input id="endDate" name="endDate" :value="old('endDate', $event->endDate)" class="mt-1 block w-full"
                                    required autofocus />
                                <x-input-error class="mt-2" :messages="$errors->get('endDate')" />
                            </div>

                            <div>
                                <x-input-label for="noOfTeams" :value="__('Number of Teams')" />
                                <x-text-input id="noOfTeams" name="noOfTeams" type="number" class="mt-1 block w-full"
                                    :value="old('noOfTeams', $event->noOfTeams)" required autofocus />
                                <x-input-error class="mt-2" :messages="$errors->get('noOfTeams')" />
                            </div>

                            <div>
                                <x-input-label for="location" :value="__('Location')" />
                                <x-textarea-input id="location" name="location" type="text"
                                    class="mt-1 block w-full" required autofocus
                                    content="{{ old('location', $event->location) }}" />
                                <x-input-error class="mt-2" :messages="$errors->get('location')" />
                            </div>

                            <div>
                                <x-input-label for="deadline" :value="__('Deadline')" />
                                <x-date-input id="deadline" name="deadline" :value="old('deadline', $event->deadline)"
                                    class="mt-1 block w-full" required autofocus />
                                <x-input-error class="mt-2" :messages="$errors->get('deadline')" />
                            </div>

                            <div>
                                <x-input-label for="fees (RM)" :value="__('Fees')" />
                                <x-text-input id="fees" name="fees" type="text" class="mt-1 block w-full"
                                    :value="old('fees', $event->fees)" required autofocus />
                                <x-input-error class="mt-2" :messages="$errors->get('fees')" />
                            </div>

                            <div class="flex items-center gap-4">
                                <x-primary-button>{{ __('Update') }}</x-primary-button>
                            </div>

                        </form>

                        <form method="post" action="{{ route('event.destroy', $event) }}" class="mt-6 space-y-6">
                            @csrf
                            @method('delete')

                            <div class="flex items-center gap-4">

                                <x-danger-button data-modal-target="popup-modal" data-modal-toggle="popup-modal"
                                    class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                    type="button">
                                    {{ __('Archive') }}
                                </x-danger-button>
                                <div id="popup-modal" tabindex="-1"
                                    class="hidden backdrop-brightness-50 overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] h-full">
                                    <div class="relative p-4 w-full max-w-md max-h-full">
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            <button type="button"
                                                class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                data-modal-hide="popup-modal">
                                                <svg class="w-3 h-3" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 14 14">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                            <div class="p-4 md:p-5 text-center">
                                                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 20 20">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                </svg>
                                                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                                                    Are you sure you want to archive this event?</h3>
                                                <x-danger-button data-modal-hide="popup-modal" type="s"
                                                    class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                                    Yes, I'm sure
                                                </x-danger-button>
                                                <button data-modal-hide="popup-modal" type="button"
                                                    class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No,
                                                    cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
