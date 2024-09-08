<div class="flex flex-col">
    <div class="-m-1.5 overflow-x-auto">
        <div class="p-1.5 min-w-full inline-block align-middle">
            <div class="border rounded-lg divide-y divide-gray-200">

                <div class="flex flex-wrap md:flex-nowrap">
                    <div class="w-full md:w-1/2 p-2">
                        <div class="border rounded-lg divide-y divide-gray-200">
                            <div class="py-3 px-4">
                                <div class="relative max-w-xs">
                                    <label class="sr-only">Search Followers</label>
                                    <input type="text" name="followers-search" id="followers-search"
                                        wire:model.live="searchFollower" wire:keydown.enter="updatedSearch"
                                        class="py-2 px-3 ps-9 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                        placeholder="Search followers">
                                    <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-3">
                                        <svg class="size-4 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <circle cx="11" cy="11" r="8"></circle>
                                            <path d="m21 21-4.3-4.3"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div class="overflow-x-auto">
                                @if ($followers->isEmpty())
                                    <p class="px-6 py-4 text-sm text-gray-600">No users found.</p>
                                @else
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th scope="col"
                                                    class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                                    Username</th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="divide-y divide-gray-200">
                                            @foreach ($followers as $follower)
                                                <tr class="flex flex-wrap md:flex-nowrap">
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                        {{ $follower->username }}</td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                @endif
                            </div>

                            <div class="py-1 px-4">
                                {{ $followers->links(data: ['scrollTo' => false]) }}
                            </div>
                        </div>
                    </div>

                    <!-- Following Table -->
                    <div class="w-full md:w-1/2 p-2">
                        <div class="border rounded-lg divide-y divide-gray-200">
                            <div class="py-3 px-4">
                                <div class="relative max-w-xs">
                                    <label class="sr-only">Search Following</label>
                                    <input type="text" name="following-search" id="following-search"
                                        wire:model.live="searchFollowing" wire:keydown.enter="updatedSearch"
                                        class="py-2 px-3 ps-9 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                        placeholder="Search following">
                                    <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-3">
                                        <svg class="size-4 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <circle cx="11" cy="11" r="8"></circle>
                                            <path d="m21 21-4.3-4.3"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div class="overflow-x-auto">
                                @if ($following->isEmpty())
                                    <p class="px-6 py-4 text-sm text-gray-600">No users found.</p>
                                @else
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th scope="col"
                                                    class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                                    Username</th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="divide-y divide-gray-200">
                                            @foreach ($following as $followedUser)
                                                <tr class="flex flex-wrap md:flex-nowrap">
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                        {{ $followedUser->username }}</td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                @endif
                            </div>

                            <div class="py-1 px-4">
                                {{ $following->links(data: ['scrollTo' => false]) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
