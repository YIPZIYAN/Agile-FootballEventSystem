<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        @role('admin')
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="grid sm:grid-cols-12 gap-6">
                    <div class="sm:self-end h-200 col-span-12 sm:col-span-6">
                        <!-- Card -->
                        <a class="group relative block rounded-xl overflow-hidden dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                            href={{ route('event.index') }}>
                            <div class="aspect-w-12 aspect-h-7 sm:aspect-none rounded-xl overflow-hidden">
                                <img class="group-hover:scale-105 transition-transform duration-500 ease-in-out rounded-xl w-full object-cover"
                                    src="https://www.idcband.com/en-us/pub/media/wordpress/78d59ea6cbcb667c8fa9c384cae0c1d2.jpg"
                                    alt="Image Description">
                            </div>
                            <div class="absolute bottom-0 start-0 end-0 p-2 sm:p-4">
                                <div
                                    class="text-sm font-bold text-gray-800 rounded-lg bg-white p-4 md:text-xl dark:bg-gray-800 dark:text-gray-200">
                                    Manage Football Event
                                </div>
                            </div>
                        </a>
                        <!-- End Card -->
                    </div>
                    <!-- End Col -->

                    <div class="sm:self-end col-span-12 sm:col-span-6">
                        <!-- Card -->
                        <a class="group relative block rounded-xl overflow-hidden dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                            href={{ route('merchandise.index') }}>
                            <div class="aspect-w-12 aspect-h-7 sm:aspect-none rounded-xl overflow-hidden">
                                <img class="group-hover:scale-105 transition-transform duration-500 ease-in-out rounded-xl w-full object-cover"
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRy6HOmOmqfumoGPLX2M8oEHaFYbu5S6Egw_tsnCukLRw&s"
                                    alt="Image Description">
                            </div>
                            <div class="absolute bottom-0 start-0 end-0 p-2 sm:p-4">
                                <div
                                    class="text-sm font-bold text-gray-800 rounded-lg bg-white p-4 md:text-xl dark:bg-gray-800 dark:text-gray-200">
                                    Manage Football Merchandise
                                </div>
                            </div>
                        </a>
                        <!-- End Card -->
                    </div>
                    <!-- End Col -->
                </div>
            </div>
        @else
            <form method="post" action="{{ route('merchandise.search') }}" class="max-w-lg mx-auto">
                @csrf
                <div class="flex">
                    <select id="dropdown-button" data-dropdown-toggle="dropdown" name="search_category"
                        class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-s-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600">
                        <option {{ old('search_category') == null ? 'selected' : '' }} value="{{ null }}"
                            class="py-2 text-sm text-gray-700 dark:text-gray-200">
                            All categories
                        </option>
                        <option {{ old('search_category') == 'cap' ? 'selected' : '' }} value="cap"
                            class="py-2 text-sm text-gray-700 dark:text-gray-200">Cap</option>
                        <option {{ old('search_category') == 'poster' ? 'selected' : '' }} value="poster"
                            class="py-2 text-sm text-gray-700 dark:text-gray-200">Poster</option>
                        <option {{ old('search_category') == 'bag' ? 'selected' : '' }} value="bag"
                            class="py-2 text-sm text-gray-700 dark:text-gray-200">Bag</option>
                    </select>

                    <div class="relative w-full">
                        <input type="search" id="search-dropdown" name="search_query"
                            class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-gray-50 border-s-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-s-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500"
                            placeholder="Search..." />
                        <button type="submit"
                            class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-blue-700 rounded-e-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                            <span class="sr-only">Search</span>
                        </button>
                    </div>
                </div>
            </form>

            <div class="max-w-2xl bg-white mx-auto p-8 my-8 lg:max-w-7xl lg:px-8">
                @isset($is_search)
                    <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">Search Result:</h2>
                @else
                    <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">Football Merchandise List</h2>
                @endisset
                <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                    @forelse ($merchandises as $merchandise)
                        <div class="group relative">
                            <div
                                class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
                                <img src="{{ 'data:image/jpeg;base64,' . $merchandise->image }}"
                                    class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                            </div>
                            <div class="mt-4 flex justify-between">
                                <div>
                                    <h3 class="text-sm text-gray-700">
                                        {{ $merchandise->name }}
                                    </h3>
                                    <p class="uppercase mt-1 text-sm text-gray-500">{{ $merchandise->category }}</p>
                                </div>
                                <p class="text-sm font-medium text-gray-900">
                                    RM {{ $merchandise->price }}
                                </p>
                            </div>
                        </div>
                    @empty
                        <p>Merhcnadise List is Empty</p>
                    @endforelse
                </div>

                {{-- hide paginator when search --}}
                @isset($is_search)
                @else
                    {{ $merchandises->links() }}
                @endisset

            </div>
        @endrole
    </div>

</x-app-layout>
