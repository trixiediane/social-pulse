<div>
    <div class="max-w-sm mx-auto mt-5">
        <!-- SearchBox -->
        <div class="relative">
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
    </div>
    <div
        class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6 px-4 md:px-6 lg:px-8 mx-auto my-10 max-w-screen-md md:max-w-screen-lg">
        <!-- Post Cards -->
        @foreach ($contents as $content)
            <div class="flex flex-col bg-white shadow-lg rounded-lg overflow-hidden w-full max-w-[500px] h-[400px]">
                <!-- Post Content -->
                <div class="flex flex-col h-full">
                    <div class="flex items-start p-4">
                        <img class="w-12 h-12 rounded-full object-cover shadow"
                            src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                            alt="avatar">
                        <div class="ml-4 flex-1">
                            <div class="flex items-center justify-between">
                                <h2 class="text-lg font-semibold text-gray-900">{{ $content->user->username }}</h2>
                                <small class="text-sm text-gray-700">{{ $content->updated_at->diffForHumans() }}</small>
                            </div>
                            <!-- Image Thumbnail -->
                            <a class="block relative z-0" href="{{ route('content.view', $content->slug) }}">
                                <div class="w-full h-60 mt-4 rounded-lg overflow-hidden">
                                    <img class="w-full h-full object-cover hover:scale-105 focus:scale-105 transition-transform duration-500 ease-in-out cursor-pointer"
                                        src="{{ Storage::url($content->photo) }}" alt="post-image">
                                </div>
                                <p class="mt-3 text-gray-700 text-sm">
                                    {{ $content->short_description }}
                                </p>
                            </a>
                            <div class="mt-4 flex flex-wrap items-center">
                                <div class="flex text-gray-700 text-sm mr-3">
                                    <svg fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-1" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    </svg>
                                    <span>12</span>
                                </div>
                                <div class="flex text-gray-700 text-sm mr-8">
                                    <svg fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-1" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                                    </svg>
                                    <span>8</span>
                                </div>
                                <div class="flex text-gray-700 text-sm mr-4">
                                    <svg fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-1" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                                    </svg>
                                    <span>share</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        <!-- Pagination Block -->
        <div class="col-span-1 lg:col-span-2 mt-8 flex justify-center">
            {{ $contents->links() }}
        </div>
    </div>



</div>
