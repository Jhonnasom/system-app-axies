<x-app-layout>
    <x-slot name="title">Author</x-slot>
    <x-slot name="subpage">Pages</x-slot>
    <x-slot name="sub_subpage">Author</x-slot>
    <main class="bg-[#14141f] py-[80px] px-[255px] flex flex-col">
        <section class="flex gap-x-10 bg-[#414046] p-10 rounded-[12px] relative isolate overflow-hidden">
            <div class="w-[274px] h-[274px] rounded-[20px] bg-[#7A798A]">
                <img class="w-full object-cover object-center" src="" alt="Author image">
            </div>
            <div class="flex justify-between">
                <div class="flex flex-col max-w-[466px]">
                    <p class="text-[18px] text-[#EBEBEB] mb-[2px]">Author Profile</p>
                    <h1 class="text-white font-bold text-[36px] mb-[6px]">Trista Francis</h1>
                    <p class="text-[14px] text-[#EBEBEB] mb-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos quae quo ad iste ipsum officiis deleniti asperiores sit.</p>
                    <button class="py-2 text-[#7A798A] px-5 bg-[#EBEBEB] rounded-[50px] w-[190px] flex gap-x-[18px] items-center">
                        lfalkjfklajKJFkkd
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="16" viewBox="0 0 14 16" fill="none">
                            <path d="M1.60938 1.875H0.671875V16H11.4531V15.0625H1.60938V1.875Z" fill="#7A798A"/>
                            <path d="M11.5669 3.51561L9.8125 1.76123V3.51561H11.5669Z" fill="#7A798A"/>
                            <path d="M11.9219 4.45312H8.875V1.40625C8.875 0.630844 8.24416 0 7.46875 0H2.54688V14.125H13.3281V5.85938C13.3281 5.08397 12.6973 4.45312 11.9219 4.45312Z" fill="#7A798A"/>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="flex gap-x-8 items-center absolute top-[60px] right-[40px] ml-[225px]">
                <x-networks boxColor="white" iconColor="#343444"/>
                <x-primary-button class="px-[28px]">Follow</x-primary-button>
            </div>
            <nav class="bg-[#343444] w-full absolute bottom-0 left-0 px-[100px] py-[24px] z-[-1] flex justify-end">
                <ul class="flex items-center w-[896px] justify-around">
                    <li><a href="#" class="text-white font-bold uppercase text-[20px]">All</a></li>
                    <li><a href="#" class="text-white font-bold uppercase text-[20px]">Art</a></li>
                    <li><a href="#" class="text-white font-bold uppercase text-[20px]">Music</a></li>
                    <li><a href="#" class="text-white font-bold uppercase text-[20px]">Collectibles</a></li>
                    <li><a href="#" class="text-white font-bold uppercase text-[20px]">Sports</a></li>
                </ul>
            </nav>
        </section>
        <section class="flex flex-col items-center">
            <div class="grid grid-cols-4 gap-x-[30px] gap-y-10 mt-[60px]">
                <x-card home="yes" authorP="Creator" priceP="Price"></x-card>
                <x-card home="yes" authorP="Creator" priceP="Price"></x-card>
                <x-card home="yes" authorP="Creator" priceP="Price"></x-card>
                <x-card home="yes" authorP="Creator" priceP="Price"></x-card>
                <x-card home="yes" authorP="Creator" priceP="Price"></x-card>
                <x-card home="yes" authorP="Creator" priceP="Price"></x-card>
                <x-card home="yes" authorP="Creator" priceP="Price"></x-card>
                <x-card home="yes" authorP="Creator" priceP="Price"></x-card>
            </div>
            <x-primary-button class="px-10 mt-[56px]">
                Load More
            </x-primary-button>
        </section>
    </main>
</x-app-layout>
