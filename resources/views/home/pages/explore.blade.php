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
                            <input class="bg-transparent rounded-[4px] border-[#343444] categoriesCheckbox" data-id="{{$category->id}}" type="checkbox">
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
                            <input class="bg-transparent rounded-[4px] border-[#343444] collectionsCheckbox" data-id="{{$collection->id}}" type="checkbox">
                            <p class="text-white text-[13px]">{{$collection->name}}</p>
                        </div>
                    @endforeach
                </div>
            </div>
            <button class="flex justify-center items-center py-4 border-[#FFFFFF] border-[1.5px] font-bold text-[15px] text-white rounded-[56px]" onclick="filtrar()">
                To Filter
            </button>
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
                            author_image="{{$item->user->getFirstMediaUrl('profile')}}"
                            item_id="{{$item->id}}" likes="{{$item->likes()->count()}}">
                        <x-slot name="pictureShow">
                            <img id="pictureShow" src="{{$item->getFirstMediaUrl('image_items')}}" alt="" class="w-full h-full">
                        </x-slot>
                    </x-card>
                @endforeach
            </section>
            <button id="bntLoadMoreOrLess" class="col-start-2 mt-6 place-self-center px-[30px] flex justify-center items-center py-4 border-[#FFFFFF] border-[1.5px] font-bold text-[15px] text-white rounded-[56px]" onclick="LoadMoreOrLess()">
                Load More
            </button>
        </div>
    </main>
    @push('scripts')
        <script>
            window.CSRF_TOKEN = '{{ csrf_token() }}';
            //Se ejecuta cuando se carga la pagina
            const drops = document.querySelectorAll('.drop');

            let count = 0;

            let limit = 6;
            //Se obtienen los parametros de la url
            const queryString = window.location.search;
            console.log(queryString);
            //Se buscan los parametros de la url
            const urlParams = new URLSearchParams(queryString);

            //Se verifica si existe el parametros categories y si no esta vacio
            if (urlParams.has('categories') && urlParams.get('categories') !== '') {
                //Se obtiene el valor del parametro categories
                const categories = urlParams.get('categories');
                //Se obtienen todos los elementos con la clase categoriesCheckbox
                var inputCategoriesElements = document.getElementsByClassName('categoriesCheckbox');
                //Se recorren todos los elementos con la clase categoriesCheckbox
                for(var i=0; inputCategoriesElements[i]; ++i){
                    //Se recorren todos los valores del parametro categories
                    for(var j=0; categories[j]; ++j){
                        //Se verifica si el id del elemento es igual al valor del parametro categories
                        //para marcar el checkbox
                        if(inputCategoriesElements[i].dataset.id === categories[j]){
                            inputCategoriesElements[i].checked = true;
                        }
                    }
                }
            }
            if (urlParams.has('collections') && urlParams.get('collections') !== '') {
                const collections = urlParams.get('collections');
                var inputCollectionsElements = document.getElementsByClassName('collectionsCheckbox');
                for(var i=0; inputCollectionsElements[i]; ++i){
                    for(var j=0; collections[j]; ++j){
                        if(inputCollectionsElements[i].dataset.id === collections[j]){
                            inputCollectionsElements[i].checked = true;
                        }
                    }
                }
            }
            //Se verifica si existe el parametros limit y si no esta vacio
            if (urlParams.has('limit') && urlParams.get('limit') == 0) {
                var bntLoadMoreOrLess = document.getElementById('bntLoadMoreOrLess');
                bntLoadMoreOrLess.innerHTML = 'Load Less';
                limit = urlParams.get('limit');
            }

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

            //Funcion para mostrar el detalle del item
            function showItem(id) {
                window.location = '/items/' + id;
            }

            function LoadMoreOrLess() {
                if (limit == 0) {
                    limit=6;
                } else {
                    limit=0;
                }
                filtrar();
            }

            function filtrar() {
                //Se inicializa la variable categoriesCheckbox
                var categoriesCheckbox = [];
                //Se obtienen todos los elementos con la clase categoriesCheckbox
                var inputCategoriesElements = document.getElementsByClassName('categoriesCheckbox');
                //Contador para el arreglo categoriesCheckbox
                let counterCategories = 0;
                //Se recorren todos los elementos con la clase categoriesCheckbox
                for(var i=0; inputCategoriesElements[i]; ++i){
                    //Se verifica si el checkbox esta marcado
                    if(inputCategoriesElements[i].checked){
                        //Se agrega el id del elemento al arreglo categoriesCheckbox
                        categoriesCheckbox[counterCategories] = inputCategoriesElements[i].dataset.id;
                        //Se incrementa el contador
                        counterCategories++;
                    }
                }

                //Se inicializa la variable collectionsCheckbox
                var collectionsCheckbox = [];
                //Se obtienen todos los elementos con la clase collectionsCheckbox
                var inputCollectionsElements = document.getElementsByClassName('collectionsCheckbox');
                //Contador para el arreglo collectionsCheckbox
                let counterCollections = 0;
                //Se recorren todos los elementos con la clase collectionsCheckbox
                for(var i=0; inputCollectionsElements[i]; ++i){
                    //Se verifica si el checkbox esta marcado
                    if(inputCollectionsElements[i].checked){
                        //Se agrega el id del elemento al arreglo collectionsCheckbox
                        collectionsCheckbox[counterCollections] = inputCollectionsElements[i].dataset.id;
                        //Se incrementa el contador
                        counterCollections++;
                    }
                }

                //Se redirecciona a la pagina con los parametros de filtrado
                window.location = "/home/explore?categories="+categoriesCheckbox+"&collections="+collectionsCheckbox+"&limit=" + limit;
            }

            function likeItem(id) {
                fetch('/items/'+ id +'/like', {
                    headers: {
                        'X-CSRF-TOKEN': window.CSRF_TOKEN
                    },
                    'method': 'POST',
                }).then(response => response.json()).then(data => console.log(data));
            }
        </script>
    @endpush
</x-app-layout>
