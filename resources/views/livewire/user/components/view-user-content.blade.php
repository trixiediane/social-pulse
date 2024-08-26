<div>

    <!-- Pagination Block -->
    <div class="col-span-1 lg:col-span-2 mt-8 flex justify-end">
        {{ $contents->links() }}
    </div>
    <div
        class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6 px-4 md:px-6 lg:px-8 mx-auto max-w-screen-md md:max-w-screen-lg">
        <!-- Post Cards -->
        @foreach ($contents as $content)
            <div class="flex flex-col bg-white shadow-lg rounded-lg overflow-hidden w-full max-w-[500px] h-[400px]">
                <!-- Post Content -->
                <div class="flex flex-col h-full">
                    <div class="flex items-start p-4">
                        <div class="ml-4 flex-1">
                            <div class="flex items-center justify-end">
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
    </div>

</div>
