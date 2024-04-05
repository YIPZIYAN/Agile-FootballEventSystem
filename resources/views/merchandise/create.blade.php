<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create a Football Merchandise') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                {{ __('Football Merchandise Information') }}
                            </h2>
                        </header>

                        <form method="post" action="{{ route('merchandise.store') }}" class="mt-6 space-y-6">
                            @csrf
                            @method('post')
                            <div>
                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full"
                                    :value="old('name')" required autofocus />
                                <x-input-error class="mt-2" :messages="$errors->get('name')" />
                            </div>

                            <div>
                                <x-input-label for="description" :value="__('Description')" />
                                <x-textarea-input id="description" name="description" type="text"
                                    class="mt-1 block w-full" required autofocus content="{{ old('description') }}" />
                                <x-input-error class="mt-2" :messages="$errors->get('description')" />
                            </div>

                            <div>
                                <x-input-label for="price (RM)" :value="__('Price')" />
                                <x-text-input id="price" name="price" type="text" class="mt-1 block w-full"
                                    :value="old('price')" required autofocus />
                                <x-input-error class="mt-2" :messages="$errors->get('price')" />
                            </div>

                            <div>
                                <x-input-label for="image" :value="__('Upload Image')" />
                                <input
                                    class="mt-1 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="file_input_help" id="image" name="image"
                                    :value="old('image')" type="file" required>
                                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">PNG, JPG
                                    or JPEG.</p>
                            </div>

                            <div>
                                <x-input-label for="stock_quantity" :value="__('Available Stock Quantity')" />
                                <x-text-input id="stock_quantity" name="stock_quantity" type="number" min="0"
                                    class="mt-1 block w-full" :value="old('stock_quantity')" required autofocus />
                                <x-input-error class="mt-2" :messages="$errors->get('stock_quantity')" />
                            </div>

                            <div>
                                <x-input-label for="category" :value="__('Category')" />
                                <select id="category"
                                    class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected>Choose a cateogry</option>
                                    <option value="cap">Cap</option>
                                    <option value="bag">Bag</option>
                                    <option value="poster">Poster</option>
                                    <option value="other">Other</option>
                                </select>
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
