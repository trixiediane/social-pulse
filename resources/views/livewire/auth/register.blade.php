<div class="flex justify-center items-center min-h-screen">
    <div class="mt-7 bg-white border border-gray-300 rounded-xl shadow-sm w-full max-w-md mx-4">
        <div class="p-4 sm:p-7">
            <div class="text-center">
                <h1 class="block text-2xl font-bold text-gray-800">Sign up</h1>
                <p class="mt-2 text-sm text-gray-600">
                    Join us!
                </p>
            </div>

            <div class="mt-5">
                <!-- Form -->
                <form wire:submit="register">
                    <div class="grid gap-y-4">
                        <div>
                            <label for="email" class="block text-sm mb-2">Email</label>
                            <div class="relative">
                                <input type="email" id="email" name="email" wire:model="email"
                                    class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 hover:border-gray-400 disabled:opacity-50 disabled:pointer-events-none"
                                    aria-describedby="email-error" placeholder="johndoe@gmail.com">
                                <div class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                                    <svg class="size-5 text-red-500" width="16" height="16" fill="currentColor"
                                        viewBox="0 0 16 16" aria-hidden="true">
                                        <path
                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                    </svg>
                                </div>
                            </div>
                            <p class="text-xs text-red-600 mt-2" id="username-error">
                                @error('username')
                                    {{ $message }}
                                @enderror
                            </p>
                        </div>
                        <!-- Form Group -->
                        <div>
                            <label for="username" class="block text-sm mb-2">Username</label>
                            <div class="relative">
                                <input type="text" id="username" name="username" wire:model="username"
                                    class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 hover:border-gray-400 disabled:opacity-50 disabled:pointer-events-none"
                                    aria-describedby="username-error" placeholder="johndoe">
                                <div class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                                    <svg class="size-5 text-red-500" width="16" height="16" fill="currentColor"
                                        viewBox="0 0 16 16" aria-hidden="true">
                                        <path
                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                    </svg>
                                </div>
                            </div>
                            <p class="text-xs text-red-600 mt-2" id="username-error">
                                @error('username')
                                    {{ $message }}
                                @enderror
                            </p>
                        </div>
                        <!-- End Form Group -->

                        <!-- Form Group -->
                        <div>
                            <div class="flex justify-between items-center">
                                <label for="password" class="block text-sm mb-2">Password</label>
                            </div>
                            <div class="relative">
                                <input type="password" id="password" name="password" wire:model="password"
                                    class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 hover:border-gray-400 disabled:opacity-50 disabled:pointer-events-none"
                                    aria-describedby="password-error" placeholder="********">
                                <div class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                                    <svg class="size-5 text-red-500" width="16" height="16" fill="currentColor"
                                        viewBox="0 0 16 16" aria-hidden="true">
                                        <path
                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                    </svg>
                                </div>
                            </div>
                            <p class="text-xs text-red-600 mt-2" id="password-error">
                                @error('password')
                                    {{ $message }}
                                @enderror
                            </p>
                        </div>

                        <div>
                            <div class="flex justify-between items-center">
                                <label for="password_confirmation" class="block text-sm mb-2">Confirm Password</label>
                            </div>
                            <div class="relative">
                                <input type="password" id="password_confirmation" name="password_confirmation"
                                    wire:model="password_confirmation"
                                    class="py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 hover:border-gray-400 disabled:opacity-50 disabled:pointer-events-none"
                                    aria-describedby="password_confirmation-error" placeholder="********">
                                <div class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                                    <svg class="size-5 text-red-500" width="16" height="16" fill="currentColor"
                                        viewBox="0 0 16 16" aria-hidden="true">
                                        <path
                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                    </svg>
                                </div>
                            </div>
                            <p class="text-xs text-red-600 mt-2" id="password_confirmation-error">
                                @error('password_confirmation')
                                    {{ $message }}
                                @enderror
                                @if (session('status'))
                                    <span class="font-medium">
                                        {{ session('status') }}
                                    </span>
                                @endif
                            </p>
                        </div>
                        <!-- End Form Group -->
                        <button type="submit"
                            class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">Sign
                            up</button>
                    </div>
                </form>
                <!-- End Form -->
            </div>
        </div>
    </div>
</div>
