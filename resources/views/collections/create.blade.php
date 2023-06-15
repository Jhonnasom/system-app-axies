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
        Create Collection
    </x-slot>
    <x-slot name="subpage">
        Pages
    </x-slot>
    <x-slot name="sub_subpage">
        Create Collection
    </x-slot>
    <main class="px-[255px] py-[80px] flex gap-x-[80px] bg-[#14141F]">
        @if($message=session('message'))
            <p>{{$message}}</p>
        @endif
        <form class="flex-1" method="post" action="{{ action([\App\Http\Controllers\CollectionController::class, 'store']) }}"  enctype="multipart/form-data">
            @csrf
            <div class="flex flex-col gap-y-6">

                <x-input-label value="Collection Name">
                    <x-text-input name="name" id="name" class="px-[20px] py-3 text-[14px]" placeholder="Insert collection name"/>
                </x-input-label>


                <button class="text-white" type="submit">Crear Collection</button>
            </div>
        </form>
    </main>
</x-app-layout>
