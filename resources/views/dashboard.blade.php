<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid sm:grid-cols-12 gap-6">
                <div class="sm:self-end col-span-12 sm:col-span-6">
                    <!-- Card -->
                    <a class="group relative block rounded-xl overflow-hidden dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                        href="#">
                        <div class="aspect-w-12 aspect-h-7 sm:aspect-none rounded-xl overflow-hidden">
                            <img class="group-hover:scale-105 transition-transform duration-500 ease-in-out rounded-xl w-full object-cover"
                                src="https://images.unsplash.com/photo-1606868306217-dbf5046868d2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3481&q=80"
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
                        href="#">
                        <div class="aspect-w-12 aspect-h-7 sm:aspect-none rounded-xl overflow-hidden">
                            <img class="group-hover:scale-105 transition-transform duration-500 ease-in-out rounded-xl w-full object-cover"
                                src="https://images.unsplash.com/photo-1606868306217-dbf5046868d2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3481&q=80"
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
            </div>
        </div>
    </div>
</x-app-layout>
