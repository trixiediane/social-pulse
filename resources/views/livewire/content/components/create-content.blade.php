<div>
    <!-- Toast Notifications -->
    <div class="fixed top-16 inset-x-0 flex items-center justify-center space-y-3 z-50 pointer-events-none">
        <!-- Success Toast -->
        @if (session()->has('message'))
            <div class="max-w-xs bg-teal-500 text-sm text-white rounded-xl shadow-lg" role="alert" tabindex="-1">
                <div class="flex p-4">
                    {{ session('message') }}

                    <div class="ms-auto">
                        <button type="button"
                            class="inline-flex shrink-0 justify-center items-center size-5 rounded-lg text-white hover:text-white opacity-50 hover:opacity-100 focus:outline-none focus:opacity-100"
                            aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 6 6 18"></path>
                                <path d="m6 6 12 12"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        @endif

        <!-- Error Toast -->
        @if (session()->has('error'))
            <div class="max-w-xs bg-red-500 text-sm text-white rounded-xl shadow-lg" role="alert" tabindex="-1">
                <div class="flex p-4">
                    {{ session('error') }}

                    <div class="ms-auto">
                        <button type="button"
                            class="inline-flex shrink-0 justify-center items-center size-5 rounded-lg text-white hover:text-white opacity-50 hover:opacity-100 focus:outline-none focus:opacity-100"
                            aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 6 6 18"></path>
                                <path d="m6 6 12 12"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        @endif
    </div>

    <div class="max-w-4xl px-4 py-10 sm:px-6 lg:px-8 mx-auto">
        <!-- Card -->
        <div class="bg-white rounded-xl shadow-lg p-4 sm:p-7">
            <div class="mb-8">
                <h2 class="text-xl font-bold text-gray-800">Create Content</h2>
                <p class="text-sm text-gray-600">Add new content for your platform.</p>
            </div>

            <form wire:submit.prevent="createContent">
                <!-- Grid -->
                <div class="grid sm:grid-cols-12 gap-2 sm:gap-6">
                    <!-- Photo -->
                    <div class="sm:col-span-3">
                        <label class="inline-block text-sm text-gray-800 mt-2.5">Content Photo</label>
                    </div>
                    <div class="sm:col-span-9">
                        <div class="flex items-center gap-5">
                            <div class="flex gap-x-2">
                                <div>
                                    <input type="file" wire:model="photo"
                                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-300 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50">
                                    @error('photo')
                                        <span class="text-red-600 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Title -->
                    <div class="sm:col-span-3">
                        <label for="title" class="inline-block text-sm text-gray-800 mt-2.5">Title</label>
                    </div>
                    <div class="sm:col-span-9">
                        <input id="title" type="text" wire:model="title"
                            class="py-2 px-3 block w-full border border-gray-300 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500">
                        @error('title')
                            <span class="text-red-600 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Short Description -->
                    <div class="sm:col-span-3">
                        <label for="short_description" class="inline-block text-sm text-gray-800 mt-2.5">Short
                            Description</label>
                    </div>
                    <div class="sm:col-span-9">
                        <textarea id="short_description" wire:model="short_description"
                            class="py-2 px-3 block w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                            rows="3" placeholder="Enter a brief description..."></textarea>
                        @error('short_description')
                            <span class="text-red-600 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Body -->
                    <div class="sm:col-span-3">
                        <label for="body" class="inline-block text-sm text-gray-800 mt-2.5">Body</label>
                    </div>
                    <div class="sm:col-span-9">
                        <textarea id="body" wire:model="body"
                            class="py-2 px-3 block w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                            rows="6" placeholder="Enter the main content..."></textarea>
                        @error('body')
                            <span class="text-red-600 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <!-- End Grid -->

                <div class="mt-5 flex justify-end gap-x-2">
                    <button type="button"
                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-300 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50">
                        Cancel
                    </button>
                    <button type="submit"
                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700">
                        Save Content
                    </button>
                </div>
            </form>
        </div>
        <!-- End Card -->
    </div>


</div>
