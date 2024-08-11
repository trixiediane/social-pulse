<!-- Card Section -->
<div class="max-w-4xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <form wire:submit="update">
        <!-- Card -->
        <div class="bg-white rounded-xl shadow">
            <div
                class="relative h-40 rounded-t-xl bg-[url('https://preline.co/assets/svg/examples/abstract-bg-1.svg')] bg-no-repeat bg-cover bg-center">
            </div>

            <div class="pt-0 p-4 sm:pt-0 sm:p-7">
                <!-- Grid -->
                <div class="space-y-4 sm:space-y-6">
                    <div>
                        <label class="sr-only">
                            Profile photo
                        </label>

                        <div class="flex flex-col sm:flex-row sm:items-center sm:gap-x-5">
                            <img class="-mt-8 relative z-10 inline-block size-24 mx-auto sm:mx-0 rounded-full ring-4 ring-white"
                                src="https://preline.co/assets/img/160x160/img1.jpg" alt="Avatar">

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

                    <div class="space-y-2">
                        <label for="profile_picture" class="inline-block text-sm font-medium text-gray-800 mt-2.5">
                            Profile Picture
                        </label>

                        <label for="profile_picture"
                            class="group p-4 sm:p-7 block cursor-pointer text-center border-2 border-dashed border-gray-200 rounded-lg focus-within:outline-none focus-within:ring-2 focus-within:ring-blue-500 focus-within:ring-offset-2">
                            <input id="profile_picture" wire:model="profile_picture" type="file" class="sr-only">
                            <svg class="size-10 mx-auto text-gray-400" xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M7.646 5.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708l2-2z" />
                                <path
                                    d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z" />
                            </svg>
                            <span class="mt-2 block text-sm text-gray-800">
                                Browse your files
                            </span>
                        </label>
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
