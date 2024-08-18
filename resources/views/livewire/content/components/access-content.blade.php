<div>
    @hasrole('Admin')
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
                                                    wire:click.prevent='openEditModal({{ $content->id }}, true)'>View</button>
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
