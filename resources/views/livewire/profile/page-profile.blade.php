<!-- Card Section -->
<div class="max-w-4xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <form wire:submit="update">
        <!-- Card -->
        <div class="bg-white rounded-xl shadow">
            <img src="{{ $user->profile_header ? Storage::url($user->profile_header) : 'https://preline.co/assets/svg/examples/abstract-bg-1.svg' }}"
                alt="Profile Header" class="w-full h-80 object-cover object-center" />

            <div class="pt-0 p-4 sm:pt-0 sm:p-7">
                <!-- Grid -->
                <div class="space-y-4 sm:space-y-6">
                    <div>
                        <label class="sr-only">
                            Profile photo
                        </label>

                        <div class="flex flex-col sm:flex-row sm:items-center sm:gap-x-5">
                            <img class="-mt-8 relative z-10 inline-block size-24 mx-auto sm:mx-0 rounded-full ring-4 ring-white"
                                src="{{ $user->profile_picture ? Storage::url($user->profile_picture) : 'https://preline.co/assets/img/160x160/img1.jpg' }}"
                                alt="Avatar">

                            <div class="mt-4 sm:mt-auto sm:mb-1.5 flex justify-center sm:justify-start gap-2">
                                {{-- <button type="button"
                                    class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none">
                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
                                        <polyline points="17 8 12 3 7 8" />
                                        <line x1="12" x2="12" y1="3" y2="15" />
                                    </svg>
                                    Upload profile picture
                                </button>
                                <button type="button"
                                    class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-red-500 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none">
                                    Delete
                                </button> --}}
                            </div>
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label for="username" class="inline-block text-sm font-medium text-gray-800 mt-2.5">
                            Username
                        </label>

                        <input id="username" type="text" wire:model="username"
                            class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                            placeholder="Enter username">
                    </div>

                    <div class="space-y-2">
                        <label for="email" class="inline-block text-sm font-medium text-gray-800 mt-2.5">
                            Email
                        </label>

                        <input id="email" type="email" wire:model="email"
                            class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                            placeholder="user@example.com">
                        @error('email')
                            <span class="text-red-600 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="space-y-2">
                        <label for="profile_picture" class="inline-block text-sm font-medium text-gray-800 mt-2.5">
                            Profile Picture
                        </label>

                        <input type="file" id="profile_picture" wire:model="profile_picture"
                            class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none
                                      file:bg-gray-50 file:border-0
                                      file:me-4
                                      file:py-3 file:px-4
                                     ">
                    </div>

                    <div class="space-y-2">
                        <label for="profile_header" class="inline-block text-sm font-medium text-gray-800 mt-2.5">
                            Profile Header
                        </label>

                        <input type="file" id="profile_header" wire:model="profile_header"
                            class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none
                                      file:bg-gray-50 file:border-0
                                      file:me-4
                                      file:py-3 file:px-4
                                     ">
                    </div>
                </div>
                <!-- End Grid -->
            </div>
        </div>
        <!-- End Card -->

        <div class="mt-5 flex gap-x-3">
            <button type="submit"
                class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm disabled:opacity-50 disabled:pointer-events-none">
                Update profile
            </button>

            {{-- <button type="button"
                class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md font-semibold bg-white text-gray-900 shadow-sm hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm">
                Cancel
            </button> --}}
        </div>
    </form>

</div>
<!-- End Card Section -->
