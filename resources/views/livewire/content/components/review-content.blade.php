<div>
    <!-- Review Modal -->
    <div class="@if (!$reviewModal) hidden @endif fixed inset-0 z-40" aria-labelledby="modal-title"
        role="dialog">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

        <div class="fixed inset-0 z-40 w-screen">
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
                        <button type="button" wire:click='openRevisionModal'
                            class="inline-flex justify-center rounded-md bg-yellow-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-yellow-500 sm:w-auto">Request
                            Revision</button>
                        <button type="button" wire:click='closeReviewModal'
                            class="inline-flex justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:w-auto">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Revision Modal -->
    <div class="relative z-50 @if (!$revisionModal) hidden @endif" aria-labelledby="modal-title"
        role="dialog" aria-modal="true">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

        <div class="fixed inset-0 z-50 w-screen overflow-y-auto">
            <div class="flex min-h-full items-center justify-center p-4 text-center sm:items-center sm:p-0">
                <div
                    class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                    <div class="flex flex-col h-full">
                        <!-- Modal Header -->
                        <div class="bg-white px-4 pt-5 sm:px-6 sm:pb-4">
                            <div class="flex items-center">
                                <div
                                    class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-blue-100 sm:mx-0 sm:h-10 sm:w-10">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-file-pen-line">
                                        <path
                                            d="m18 5-2.414-2.414A2 2 0 0 0 14.172 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2" />
                                        <path
                                            d="M21.378 12.626a1 1 0 0 0-3.004-3.004l-4.01 4.012a2 2 0 0 0-.506.854l-.837 2.87a.5.5 0 0 0 .62.62l2.87-.837a2 2 0 0 0 .854-.506z" />
                                        <path d="M8 18h1" />
                                    </svg>
                                </div>
                                <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                                    <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">Request
                                        Revision</h3>
                                    <div class="mt-2">
                                        <p class="text-sm text-gray-500">Please provide details for the requested
                                            revision.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <form wire:submit='submitRevision'>
                            <!-- Modal Body -->
                            <div class="flex-grow bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                                <div class="grid gap-y-4">
                                    <!-- Form Group for Title -->
                                    <div>
                                        <label for="title" class="block text-sm mb-2">Title</label>
                                        <div class="relative">
                                            <input type="text" id="title" name="title" wire:model="title"
                                                class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 hover:border-gray-400 disabled:opacity-50 disabled:pointer-events-none"
                                                aria-describedby="title-error">
                                            <div class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-file-pen-line">
                                                    <path
                                                        d="m18 5-2.414-2.414A2 2 0 0 0 14.172 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2" />
                                                    <path
                                                        d="M21.378 12.626a1 1 0 0 0-3.004-3.004l-4.01 4.012a2 2 0 0 0-.506.854l-.837 2.87a.5.5 0 0 0 .62.62l2.87-.837a2 2 0 0 0 .854-.506z" />
                                                    <path d="M8 18h1" />
                                                </svg>
                                            </div>
                                        </div>
                                        <p class="text-xs text-red-600 mt-2" id="title-error">
                                            @error('title')
                                                {{ $message }}
                                            @enderror
                                        </p>
                                    </div>
                                    <!-- End Form Group -->

                                    <!-- Form Group for Short Description -->
                                    <div>
                                        <label for="short_description" class="block text-sm mb-2">Short
                                            Description</label>
                                        <div class="relative">
                                            <input type="text" id="short_description" name="short_description"
                                                wire:model="short_description"
                                                class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 hover:border-gray-400 disabled:opacity-50 disabled:pointer-events-none"
                                                aria-describedby="short_description-error">
                                            <div class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-file-pen-line">
                                                    <path
                                                        d="m18 5-2.414-2.414A2 2 0 0 0 14.172 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2" />
                                                    <path
                                                        d="M21.378 12.626a1 1 0 0 0-3.004-3.004l-4.01 4.012a2 2 0 0 0-.506.854l-.837 2.87a.5.5 0 0 0 .62.62l2.87-.837a2 2 0 0 0 .854-.506z" />
                                                    <path d="M8 18h1" />
                                                </svg>
                                            </div>
                                        </div>
                                        <p class="text-xs text-red-600 mt-2" id="short_description-error">
                                            @error('short_description')
                                                {{ $message }}
                                            @enderror
                                        </p>
                                    </div>
                                    <!-- End Form Group -->

                                    <!-- Form Group for Content -->
                                    <div>
                                        <label for="body" class="block text-sm mb-2">Body</label>
                                        <div class="relative">
                                            <textarea id="body" name="body" wire:model="body"
                                                class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 hover:border-gray-400 disabled:opacity-50 disabled:pointer-events-none"
                                                aria-describedby="body-error" rows="4"></textarea>
                                            <div class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-file-pen-line">
                                                    <path
                                                        d="m18 5-2.414-2.414A2 2 0 0 0 14.172 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2" />
                                                    <path
                                                        d="M21.378 12.626a1 1 0 0 0-3.004-3.004l-4.01 4.012a2 2 0 0 0-.506.854l-.837 2.87a.5.5 0 0 0 .62.62l2.87-.837a2 2 0 0 0 .854-.506z" />
                                                    <path d="M8 18h1" />
                                                </svg>
                                            </div>
                                        </div>
                                        <p class="text-xs text-red-600 mt-2" id="content-error">
                                            @error('body')
                                                {{ $message }}
                                            @enderror
                                        </p>
                                    </div>
                                    <!-- End Form Group -->

                                    <!-- Form Group for Content -->
                                    <div>
                                        <label for="comments" class="block text-sm mb-2">Comments</label>
                                        <div class="relative">
                                            <textarea id="comments" name="comments" wire:model="comments"
                                                class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 hover:border-gray-400 disabled:opacity-50 disabled:pointer-events-none"
                                                aria-describedby="comments-error" rows="4"></textarea>
                                            <div class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-file-pen-line">
                                                    <path
                                                        d="m18 5-2.414-2.414A2 2 0 0 0 14.172 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2" />
                                                    <path
                                                        d="M21.378 12.626a1 1 0 0 0-3.004-3.004l-4.01 4.012a2 2 0 0 0-.506.854l-.837 2.87a.5.5 0 0 0 .62.62l2.87-.837a2 2 0 0 0 .854-.506z" />
                                                    <path d="M8 18h1" />
                                                </svg>
                                            </div>
                                        </div>
                                        <p class="text-xs text-red-600 mt-2" id="content-error">
                                            @error('comments')
                                                {{ $message }}
                                            @enderror
                                        </p>
                                    </div>
                                    <!-- End Form Group -->
                                </div>
                            </div>

                            <!-- Modal Footer -->
                            <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                                <button type="submit"
                                    class="inline-flex w-full justify-center rounded-md bg-yellow-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-yellow-500 sm:ml-3 sm:w-auto">Submit
                                    Revision</button>
                                <button type="button" wire:click='closeRevisionModal'
                                    class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
