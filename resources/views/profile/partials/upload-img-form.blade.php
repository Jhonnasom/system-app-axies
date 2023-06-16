<x-input-label for="img" class="flex flex-col gap-y-5 pointer-events-none" value="Upload File">
    {{--                    Campo de input Upload File--}}
    <x-slot name="input">
        {{--                        Div contenedor del Input File--}}
        <div
            class="px-[60px] flex justify-between items-center py-10 border-[1px] border-[#343444] rounded-[8px] text-[14px] text-[#8A8AA0] font-normal">
            PNG, JPG, GIF, WEBP or MP4. Max 200mb.
            {{--                           Div para el buttom de Upload File --}}
            <div
                class="flex justify-center items-center py-4 border-[#FFFFFF] border-[1.5px] font-bold text-white text-[15px] rounded-[56px] px-[40px] cursor-pointer pointer-events-auto">
                Upload Image
            </div>
        </div>
        {{--                        Input Type File para IMG--}}
        <x-text-input name="image_item" id="img"  type="file" accept="image/png, image/jpg, image/gif, image/jpeg" class="hidden"/>
    </x-slot>
</x-input-label>
