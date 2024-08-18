<div>
    <!-- Modal -->
    <div class="@if (!$reviewModal) hidden @endif fixed inset-0 z-40" aria-labelledby="modal-title"
        role="dialog">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

        <div class="fixed inset-0 z-50 w-screen">
            <div class="flex min-h-full items-center justify-center p-4 text-center sm:items-center sm:p-0">
                <div
                    class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-3xl h-[90vh] max-h-screen flex flex-col">

                    <!-- Content area that grows to push footer down -->
                    <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4 flex-grow overflow-y-auto">
                        <div class="flex flex-col lg:flex-row gap-6">
                            <!-- Photo Section -->
                            <div class="flex-1 lg:w-2/3">
                                <img class="w-full h-auto object-cover rounded-xl" src="{{ $photo }}"
                                    alt="Blog Image">
                            </div>

                            <!-- Description Section -->
                            <div class="flex-1 lg:w-1/3 lg:pl-6">
                                <h3 class="text-lg font-semibold text-black mb-2">{{ $title }}</h3>
                                <p class="text-gray-500 mb-4">{{ $short_description }}</p>
                                <p class="text-gray-700 mb-4">{{ $body }}</p>
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
                    </div>

                    <!-- Footer sticks to the bottom -->
                    <div class="bg-gray-50 px-4 py-3 flex flex-wrap justify-end gap-2 sm:px-6 mt-auto">
                        <button type="button" wire:click='updateContentStatus("APPROVED")'
                            class="inline-flex justify-center rounded-md bg-purple-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-purple-500 sm:w-auto">Approve</button>
                        <button type="button" wire:click='updateContentStatus("DECLINED")'
                            class="inline-flex justify-center rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 sm:w-auto">Decline</button>
                        <button type="button"
                            class="inline-flex justify-center rounded-md bg-yellow-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-yellow-500 sm:w-auto">Request
                            Revision</button>
                        <button type="button" wire:click='closeReviewModal'
                            class="inline-flex justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:w-auto">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
