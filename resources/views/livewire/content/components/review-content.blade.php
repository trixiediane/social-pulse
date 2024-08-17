<div class="@if (!$editModal) hidden @endif fixed inset-0 z-40" aria-labelledby="modal-title"
    role="dialog">
    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

    <div class="fixed inset-0 z-50 w-screen overflow-y-auto">
        <div class="flex min-h-full items-center justify-center p-4 text-center sm:items-center sm:p-0">
            <div
                class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-3xl">
                <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                            <!-- Modal Content Grid -->
                            <div class="flex flex-col lg:flex-row gap-6">
                                <!-- Photo Section -->
                                <div class="flex-1 lg:w-2/3">
                                    <img class="w-full h-auto object-cover rounded-xl" src="{{ $photo }}"
                                        alt="Blog Image">
                                </div>

                                <!-- Description Section -->
                                <div class="flex-1 lg:w-1/3 lg:pl-6">
                                    <h3 class="text-lg font-semibold text-black mb-2">
                                        {{ $title }}
                                    </h3>
                                    <p class="text-gray-500 mb-4">
                                        {{ $short_description }}
                                    </p>
                                    <p class="text-gray-700 mb-4">
                                        {{ $body }}
                                    </p>
                                    <div class="flex flex-wrap gap-2">
                                        <span
                                            class="py-1.5 px-3 bg-white text-gray-600 border border-gray-200 text-xs sm:text-sm rounded-xl">
                                            Brand Strategy
                                        </span>
                                        <span
                                            class="py-1.5 px-3 bg-white text-gray-600 border border-gray-200 text-xs sm:text-sm rounded-xl">
                                            Visual Identity
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Modal Content Grid -->
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                    <button type="button"
                        class="inline-flex w-full justify-center rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 sm:ml-3 sm:w-auto">Deactivate</button>
                    <button type="button"
                        class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>
