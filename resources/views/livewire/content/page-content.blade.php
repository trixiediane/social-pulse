<div class="p-6">
    <div class="border-b border-gray-200">
        <nav class="flex gap-x-1" aria-label="Tabs" role="tablist" aria-orientation="horizontal">
            <button type="button"
                class="hs-tab-active:bg-white hs-tab-active:border-b-transparent hs-tab-active:text-blue-600 -mb-px py-3 px-4 inline-flex items-center gap-x-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-t-lg hover:text-gray-700 focus:outline-none focus:text-gray-700 disabled:opacity-50 disabled:pointer-events-none active"
                id="card-type-tab-item-1" aria-selected="true" data-hs-tab="#card-type-tab-preview"
                aria-controls="card-type-tab-preview" role="tab">
                @hasrole('Admin')
                    Pending Submissions
                @endhasrole
                @hasrole('User')
                    Yours
                @endhasrole
            </button>
            <button type="button"
                class="hs-tab-active:bg-white hs-tab-active:border-b-transparent hs-tab-active:text-blue-600 -mb-px py-3 px-4 inline-flex items-center gap-x-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-t-lg hover:text-gray-700 focus:outline-none focus:text-gray-700 disabled:opacity-50 disabled:pointer-events-none"
                id="card-type-tab-item-2" aria-selected="false" data-hs-tab="#card-type-tab-2"
                aria-controls="card-type-tab-2" role="tab">
                @hasrole('Admin')
                    All
                @endhasrole
                @hasrole('User')
                    Create
                @endhasrole
            </button>
            <button type="button"
                class="hs-tab-active:bg-white hs-tab-active:border-b-transparent hs-tab-active:text-blue-600 -mb-px py-3 px-4 inline-flex items-center gap-x-2 bg-gray-50 text-sm font-medium text-center border text-gray-500 rounded-t-lg hover:text-gray-700 focus:outline-none focus:text-gray-700 disabled:opacity-50 disabled:pointer-events-none"
                id="card-type-tab-item-3" aria-selected="false" data-hs-tab="#card-type-tab-3"
                aria-controls="card-type-tab-3" role="tab">
                Saved
            </button>
        </nav>
    </div>

    <div class="mt-3">
        <div id="card-type-tab-preview" role="tabpanel" aria-labelledby="card-type-tab-item-1">
            @hasrole('Admin')
                <livewire:content.components.access-content />
            @endhasrole
            @hasrole('User')
                <livewire:content.components.show-content />
            @endhasrole
        </div>
        <div id="card-type-tab-2" class="hidden" role="tabpanel" aria-labelledby="card-type-tab-item-2">
            @hasrole('Admin')
                <livewire:content.components.list-content />
            @endhasrole
            @hasrole('User')
                <livewire:content.components.create-content />
            @endhasrole
        </div>
        <div id="card-type-tab-3" class="hidden" role="tabpanel" aria-labelledby="card-type-tab-item-3">
            <p class="text-gray-500">
                This is the <em class="font-semibold text-gray-800">third</em> item's tab body.
            </p>
        </div>
    </div>
</div>
