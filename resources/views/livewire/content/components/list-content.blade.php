<div>
    <!-- Table Section -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 -mt-6">
        <!-- Card -->
        <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">
                        <!-- Header -->
                        <div
                            class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200">
                            <div>
                                <h2 class="text-xl font-semibold text-gray-800">
                                    <!-- Pagination -->
                                    <div class="mt-4">
                                        {{ $contents->links() }}
                                    </div>
                                </h2>
                            </div>

                            <div>
                                <div class="inline-flex gap-x-2">
                                    <!-- Filters -->
                                    <div class="mb-4">
                                        <select wire:model.change="status"
                                            class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                                            <option value="all">All</option>
                                            <option value="PENDING">Pending</option>
                                            <option value="RESUBMIT">Resubmit</option>
                                            <option value="APPROVED">Approved</option>
                                            <option value="DECLINED">Declined</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Header -->

                        <!-- Table -->
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    @foreach (['title' => 'Title', 'short_description' => 'Short Description', 'username' => 'Username', 'status' => 'Status'] as $column => $label)
                                        <th scope="col" class="px-6 py-3 text-start cursor-pointer">
                                            <a wire:click.prevent="sortBy('{{ $column }}')"
                                                class="group inline-flex items-center gap-x-2 text-xs font-semibold uppercase text-gray-800 hover:text-gray-500 focus:outline-none focus:text-gray-500">
                                                {{ $label }}
                                                <svg class="shrink-0 size-3.5 text-gray-800"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="m7 15 5 5 5-5"
                                                        :class="{
                                                            'rotate-180': sortColumn === '{{ $column }}' &&
                                                                sortDirection === 'asc'
                                                        }" />
                                                    <path d="m7 9 5-5 5 5"
                                                        :class="{
                                                            'rotate-180': sortColumn === '{{ $column }}' &&
                                                                sortDirection === 'desc'
                                                        }" />
                                                </svg>
                                            </a>
                                        </th>
                                    @endforeach
                                    <th scope="col" class="px-6 py-3 text-end"></th>
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-gray-200">
                                @foreach ($contents as $content)
                                    <tr class="bg-white hover:bg-gray-50">
                                        <td class="size-px whitespace-nowrap">
                                            <a class="block relative z-10"
                                                href="{{ route('content.view', $content->slug) }}">
                                                <div class="px-6 py-2">
                                                    <div
                                                        class="block text-sm text-blue-600 decoration-2 hover:underline">
                                                        {{ $content->title }}</div>
                                                </div>
                                            </a>
                                        </td>
                                        <td class="h-px w-72 min-w-72">
                                            <a class="block relative z-10" href="#">
                                                <div class="px-6 py-2">
                                                    <p class="text-sm text-gray-500">{{ $content->short_description }}
                                                    </p>
                                                </div>
                                            </a>
                                        </td>
                                        <td class="size-px whitespace-nowrap">
                                            <a class="block relative z-10" href="#">
                                                <div class="px-6 py-2">
                                                    <span
                                                        class="inline-flex items-center gap-1.5 py-1 px-2 rounded-lg text-xs font-medium bg-gray-100 text-gray-800">
                                                        {{ $content->user->username }}
                                                    </span>
                                                </div>
                                            </a>
                                        </td>
                                        <td class="size-px whitespace-nowrap">
                                            <a class="block relative z-10" href="#">
                                                <div class="px-6 py-2">
                                                    <span
                                                        class="inline-flex items-center gap-1.5 py-1 px-2 rounded-lg text-xs font-medium bg-gray-100 text-gray-800">
                                                        {{ $content->status }}
                                                    </span>
                                                </div>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Table -->

                        <!-- Footer -->
                        {{-- <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200">
                            <div>
                                <p class="text-sm text-gray-600">
                                </p>
                            </div>
                        </div> --}}
                        <!-- End Footer -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Card -->
    </div>
    <!-- End Table Section -->
</div>
