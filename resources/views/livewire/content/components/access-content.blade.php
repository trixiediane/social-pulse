<div>
    @hasrole('Admin')
        @if ($show)
            <div class="fixed top-[var(--navbar-height)] left-1/2 transform -translate-x-1/2 bg-teal-500 text-sm text-white rounded-xl shadow-lg p-4 z-50"
                role="alert" tabindex="-1">
                <div class="flex items-center">
                    <div class="flex-1">
                        <span class="font-semibold"> {{ $message }}</span>
                    </div>
                    <button type="button" wire:click="closeAlert"
                        class="inline-flex shrink-0 justify-center items-center rounded-lg text-white hover:text-gray-200 opacity-75 hover:opacity-100 focus:outline-none focus:opacity-100"
                        aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        @endif

        <div>
            <div class="flex flex-col">
                <div class="-m-1.5 overflow-x-auto">
                    <div class="p-1.5 min-w-full inline-block align-middle">
                        <div class="overflow-hidden">
                            <table class="min-w-full divide-y divide-gray-200">
                                <caption class="py-2 text-start text-sm text-gray-600">List of Pending Submissions</caption>
                                {{ $contents->links() }}
                                <thead>
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">User
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Title
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                            Submitted
                                            at</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">


                                    @foreach ($contents as $content)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                {{ $content->user->username }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                                {{ $content->title }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                                {{ $content->created_at }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                <button class="group block rounded-xl overflow-hidden focus:outline-none"
                                                    wire:click.prevent='openReviewModal({{ $content->id }}, true)'>View</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <livewire:content.components.review-content />
        </div>
    @endhasrole
</div>
