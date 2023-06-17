@props([
    'name' => '',
    'total' => 0,
    'url_img' => ''
])

<div class="flex gap-x-4 items-center">
    <x-user type="top" url_img="{{$url_img}}"/>
    <div class="flex flex-col gap-y-0.5">
        <h2 class="text-white font-bold">{{$name}}</h2>
        <p class="text-[#EBEBEB] text-[14px]">{{$total}}</p>
    </div>
</div>
