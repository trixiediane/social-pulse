<!-- Card Section -->
<div class="max-w-4xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
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
                        <h1 class="text-lg font-medium text-gray-800 flex items-center justify-center">
                            {{ $user->username }}
                        </h1>
                        @hasrole('User')
                            <div class="sm:mt-auto sm:mb-1.5 flex justify-end sm:justify-start gap-2 mt-2 md:mt-2 md:-ml-2">
                                @if (!$isOwnProfile)
                                    <button wire:click="toggleFollow"
                                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50">
                                        {{ $isFollowing ? 'Unfollow' : 'Follow' }}
                                    </button>
                                @endif
                            </div>
                        @endhasrole
                    </div>
                </div>

                <!-- About -->
                <div class="mt-8 px-4">
                    <p class="text-sm text-gray-600 indent-6">
                        {{ $user->bio }}
                    </p>
                    {{-- <ul class="mt-5 flex flex-col gap-y-3">
                        <li class="flex items-center gap-x-2.5">
                            <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <rect width="20" height="16" x="2" y="4" rx="2" />
                                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7" />
                            </svg>
                            <a class="text-[13px] text-gray-500 underline hover:text-gray-800 hover:decoration-2 focus:outline-none focus:decoration-2"
                                href="#">
                                elianagarcia997@about.me
                            </a>
                        </li>

                        <li class="flex items-center gap-x-2.5">
                            <svg class="shrink-0 size-3.5" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.1881 10.1624L22.7504 0H20.7214L13.2868 8.82385L7.34878 0H0.5L9.47944 13.3432L0.5 24H2.5291L10.3802 14.6817L16.6512 24H23.5L14.1881 10.1624ZM11.409 13.4608L3.26021 1.55962H6.37679L20.7224 22.5113H17.6058L11.409 13.4613V13.4608Z"
                                    fill="currentColor" />
                            </svg>
                            <a class="text-[13px] text-gray-500 underline hover:text-gray-800 hover:decoration-2 focus:outline-none focus:decoration-2"
                                href="#">
                                @elianagarcia997
                            </a>
                        </li>

                        <li class="flex items-center gap-x-2.5">
                            <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10" />
                                <path d="M19.13 5.09C15.22 9.14 10 10.44 2.25 10.94" />
                                <path d="M21.75 12.84c-6.62-1.41-12.14 1-16.38 6.32" />
                                <path d="M8.56 2.75c4.37 6 6 9.42 8 17.72" />
                            </svg>
                            <a class="text-[13px] text-gray-500 underline hover:text-gray-800 hover:decoration-2 focus:outline-none focus:decoration-2"
                                href="#">
                                @elianagarcia997
                            </a>
                        </li>
                    </ul> --}}
                </div>
                <!-- End About -->
            </div>
            <!-- End Grid -->
        </div>
    </div>
    <!-- End Card -->
</div>
<!-- End Card Section -->
