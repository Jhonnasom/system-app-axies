<div class="group w-[330px] h-[442px] bg-[#343444] p-5 rounded-[20px]">
    {{--                        Div secondary gray--}}
    <div class="w-[290px] h-[290px] bg-[#7A798A] rounded-[20px] px-3 py-[14px] flex flex-col">
        <div class="h-[28px] flex justify-end">
            <div class="bg-[#14141F] rounded-[10px] w-[64px] h-[28px] flex justify-center items-center flex gap-[5px] ">
                <x-heart></x-heart>
                <label class="text-white">100</label>
            </div>
        </div>
        <div class="h-[262px] flex items-center justify-center">
            <button class="w-[145px] h-[48px] group-hover:bg-white  hover:visible rounded-[30px] flex items-center justify-center gap-2">
                <svg class="invisible group-hover:visible" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.8761 5.39175H14.0558C16.4172 5.39175 18.3337 7.26675 18.3337 9.56675V14.1667C18.3337 16.4668 16.4172 18.3334 14.0558 18.3334H5.94488C3.58349 18.3334 1.66699 16.4668 1.66699 14.1667V9.56675C1.66699 7.26675 3.58349 5.39175 5.94488 5.39175H6.12456C6.14167 4.39175 6.54379 3.45842 7.27103 2.75841C8.00683 2.05008 8.94797 1.69175 10.0089 1.66675C12.1307 1.66675 13.8504 3.33341 13.8761 5.39175ZM8.1694 3.65008C7.69028 4.11675 7.42505 4.73341 7.40794 5.39175H12.5927C12.5671 4.02508 11.4206 2.91675 10.0089 2.91675C9.3501 2.91675 8.66564 3.17508 8.1694 3.65008ZM13.2515 8.60008C13.6108 8.60008 13.8932 8.31675 13.8932 7.97508V7.00841C13.8932 6.66675 13.6108 6.38341 13.2515 6.38341C12.9007 6.38341 12.6098 6.66675 12.6098 7.00841V7.97508C12.6098 8.31675 12.9007 8.60008 13.2515 8.60008ZM7.31379 7.97508C7.31379 8.31675 7.03145 8.60008 6.6721 8.60008C6.32132 8.60008 6.03042 8.31675 6.03042 7.97508V7.00841C6.03042 6.66675 6.32132 6.38341 6.6721 6.38341C7.03145 6.38341 7.31379 6.66675 7.31379 7.00841V7.97508Z" fill="#5142FC"/>
                </svg>
                <span class="group-hover:visible text-sm group-hover:text-blue-800 text-none invisible group-hover:font-bold group-hover:text-[15px]">Buy</span>
            </button>
        </div>
    </div>
    <div class="flex flex-row justify-between mt-5 mb-[17px]">
        {{--                        Este texto tiene que ser dinamico--}}
        <span class="text-white font-bold text-lg leading-[26px]">"Cyber Doberman #766"</span>
        <button class="w-[49px] h-6 bg rounded-[10px] bg-[#5142FC] text-white">BSC</button>
    </div>
    {{--                    Div Owner By y Current ById--}}
    <div class="flex">
        <img src="#" class="w-11 h-11 rounded-[15px]">
        {{--                        Owner By--}}
        <div class="flex flex-col ms-3">
            <span class="font-normal text-[13px] text-[#8A8AA0]">Owned By</span>
            {{--                            Tiene que ser el nombre dinamico--}}
            <span class="text-[15px] text-white font-bold leading-[22px]">Freddie Carpinter</span>
        </div>
        {{--                        Div current bid--}}
        <div class="w-72px h-[49px] flex flex-col items-end ms-[37px]">
            <span class="font-normal text-[13px] text-[#8A8AA0]">Current Bid</span>
            {{--                            Precio tiene que ser dinamico--}}
            <span class="text-lg text-white font-bold leading-[26px]">4.89 ETH</span>
        </div>
    </div>
</div>

