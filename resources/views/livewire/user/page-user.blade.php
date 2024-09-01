<div class="p-10">
    <nav class="relative z-0 flex border rounded-xl overflow-hidden" aria-label="Tabs" role="tablist"
        aria-orientation="horizontal">
        <button type="button"
            class="hs-tab-active:border-b-blue-600 hs-tab-active:text-gray-900 relative min-w-0 flex-1 bg-white first:border-s-0 border-s border-b-2 py-4 px-4 text-gray-500 hover:text-gray-700 text-sm font-medium text-center overflow-hidden hover:bg-gray-50 focus:z-10 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none active"
            id="bar-with-underline-item-1" aria-selected="true" data-hs-tab="#bar-with-underline-1"
            aria-controls="bar-with-underline-1" role="tab">
            Content
        </button>
        <button type="button"
            class="hs-tab-active:border-b-blue-600 hs-tab-active:text-gray-900 relative min-w-0 flex-1 bg-white first:border-s-0 border-s border-b-2 py-4 px-4 text-gray-500 hover:text-gray-700 text-sm font-medium text-center overflow-hidden hover:bg-gray-50 focus:z-10 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none"
            id="bar-with-underline-item-2" aria-selected="false" data-hs-tab="#bar-with-underline-2"
            aria-controls="bar-with-underline-2" role="tab">
            User Profile
        </button>
        <button type="button"
            class="hs-tab-active:border-b-blue-600 hs-tab-active:text-gray-900 relative min-w-0 flex-1 bg-white first:border-s-0 border-s border-b-2 py-4 px-4 text-gray-500 hover:text-gray-700 text-sm font-medium text-center overflow-hidden hover:bg-gray-50 focus:z-10 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none"
            id="bar-with-underline-item-3" aria-selected="false" data-hs-tab="#bar-with-underline-3"
            aria-controls="bar-with-underline-3" role="tab">
            Followers
        </button>
    </nav>

    <div class="mt-3">
        <div id="bar-with-underline-1" role="tabpanel" aria-labelledby="bar-with-underline-item-1">
            <livewire:user.components.view-user-content :userId="$user->id" />
        </div>
        <div id="bar-with-underline-2" class="hidden" role="tabpanel" aria-labelledby="bar-with-underline-item-2">
            <livewire:user.components.view-user :userId="$user->id" />
        </div>
        <div id="bar-with-underline-3" class="hidden" role="tabpanel" aria-labelledby="bar-with-underline-item-3">
            <livewire:user.components.user-followers :userId="$user->id" />
        </div>
    </div>
</div>
