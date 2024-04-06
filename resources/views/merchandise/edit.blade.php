<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Football Merchandise') }}
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
                        <form method="post" enctype="multipart/form-data"
                            action="{{ route('merchandise.update', $merchandise) }}" class="mt-6 space-y-6">
                            @csrf
                            @method('patch')
                            <div>
                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full"
                                    :value="old('name', $merchandise->name)" required autofocus />
                                <x-input-error class="mt-2" :messages="$errors->get('name')" />
                            </div>

                            <div>
                                <x-input-label for="description" :value="__('Description')" />
                                <x-textarea-input id="description" name="description" type="text"
                                    class="mt-1 block w-full" required autofocus
                                    content="{{ old('description', $merchandise->description) }}" />
                                <x-input-error class="mt-2" :messages="$errors->get('description')" />
                            </div>

                            <div>
                                <x-input-label for="price (RM)" :value="__('Price')" />
                                <x-text-input id="price" name="price" type="text" class="mt-1 block w-full"
                                    :value="old('price', $merchandise->price)" required autofocus />
                                <x-input-error class="mt-2" :messages="$errors->get('price')" />
                            </div>

                            <div>
                                <x-input-label for="image" :value="__('Upload Image')" />
                                <img class="my-2 h-[250px] w-[250px]"
                                    src="{{ 'data:image/jpeg;base64,' . $merchandise->image }}" id="imagePreview" />
                                <input onchange="loadFile(event)"
                                    class="mt-1 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="file_input_help" id="image" name="image"
                                    :value="old('image', $merchandise - > image)" type="file">
                                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">PNG, JPG
                                    or JPEG.</p>
                                <x-input-error class="mt-2" :messages="$errors->get('image')" />

                            </div>

                            <div>
                                <x-input-label for="stock_quantity" :value="__('Available Stock Quantity')" />
                                <x-text-input id="stock_quantity" name="stock_quantity" type="number" min="0"
                                    class="mt-1 block w-full" :value="old('stock_quantity', $merchandise->stock_quantity)" required autofocus />
                                <x-input-error class="mt-2" :messages="$errors->get('stock_quantity')" />
                            </div>

                            <div>
                                <x-input-label for="category" :value="__('Category')" />
                                <select id="category" name="category" required
                                    class="mt-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option {{ old('category', $merchandise->category) == 'cap' ? 'selected' : '' }}
                                        value="cap">Cap</option>
                                    <option {{ old('category', $merchandise->category) == 'bag' ? 'selected' : '' }}
                                        value="bag">Bag</option>
                                    <option {{ old('category', $merchandise->category) == 'poster' ? 'selected' : '' }}
                                        value="poster">Poster
                                    </option>
                                    <option {{ old('category', $merchandise->category) == 'other' ? 'selected' : '' }}
                                        value="other">Other
                                    </option>
                                </select>
                                <x-input-error class="mt-2" :messages="$errors->get('category')" />

                            </div>

                            <div class="flex items-center gap-4">
                                <x-primary-button>{{ __('Submit') }}</x-primary-button>
                            </div>


                        </form>
                        <form method="post" action="{{ route('merchandise.destroy', $merchandise) }}"
                            class="mt-6 space-y-6">
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
                                                    Are you sure you want to archive this merchandise?</h3>
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
    <script>
        var loadFile = function(event) {
            var input = event.target;
            var file = input.files[0];
            var type = file.type;
            var output = document.getElementById('imagePreview');

            output.src = URL.createObjectURL(event.target.files[0]);

            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
    </script>
</x-app-layout>
