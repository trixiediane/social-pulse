<div class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-16">
    <div class="relative mb-4">
        <!-- Input field -->
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none pl-3">
                <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="11" cy="11" r="8"></circle>
                    <path d="m21 21-4.3-4.3"></path>
                </svg>
            </div>
            <input wire:model.live="search"
                class="py-3 pl-10 pr-4 block w-full border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500"
                type="text" placeholder="Search...">
        </div>

        <!-- Suggestion Dropdown -->
        @if ($search)
            <div class="absolute z-50 w-full bg-white border border-gray-200 rounded-lg mt-1">
                <div class="max-h-72 rounded-b-lg overflow-hidden overflow-y-auto">
                    @forelse($users as $user)
                        <a href="{{ route('user.view', $user->username) }}">
                            <div class="cursor-pointer py-2 px-4 hover:bg-gray-100 flex items-center">
                                <div class="flex items-center justify-center w-8 h-8 bg-gray-200 rounded-full mr-3">
                                    <img src="{{ $user->profile_picture ? Storage::url($user->profile_picture) : 'https://preline.co/assets/img/160x160/img1.jpg' }}"
                                        alt="Suggestion Image" class="w-6 h-6 object-cover rounded-full">
                                </div>
                                <div class="text-sm text-gray-800">{{ $user->username }}</div>
                            </div>
                        </a>
                    @empty
                        <div class="py-2 px-4 text-center text-gray-500">No results found.</div>
                    @endforelse
                </div>
            </div>
        @endif
        <!-- End Suggestion Dropdown -->
    </div>
    <!-- End SearchBox -->

    <div class="border-b mb-5 flex justify-end text-sm">
        <!-- Pagination Block -->
        <div class="col-span-1 lg:col-span-2 flex justify-center">
            {{ $contents->links(data: ['scrollTo' => false]) }}
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">
        <!-- CARD  -->
        @foreach ($contents as $content)
            <div class="rounded overflow-hidden shadow-lg flex flex-col">
                <div class="flex items-start mb-2">
                    <a href="{{ route('user.view', $content->user->username) }}">
                        <img class="w-8 h-8 rounded-full object-cover shadow"
                            src="{{ $content->user->profile_picture ? Storage::url($content->user->profile_picture) : 'https://preline.co/assets/img/160x160/img1.jpg' }}"
                            alt="avatar">
                    </a>
                    <div class="ml-4 flex-1">
                        <div class="flex items-center justify-between">
                            <a href="{{ route('user.view', $content->user->username) }}">
                                <h2 class="text-md font-semibold text-gray-900">{{ $content->user->username }}
                                </h2>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <a class="block relative z-0" href="{{ route('content.view', $content->slug) }}">
                        <div class="w-full h-64 overflow-hidden"> <!-- Restrict height to 16rem -->
                            <img class="w-full h-full object-cover" src="{{ Storage::url($content->photo) }}" alt="Sunset in the mountains">
                            <div class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25"></div>
                        </div>
                    </a>

                    {{-- <a href="#!">
                        <div
                            class="text-xs absolute top-0 right-0 bg-indigo-600 px-4 py-2 text-white mt-3 mr-3 hover:bg-white hover:text-indigo-600 transition duration-500 ease-in-out">
                            Cooking
                        </div>
                    </a> --}}
                </div>
                <div class="px-6 py-4 mb-auto">
                    <a href="#"
                        class="font-medium text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out inline-block mb-2">{{ $content->title }}</a>
                    <p class="text-gray-500 text-sm">
                        {{ $content->short_description }}
                    </p>
                </div>
                <div class="px-6 py-3 flex flex-row items-center justify-between bg-gray-100">
                    <span href="#"
                        class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center">
                        <svg height="13px" width="13px" version="1.1" id="Layer_1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                            y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                            xml:space="preserve">
                            <g>
                                <g>
                                    <path
                                        d="M256,0C114.837,0,0,114.837,0,256s114.837,256,256,256s256-114.837,256-256S397.163,0,256,0z M277.333,256 c0,11.797-9.536,21.333-21.333,21.333h-85.333c-11.797,0-21.333-9.536-21.333-21.333s9.536-21.333,21.333-21.333h64v-128 c0-11.797,9.536-21.333,21.333-21.333s21.333,9.536,21.333,21.333V256z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                        <span class="ml-1">{{ $content->updated_at->diffForHumans() }}</span>
                    </span>

                    <span href="#"
                        class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center">
                        <svg class="h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                            </path>
                        </svg>
                        <span class="ml-1">39 Comments</span>
                    </span>
                </div>
            </div>
        @endforeach

    </div>
</div>
