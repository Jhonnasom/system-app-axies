<x-app-layout home="yes">
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
    <x-slot name="header">
        <div class="grid grid-cols-2 px-[255px] py-[80px] bg-[#14141f] gap-y-[230px] relative isolate">
            <div class="flex flex-col gap-y-8 max-w-[633px] relative">
                <h1 class="text-[56px] font-bold text-white max-w-[525px]">Discover, and collect extraordinary <span class="text-[#E250E5]">Monster</span> NFTs</h1>
                <p class="text-white text-[20px]">Marketplace for monster character cllections non fungible token NFTs</p>
                <div class="flex gap-x-4">
                    <a href="{{ action([\App\Http\Controllers\MainController::class, 'index']) }}" class="flex gap-x-2 px-[37px] py-[17px] text-white font-bold border-[1px] border-[#5142FC] rounded-[30px]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="24" viewBox="0 0 21 24" fill="none">
                            <path d="M12.5018 16.208L13.7719 14.0081C16.6056 9.09999 16.241 4.93672 15.9644 3.41039C15.9351 3.24485 15.8342 3.10183 15.6899 3.01705C15.5447 2.93251 15.3707 2.916 15.2117 2.97134C13.7383 3.48437 9.90813 5.22727 7.07185 10.1398L5.80142 12.3403L5.23711 12.3794C4.14896 12.4556 3.16906 13.0678 2.6233 14.0131L1.10734 16.6388C1.01756 16.7943 1.02037 16.9876 1.11469 17.1409C1.20988 17.294 1.38135 17.3818 1.56086 17.3695L3.38816 17.2526C3.90103 17.2202 4.41204 17.3391 4.85737 17.5962L5.82773 18.1565L5.09308 19.4289C4.95793 19.663 5.03802 19.9619 5.27155 20.0968L6.04851 20.5453C6.28205 20.6802 6.58096 20.6001 6.71611 20.366L7.45076 19.0935L8.42057 19.6535C8.8659 19.9106 9.22557 20.2929 9.45358 20.7552L10.2651 22.395C10.3443 22.5566 10.5061 22.6611 10.6862 22.6671C10.8661 22.6721 11.035 22.5779 11.1248 22.4223L12.6407 19.7966C13.1858 18.8525 13.2255 17.6974 12.7486 16.7162L12.5018 16.208ZM11.142 10.8273C10.336 10.362 10.0592 9.33044 10.5245 8.5245C10.9901 7.718 12.0216 7.44256 12.8275 7.90787C13.6329 8.37286 13.9101 9.40387 13.4445 10.2104C12.9792 11.0163 11.9474 11.2923 11.142 10.8273Z" fill="white"/>
                        </svg>
                        Explore
                    </a>
                    <a href="{{ action([\App\Http\Controllers\ItemController::class, 'create']) }}" class="flex gap-x-2 px-[37px] py-[17px] border-[1px] bg-white text-[#343444] font-bold rounded-[30px]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M0.00889133 14.3331C-0.0180618 14.4861 0.016821 14.6436 0.105962 14.7709C0.195063 14.8982 0.331157 14.9849 0.484204 15.0118L3.08487 15.4704L1.44663 6.17929L0.00889133 14.3331Z" fill="#5142FC"/>
                            <path d="M3.13295 0.00947192C2.97955 -0.0183796 2.82127 0.0159954 2.69326 0.105058C2.56529 0.194159 2.47807 0.330605 2.451 0.484199L1.82959 4.00842L13.6528 1.92365L3.13295 0.00947192Z" fill="#5142FC"/>
                            <path d="M19.991 16.8704L17.549 3.02157C17.4928 2.7029 17.189 2.49024 16.8702 2.5463L3.02141 4.98821C2.70274 5.04438 2.48993 5.34829 2.5461 5.66696L4.98801 19.5158C5.015 19.6689 5.10168 19.8049 5.22899 19.8941C5.32817 19.9635 5.44563 20 5.56508 20C5.59895 20 5.63301 19.9971 5.6668 19.9911L19.5156 17.5492C19.6687 17.5223 19.8047 17.4356 19.8939 17.3083C19.983 17.181 20.0179 17.0235 19.991 16.8704ZM5.66821 9.8763C5.61203 9.55763 5.82485 9.25372 6.14352 9.19755L15.3761 7.56958C15.6951 7.51341 15.9987 7.72618 16.0549 8.04485C16.1111 8.36353 15.8983 8.66743 15.5796 8.7236L6.34699 10.3516C6.31258 10.3577 6.27832 10.3606 6.24457 10.3606C5.96555 10.3606 5.71832 10.1606 5.66821 9.8763ZM13.316 13.8826L7.16098 14.9679C7.12656 14.974 7.09231 14.9769 7.05856 14.9769C6.77953 14.9769 6.53231 14.7769 6.48219 14.4926C6.42602 14.1739 6.63883 13.87 6.9575 13.8138L13.1125 12.7285C13.4314 12.6723 13.7351 12.8851 13.7913 13.2038C13.8475 13.5225 13.6347 13.8264 13.316 13.8826ZM15.9865 11.0318L6.75395 12.6597C6.71953 12.6658 6.68528 12.6687 6.65153 12.6687C6.3725 12.6687 6.12528 12.4687 6.07516 12.1844C6.01899 11.8658 6.2318 11.5618 6.55047 11.5057L15.7831 9.8777C16.102 9.82153 16.4057 10.0343 16.4619 10.353C16.518 10.6717 16.3052 10.9756 15.9865 11.0318Z" fill="#5142FC"/>
                        </svg>
                        Create
                    </a>
                </div>
            </div>
            <div></div>
            <img class="absolute z-[-1]" src="{{ asset('/storage/Graphic.png') }}" alt="">
            <div class="col-span-2 flex justify-between items-center gap-x-[38px]">
                <div class="flex flex-col items-center">
                    <div class="w-[56px] h-[56px] flex justify-center items-center bg-[#5142FC] rounded-[16px]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="21" viewBox="0 0 24 21" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M18.9227 8.01782H23.104C23.5988 8.01782 24 8.39807 24 8.86713V11.8195C23.9942 12.2862 23.5964 12.6633 23.104 12.6688H19.0187C17.8257 12.684 16.7826 11.9098 16.512 10.8084C16.3765 10.1247 16.5667 9.41917 17.0317 8.88093C17.4966 8.34269 18.1888 8.02676 18.9227 8.01782ZM19.1039 11.1219H19.4986C20.0052 11.1219 20.4159 10.7326 20.4159 10.2524C20.4159 9.77217 20.0052 9.38287 19.4986 9.38287H19.1039C18.8616 9.38017 18.6282 9.46952 18.4559 9.63098C18.2835 9.79245 18.1866 10.0126 18.1866 10.2423C18.1865 10.7242 18.5956 11.1164 19.1039 11.1219Z" fill="#F9F9FA" fill-opacity="0.4"/>
                            <path d="M18.9227 6.27877H24C24 2.31536 21.5573 0 17.4187 0H6.58133C2.44267 0 0 2.31536 0 6.22821V14.7718C0 18.6846 2.44267 21 6.58133 21H17.4187C21.5573 21 24 18.6846 24 14.7718V14.4078H18.9227C16.5662 14.4078 14.656 12.5971 14.656 10.3635C14.656 8.1299 16.5662 6.31921 18.9227 6.31921V6.27877Z" fill="white"/>
                            <path d="M12.4587 6.27884H5.6854C5.17705 6.27331 4.76803 5.8811 4.76807 5.39921C4.77391 4.92294 5.18291 4.53976 5.6854 4.53979H12.4587C12.9654 4.53979 13.3761 4.92909 13.3761 5.40932C13.3761 5.88955 12.9654 6.27884 12.4587 6.27884Z" fill="#948BFB"/>
                        </svg>
                    </div>
                    <h2 class="text-[24px] text-white font-bold mt-[24px]">Set Up Your Wallet</h2>
                    <p class="text-white text-[14px] mt-[10px] text-center">Once you’ve set up your wallet of choice, connect it to OpenSeaby clicking the NFT Marketplacein the top right corner.</p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-[56px] h-[56px] flex justify-center items-center bg-[#47A432] rounded-[16px]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M7.10396 0H3.04798C1.36799 0 0 1.37999 0 3.07318V7.16396C0 8.86795 1.36799 10.2359 3.04798 10.2359H7.10396C8.79595 10.2359 10.1519 8.86795 10.1519 7.16396V3.07318C10.1519 1.37999 8.79595 0 7.10396 0Z" fill="white"/>
                            <path d="M7.10396 13.7637H3.04798C1.36799 13.7637 0 15.1329 0 16.8369V20.9276C0 22.6196 1.36799 23.9996 3.04798 23.9996H7.10396C8.79595 23.9996 10.1519 22.6196 10.1519 20.9276V16.8369C10.1519 15.1329 8.79595 13.7637 7.10396 13.7637Z" fill="white"/>
                            <path d="M20.9521 0H16.8961C15.2041 0 13.8481 1.37999 13.8481 3.07318V7.16396C13.8481 8.86795 15.2041 10.2359 16.8961 10.2359H20.9521C22.6321 10.2359 24.0001 8.86795 24.0001 7.16396V3.07318C24.0001 1.37999 22.6321 0 20.9521 0Z" fill="white" fill-opacity="0.4"/>
                            <path d="M20.9521 13.7637H16.8961C15.2041 13.7637 13.8481 15.1329 13.8481 16.8369V20.9276C13.8481 22.6196 15.2041 23.9996 16.8961 23.9996H20.9521C22.6321 23.9996 24.0001 22.6196 24.0001 20.9276V16.8369C24.0001 15.1329 22.6321 13.7637 20.9521 13.7637Z" fill="white"/>
                        </svg>
                    </div>
                    <h2 class="text-[24px] text-white font-bold mt-[24px]">Create Your Collection</h2>
                    <p class="text-white text-[14px] mt-[10px] text-center">Click Create and set up your collection. Add social links, a description, profile & banner images, and set a secondary sales fee.</p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-[56px] h-[56px] flex justify-center items-center bg-[#9835FB] rounded-[16px]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.39551 5.88849C1.39551 3.16249 3.06051 1.39549 5.63751 1.39549H14.3535C16.9395 1.39549 18.6045 3.16249 18.6045 5.88849V11.1905C18.1585 10.8125 16.8115 9.87149 16.6235 9.75949C15.2235 8.91949 13.5435 9.29949 12.4535 10.7195C12.3585 10.8445 10.7815 13.1445 10.2235 13.4885C10.0945 13.5685 9.95851 13.6115 9.81351 13.6315C9.46351 13.6615 9.12651 13.4815 8.55351 13.0985C8.22351 12.8885 7.86351 12.6495 7.45351 12.4795C5.74851 11.7665 4.44951 12.9445 3.75751 13.7345C3.74851 13.7425 1.81151 16.1045 1.78051 16.1415C1.53751 15.5505 1.39551 14.8675 1.39551 14.1025V5.88849ZM19.9995 5.88849C19.9995 2.36249 17.7305 0.000488281 14.3535 0.000488281H5.63751C2.27051 0.000488281 -0.000488281 2.36249 -0.000488281 5.88849V14.1025C-0.000488281 15.6745 0.446512 17.0135 1.23751 18.0095C1.24651 18.0185 1.24651 18.0285 1.25551 18.0285C2.04251 19.0135 3.16551 19.6665 4.51851 19.8995C4.53051 19.9015 4.54251 19.9035 4.55551 19.9055C4.90251 19.9625 5.26151 20.0005 5.63751 20.0005H14.3535C14.5345 20.0005 14.6995 19.9665 14.8735 19.9535C15.0775 19.9365 15.2885 19.9325 15.4825 19.8985C15.7395 19.8545 15.9755 19.7775 16.2145 19.7035C16.3185 19.6705 16.4295 19.6505 16.5295 19.6125C16.7725 19.5205 16.9955 19.4015 17.2165 19.2795C17.2965 19.2355 17.3825 19.1995 17.4605 19.1505C17.6775 19.0145 17.8745 18.8555 18.0675 18.6895C18.1315 18.6345 18.2005 18.5845 18.2615 18.5265C18.4495 18.3475 18.6155 18.1505 18.7745 17.9445C18.8235 17.8795 18.8755 17.8195 18.9225 17.7525C19.0755 17.5345 19.2075 17.2995 19.3295 17.0545C19.3635 16.9835 19.3995 16.9145 19.4325 16.8425C19.5455 16.5855 19.6395 16.3165 19.7195 16.0345C19.7405 15.9585 19.7615 15.8835 19.7795 15.8055C19.8505 15.5145 19.9015 15.2145 19.9345 14.9005C19.9385 14.8625 19.9495 14.8275 19.9535 14.7895C19.9605 14.7045 19.9595 14.6195 19.9645 14.5345C19.9725 14.3885 19.9995 14.2535 19.9995 14.1025V5.88849Z" fill="white"/>
                            <path d="M6.50484 9.00009C7.86628 9.00009 9 7.87 9 6.51505C9 5.83564 8.71512 5.21318 8.26066 4.76153C7.80814 4.29347 7.17636 4.00009 6.47868 4.00009C5.10853 4.00009 4 5.10413 4 6.46873C4 6.64919 4.02132 6.82387 4.05911 6.99372C4.28779 8.12574 5.30814 9.00009 6.50484 9.00009Z" fill="white" fill-opacity="0.4"/>
                        </svg>
                    </div>
                    <h2 class="text-[24px] text-white font-bold mt-[24px]">Add Your NTFs</h2>
                    <p class="text-white text-[14px] mt-[10px] text-center">Upload your work (image, video, audio, or 3D art), add a title and description, and customize your NFTs with properties, stats</p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-[56px] h-[56px] flex justify-center items-center bg-[#DF4949] rounded-[16px]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 20 24" fill="none">
                            <rect x="3" y="6" width="13" height="4" fill="white" fill-opacity="0.4"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.125 0H13.8375C17.225 0 19.9625 1.28395 20 4.54782V22.7631C20 22.9671 19.95 23.1711 19.85 23.3511C19.6875 23.6391 19.4125 23.8551 19.075 23.9511C18.75 24.0471 18.3875 23.9991 18.0875 23.8311L9.9875 19.9432L1.875 23.8311C1.68875 23.9259 1.475 23.9871 1.2625 23.9871C0.5625 23.9871 0 23.4351 0 22.7631V4.54782C0 1.28395 2.75 0 6.125 0ZM5.27529 9.14372H14.6878C15.2253 9.14372 15.6628 8.72254 15.6628 8.19576C15.6628 7.66778 15.2253 7.24779 14.6878 7.24779H5.27529C4.73779 7.24779 4.30029 7.66778 4.30029 8.19576C4.30029 8.72254 4.73779 9.14372 5.27529 9.14372Z" fill="white"/>
                        </svg>
                    </div>
                    <h2 class="text-[24px] text-white font-bold mt-[24px]">List Them For Sale</h2>
                    <p class="text-white text-[14px] mt-[10px] text-center">Choose between auctions, fixed-price listings, and declining-price listings. You choose how you want to sell your NFTs!</p>
                </div>
            </div>
        </div>
    </x-slot>
    <section class="px-[255px] py-[80px] bg-[#14141f] flex flex-col gap-y-[38px]">
        <div class="flex justify-between items-center">
            <h1 class="text-white text-[36px] font-bold">Popular Collection</h1>
            <a href="" class="text-white font-bold uppercase border-b-[1px] border-[#E250E5] text-[14px]">Explore More</a>
        </div>
        <div class="flex items-center gap-x-[30px]">
            <x-collection/>
            <x-collection/>
            <x-collection/>
        </div>
    </section>
    <section class="px-[255px] py-[80px] flex flex-col gap-y-10 bg-[#14141f]">
        <h1 class="text-white text-[36px] font-bold">Top Sellers</h1>
        <div class="grid grid-cols-5 gap-y-7 gap-x-[68px]">
            <x-top-seller></x-top-seller>
            <x-top-seller></x-top-seller>
            <x-top-seller></x-top-seller>
            <x-top-seller></x-top-seller>
            <x-top-seller></x-top-seller>
            <x-top-seller></x-top-seller>
            <x-top-seller></x-top-seller>
            <x-top-seller></x-top-seller>
            <x-top-seller></x-top-seller>
            <x-top-seller></x-top-seller>
        </div>
    </section>
    <section class="px-[255px] py-[80px] flex flex-col gap-y-10 bg-[#14141f]">
        <h1 class="text-white text-[36px] font-bold">Today's Picks</h1>
        <div class="grid grid-cols-[repeat(auto-fit,minmax(330px,1fr))] grid-flow-row gap-y-10 gap-x-[30px]">
            <x-card home="yes"></x-card>
            <x-card home="yes"></x-card>
            <x-card home="yes"></x-card>
            <x-card home="yes"></x-card>
            <x-card home="yes"></x-card>
            <x-card home="yes"></x-card>
            <x-card home="yes"></x-card>
            <x-card home="yes"></x-card>
        </div>
        <x-primary-button class="mx-auto px-10">
            Load More
        </x-primary-button>
    </section>
</x-app-layout>
