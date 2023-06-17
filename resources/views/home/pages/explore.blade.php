<x-app-layout>
    <x-slot:title>Explore</x-slot:title>
    <x-slot:subpage>Pages</x-slot:subpage>
    <x-slot:sub_subpage>Explore</x-slot:sub_subpage>
    <main class="bg-[#14141f] py-[80px] px-[255px] flex gap-x-[80px]">
        <aside class="flex flex-col gap-y-6 w-[280px]">
            <div class="flex flex-col gap-y-[10px]">
                <div class="flex items-center justify-between">
                    <h2 class="text-white font-bold text-[20px]">Categories</h2>
                    <svg class="drop cursor-pointer" xmlns="http://www.w3.org/2000/svg" width="10" height="6" viewBox="0 0 10 6" fill="none">
                        <path d="M4.99997 5.85018C4.82075 5.85018 4.64155 5.78175 4.50492 5.64518L0.205141 1.34536C-0.0683805 1.07184 -0.0683805 0.628372 0.205141 0.354961C0.478553 0.0815495 0.921933 0.0815495 1.19548 0.354961L4.99997 4.15968L8.80449 0.355094C9.07801 0.0816824 9.52135 0.0816824 9.79474 0.355094C10.0684 0.628505 10.0684 1.07197 9.79474 1.3455L5.49503 5.64531C5.35832 5.78191 5.17913 5.85018 4.99997 5.85018Z" fill="white"/>
                    </svg>
                </div>
                <div class="flex flex-col gap-y-2  transition-[height, opacity] duration-1000">
                    @foreach($categories as $category)
                        <div class="flex items-center gap-x-2">
                            <input class="bg-transparent rounded-[4px] border-[#343444]" type="checkbox">
                            <p class="text-white text-[13px]">{{$category->name}}</p>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="bg-[#343444] w-full h-[1px]"></div>
            <div class="flex flex-col gap-y-[10px]">
                <div class="flex items-center justify-between">
                    <h2 class="text-white font-bold text-[20px]">Collections</h2>
                    <svg class="drop cursor-pointer" xmlns="http://www.w3.org/2000/svg" width="10" height="6" viewBox="0 0 10 6" fill="none">
                        <path d="M4.99997 5.85018C4.82075 5.85018 4.64155 5.78175 4.50492 5.64518L0.205141 1.34536C-0.0683805 1.07184 -0.0683805 0.628372 0.205141 0.354961C0.478553 0.0815495 0.921933 0.0815495 1.19548 0.354961L4.99997 4.15968L8.80449 0.355094C9.07801 0.0816824 9.52135 0.0816824 9.79474 0.355094C10.0684 0.628505 10.0684 1.07197 9.79474 1.3455L5.49503 5.64531C5.35832 5.78191 5.17913 5.85018 4.99997 5.85018Z" fill="white"/>
                    </svg>
                </div>
                <div class="flex flex-col gap-y-2 transition-[height, opacity] duration-1000">
                    @foreach($collections as $collection)
                        <div class="flex items-center gap-x-2">
                            <input class="bg-transparent rounded-[4px] border-[#343444]" type="checkbox">
                            <p class="text-white text-[13px]">{{$collection->name}}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </aside>
        <div class="flex flex-col">
            <section class="grid grid-cols-3 gap-x-[38px] gap-y-11">
                @foreach($items as $item)
                    <x-card :isBuyeable="false" home="yes" :buttons="false"
                            author="{{$item->user->name}}"
                            authorP="Creator"
                            item_name="{{$item->title}}"
                            price="{{$item->price}}"
                            priceP="Price"
                            author_image="{{$item->user->getFirstMediaUrl('profile')}}">
                        <x-slot name="pictureShow">
                            <img id="pictureShow" src="{{$item->getFirstMediaUrl('image_items')}}" alt="" class="w-full h-full">
                        </x-slot>
                    </x-card>
                @endforeach
            </section>
            <x-primary-button class="col-start-2 place-self-center px-[30px]">
                <a href="/home/explore?limit=0">Load More</a>
            </x-primary-button>
        </div>
    </main>
    @push('scripts')
        <script>
            const drops = document.querySelectorAll('.drop');

            let count = 0;

            drops.forEach((item, i) => {
                item.addEventListener('click', function(e) {
                    if (count % 2 === 0) {
                        item.parentElement.nextElementSibling.style.height = '0px';
                        item.parentElement.nextElementSibling.style.display = 'none';
                    } else {
                        item.parentElement.nextElementSibling.style.height = 'auto';
                        item.parentElement.nextElementSibling.style.display = 'flex';
                    }
                    count++;
                })
            })
        </script>
    @endpush
</x-app-layout>
