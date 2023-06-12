<x-app-layout>
    <x-slot name="user">
        <div class="hidden sm:flex sm:items-center sm:ml-6">
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <button
                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                        <div>{{ Auth::user()->name }}</div>

                        <div class="ml-1">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                      clip-rule="evenodd"/>
                            </svg>
                        </div>
                    </button>
                </x-slot>

                <x-slot name="content">
                    <x-dropdown-link :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-dropdown-link>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </x-slot>
            </x-dropdown>
        </div>
    </x-slot>
    <x-slot name="title">
        Create Item
    </x-slot>
    <x-slot name="subpage">
        Pages
    </x-slot>
    <x-slot name="sub_subpage">
        Create Item
    </x-slot>
    <main class="px-[255px] py-[80px] flex gap-x-[80px] bg-[#14141F]">
        <aside class="flex flex-col gap-y-5">
            <h2 class="text-white font-bold text-[20px]">Preview Item</h2>
            <x-card>

            </x-card>
        </aside>
        <form class="flex-1" action="">
            <div class="flex flex-col gap-y-6">
                <x-input-label for="img" class="flex flex-col gap-y-5 pointer-events-none" value="Upload File">
                    <x-slot name="input">
                        <div
                            class="px-[60px] flex justify-between items-center py-10 border-[1px] border-[#343444] rounded-[8px] text-[14px] text-[#8A8AA0] font-normal">
                            PNG, JPG, GIF, WEBP or MP4. Max 200mb.
                            <div
                                class="flex justify-center items-center py-4 border-[#FFFFFF] border-[1.5px] font-bold text-white text-[15px] rounded-[56px] px-[40px] cursor-pointer pointer-events-auto">
                                Upload Image
                            </div>
                        </div>
                        <x-text-input id="img" type="file" accept="image/png, image/jpg, image/gif, image/jpeg"
                                      class="hidden"/>
                    </x-slot>
                </x-input-label>
                <x-input-label class="flex flex-col gap-y-5" value="Select Method">
                    <x-primary-button type="button"
                                      class="bg-white gap-x-2.5 rounded-[8px] px-[111px] font-bold text-[14px] w-[325px]"
                                      color="#5142FC">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                            <path
                                d="M8.74736 16.3068C8.30569 16.3084 7.88069 16.1318 7.56903 15.8184L1.0382 9.28926C0.867923 9.11955 0.736523 8.9149 0.653074 8.68944C0.569625 8.46398 0.536116 8.2231 0.554862 7.98342L0.971528 2.51176C1.00031 2.11341 1.17197 1.73885 1.45491 1.45697C1.73786 1.1751 2.11307 1.00487 2.51153 0.977591L7.98319 0.560924C8.02653 0.551758 8.06903 0.551758 8.11236 0.551758C8.55403 0.551758 8.97653 0.726758 9.28736 1.04009L15.819 7.56842C15.9739 7.7232 16.0967 7.90696 16.1805 8.10921C16.2643 8.31147 16.3074 8.52825 16.3074 8.74717C16.3074 8.9661 16.2643 9.18288 16.1805 9.38514C16.0967 9.58739 15.9739 9.77115 15.819 9.92592L9.92569 15.8184C9.77132 15.9737 9.5877 16.0968 9.38544 16.1806C9.18318 16.2644 8.9663 16.3073 8.74736 16.3068ZM5.21153 3.54509C4.93745 3.54517 4.66763 3.61284 4.42595 3.7421C4.18427 3.87136 3.9782 4.05823 3.82599 4.28616C3.67378 4.51408 3.58013 4.77602 3.55333 5.04879C3.52653 5.32155 3.56741 5.59671 3.67235 5.8499C3.77729 6.10309 3.94305 6.32649 4.15494 6.50032C4.36684 6.67415 4.61834 6.79304 4.88716 6.84646C5.15598 6.89988 5.43382 6.88618 5.69608 6.80658C5.95834 6.72697 6.19692 6.58392 6.3907 6.39009L6.39653 6.38509L6.40236 6.37926L6.39569 6.38509C6.62735 6.1514 6.78464 5.85436 6.84775 5.53141C6.91086 5.20846 6.87697 4.87406 6.75033 4.57035C6.62369 4.26664 6.40999 4.00721 6.13615 3.82475C5.86231 3.6423 5.54058 3.54499 5.21153 3.54509Z"
                                fill="#5142FC"/>
                        </svg>
                        Fixed Price
                    </x-primary-button>
                </x-input-label>
                <x-input-label value="Price">
                    <x-text-input class="px-[20px] py-3 text-[14px]" placeholder="Enter price for one item (ETH)"/>
                </x-input-label>
                <x-input-label value="Title">
                    <x-text-input class="px-[20px] py-3 text-[14px]" placeholder="Item Name"/>
                </x-input-label>
                <x-input-label class="flex flex-col gap-y-5" value="Description">
                    <textarea
                        class="h-[80px] text-white resize-none border-[#343444] border-[1px] bg-transparent rounded-[8px] font-medium shadow-sm"
                        placeholder="e.g. “This is very limited item"></textarea>
                </x-input-label>
                <div class="flex gap-x-5 items-center">
                    <x-input-label class="flex flex-1 flex-col gap-y-5" value="Royalties">
                        <x-text-input placeholder="5%" type="text"/>
                    </x-input-label>
                    <x-input-label class="flex flex-1 flex-col gap-y-5" value="Size">
                        <x-text-input placeholder="e.g. “size”" type="text"/>
                    </x-input-label>
                    <x-input-label class="flex flex-1 flex-col gap-y-5" value="Collection">
                        <select
                            class="text-[#8A8AA0] border-[#343444] border-[1px] bg-transparent rounded-[8px] font-medium shadow-sm">
                            <option class="text-inherit bg-transparent" value="">Collection</option>
                        </select>
                    </x-input-label>
                </div>
            </div>
        </form>
    </main>
</x-app-layout>
