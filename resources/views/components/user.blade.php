@props([
    'type'=>''
])

<div class="@if($type=='top')w-[100px] h-[100px] @else w-[64px] h-[64px] @endif  rounded-[20px] bg-[#7A798A] relative"><img src="" alt="" class="w-full object-cover object-center">
    <div class="@if($type=='top')w-[26px] h-[26px] @else w-[18px] h-[18px] @endif rounded-full flex items-center justify-center absolute bottom-0 right-0 bg-[#5142FC]">
        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="9" viewBox="0 0 12 9" fill="none">
            <path d="M4.8095 8.6978C4.7124 8.79542 4.58 8.84994 4.4424 8.84994C4.30481 8.84994 4.1724 8.79542 4.07531 8.6978L1.14373 5.76571C0.83946 5.46144 0.83946 4.96817 1.14373 4.66442L1.51083 4.29732C1.81509 3.99305 2.30784 3.99305 2.61211 4.29732L4.4424 6.12761L9.38807 1.18194C9.69234 0.877668 10.1856 0.877668 10.4894 1.18194L10.8565 1.54903C11.1607 1.8533 11.1607 2.34657 10.8565 2.65032L4.8095 8.6978Z" fill="white"/>
        </svg>
    </div>
</div>
