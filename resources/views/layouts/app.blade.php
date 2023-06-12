@props(['home' => 'no', 'auth' => true])

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-[Urbanist] w-screen max-w-[1920px] overflow-x-hidden mx-auto">
<header>
    <div class="flex w-full py-4 pl-[255px] pr-[268px] bg-[#14141FB2] items-center justify-between border-b-[1px] border-[#8A8AA0]">
        <x-logo/>
        <nav>
            <ul class="flex items-center gap-x-10">
                <li><a class="font-bold text-white text-[18px]" href="{{route('home') }}">Home</a></li>
                <li><a class="flex gap-x-1.5 items-center font-bold text-white text-[18px]" href="{{ action([\App\Http\Controllers\MainController::class, 'index']) }}">Explore <svg xmlns="http://www.w3.org/2000/svg" width="10" height="6" viewBox="0 0 10 6" fill="none">
                            <path d="M4.99997 5.85018C4.82075 5.85018 4.64155 5.78175 4.50492 5.64518L0.205141 1.34536C-0.0683805 1.07184 -0.0683805 0.628372 0.205141 0.354961C0.478553 0.0815495 0.921933 0.0815495 1.19548 0.354961L4.99997 4.15968L8.80449 0.355094C9.07801 0.0816824 9.52135 0.0816824 9.79474 0.355094C10.0684 0.628505 10.0684 1.07197 9.79474 1.3455L5.49503 5.64531C5.35832 5.78191 5.17913 5.85018 4.99997 5.85018Z" fill="white"/>
                        </svg>
                    </a>
                </li>
                <li><a class="flex gap-x-1.5 items-center font-bold text-white text-[18px]" href="#">Activity <svg xmlns="http://www.w3.org/2000/svg" width="10" height="6" viewBox="0 0 10 6" fill="none">
                            <path d="M4.99997 5.85018C4.82075 5.85018 4.64155 5.78175 4.50492 5.64518L0.205141 1.34536C-0.0683805 1.07184 -0.0683805 0.628372 0.205141 0.354961C0.478553 0.0815495 0.921933 0.0815495 1.19548 0.354961L4.99997 4.15968L8.80449 0.355094C9.07801 0.0816824 9.52135 0.0816824 9.79474 0.355094C10.0684 0.628505 10.0684 1.07197 9.79474 1.3455L5.49503 5.64531C5.35832 5.78191 5.17913 5.85018 4.99997 5.85018Z" fill="white"/>
                        </svg>
                    </a>
                </li>
                <li><a class="flex gap-x-1.5 items-center font-bold text-white text-[18px]" href="#">Community <svg xmlns="http://www.w3.org/2000/svg" width="10" height="6" viewBox="0 0 10 6" fill="none">
                            <path d="M4.99997 5.85018C4.82075 5.85018 4.64155 5.78175 4.50492 5.64518L0.205141 1.34536C-0.0683805 1.07184 -0.0683805 0.628372 0.205141 0.354961C0.478553 0.0815495 0.921933 0.0815495 1.19548 0.354961L4.99997 4.15968L8.80449 0.355094C9.07801 0.0816824 9.52135 0.0816824 9.79474 0.355094C10.0684 0.628505 10.0684 1.07197 9.79474 1.3455L5.49503 5.64531C5.35832 5.78191 5.17913 5.85018 4.99997 5.85018Z" fill="white"/>
                        </svg>
                    </a>
                </li>
                <li><a class="flex gap-x-1.5 items-center font-bold text-white text-[18px]" href="#">Pages <svg xmlns="http://www.w3.org/2000/svg" width="10" height="6" viewBox="0 0 10 6" fill="none">
                            <path d="M4.99997 5.85018C4.82075 5.85018 4.64155 5.78175 4.50492 5.64518L0.205141 1.34536C-0.0683805 1.07184 -0.0683805 0.628372 0.205141 0.354961C0.478553 0.0815495 0.921933 0.0815495 1.19548 0.354961L4.99997 4.15968L8.80449 0.355094C9.07801 0.0816824 9.52135 0.0816824 9.79474 0.355094C10.0684 0.628505 10.0684 1.07197 9.79474 1.3455L5.49503 5.64531C5.35832 5.78191 5.17913 5.85018 4.99997 5.85018Z" fill="white"/>
                        </svg>
                    </a>
                </li>
                <li><a class="flex gap-x-1.5 items-center font-bold text-white text-[18px]" href="#">Contact <svg xmlns="http://www.w3.org/2000/svg" width="10" height="6" viewBox="0 0 10 6" fill="none">
                            <path d="M4.99997 5.85018C4.82075 5.85018 4.64155 5.78175 4.50492 5.64518L0.205141 1.34536C-0.0683805 1.07184 -0.0683805 0.628372 0.205141 0.354961C0.478553 0.0815495 0.921933 0.0815495 1.19548 0.354961L4.99997 4.15968L8.80449 0.355094C9.07801 0.0816824 9.52135 0.0816824 9.79474 0.355094C10.0684 0.628505 10.0684 1.07197 9.79474 1.3455L5.49503 5.64531C5.35832 5.78191 5.17913 5.85018 4.99997 5.85018Z" fill="white"/>
                        </svg>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="flex gap-x-[38px] items-center">
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                    <mask id="mask0_2770_133" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="18" height="17">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.666992 0.666504H16.6862V16.332H0.666992V0.666504Z" fill="white" stroke="white"/>
                    </mask>
                    <g mask="url(#mask0_2770_133)">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.67711 1.87297C4.9406 1.87297 1.90072 4.84489 1.90072 8.49887C1.90072 12.1529 4.9406 15.1256 8.67711 15.1256C12.4128 15.1256 15.4527 12.1529 15.4527 8.49887C15.4527 4.84489 12.4128 1.87297 8.67711 1.87297ZM8.67709 16.332C4.26039 16.332 0.666992 12.818 0.666992 8.49887C0.666992 4.17973 4.26039 0.666504 8.67709 0.666504C13.0938 0.666504 16.6864 4.17973 16.6864 8.49887C16.6864 12.818 13.0938 16.332 8.67709 16.332Z" fill="white"/>
                        <path d="M8.67711 1.37297C4.67512 1.37297 1.40072 4.5582 1.40072 8.49887H2.40072C2.40072 5.13158 5.20607 2.37297 8.67711 2.37297V1.37297ZM1.40072 8.49887C1.40072 12.4395 4.67504 15.6256 8.67711 15.6256V14.6256C5.20615 14.6256 2.40072 11.8662 2.40072 8.49887H1.40072ZM8.67711 15.6256C12.6784 15.6256 15.9527 12.4394 15.9527 8.49887H14.9527C14.9527 11.8663 12.1472 14.6256 8.67711 14.6256V15.6256ZM15.9527 8.49887C15.9527 4.55824 12.6783 1.37297 8.67711 1.37297V2.37297C12.1473 2.37297 14.9527 5.13155 14.9527 8.49887H15.9527ZM8.67709 15.832C4.52595 15.832 1.16699 12.5314 1.16699 8.49887H0.166992C0.166992 13.1046 3.99484 16.832 8.67709 16.832V15.832ZM1.16699 8.49887C1.16699 4.46641 4.52588 1.1665 8.67709 1.1665V0.166504C3.9949 0.166504 0.166992 3.89305 0.166992 8.49887H1.16699ZM8.67709 1.1665C12.8282 1.1665 16.1864 4.46634 16.1864 8.49887H17.1864C17.1864 3.89312 13.3593 0.166504 8.67709 0.166504V1.1665ZM16.1864 8.49887C16.1864 12.5315 12.8282 15.832 8.67709 15.832V16.832C13.3594 16.832 17.1864 13.1046 17.1864 8.49887H16.1864Z" fill="white"/>
                    </g>
                    <mask id="mask1_2770_133" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="12" y="12" width="6" height="6">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.2012 13.2998H17.3333V17.3332H13.2012V13.2998Z" fill="white" stroke="white"/>
                    </mask>
                    <g mask="url(#mask1_2770_133)">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.7166 17.3332C16.5596 17.3332 16.4016 17.2745 16.2807 17.1571L13.3823 14.3307C13.1413 14.0951 13.1405 13.713 13.3815 13.4774C13.6217 13.2401 14.0123 13.2417 14.2541 13.4757L17.1526 16.3029C17.3935 16.5386 17.3944 16.9198 17.1534 17.1555C17.0333 17.2745 16.8746 17.3332 16.7166 17.3332Z" fill="white"/>
                        <path d="M16.7166 17.3332C16.5595 17.3332 16.4016 17.2745 16.2807 17.1571L13.3823 14.3307C13.1413 14.0951 13.1405 13.713 13.3815 13.4774C13.6217 13.2401 14.0123 13.2417 14.2541 13.4757L17.1526 16.3029C17.3935 16.5386 17.3944 16.9198 17.1534 17.1555C17.0333 17.2745 16.8746 17.3332 16.7166 17.3332" stroke="white"/>
                    </g>
                </svg>
            </a>
            <button class="px-[35px] py-[13px] border-[1px] border-[#5142FC] rounded-[24px] flex gap-x-2.5 font-bold text-white text-[15px] items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 18 16" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.8077 4.98483H17.3337C17.3337 2.15383 15.6374 0.5 12.7633 0.5H5.23736C2.36329 0.5 0.666992 2.15383 0.666992 4.94872V11.0513C0.666992 13.8462 2.36329 15.5 5.23736 15.5H12.7633C15.6374 15.5 17.3337 13.8462 17.3337 11.0513V10.7913H13.8077C12.1713 10.7913 10.8448 9.49793 10.8448 7.9025C10.8448 6.30707 12.1713 5.01372 13.8077 5.01372V4.98483ZM13.8077 6.22701H16.7114C17.0551 6.22701 17.3337 6.49861 17.3337 6.83365V8.94247C17.3297 9.27588 17.0534 9.54521 16.7114 9.54911H13.8744C13.046 9.55998 12.3216 9.00698 12.1337 8.22027C12.0396 7.73191 12.1717 7.22797 12.4946 6.84351C12.8174 6.45906 13.2981 6.2334 13.8077 6.22701ZM13.9337 8.44415H14.2077C14.5596 8.44415 14.8448 8.16608 14.8448 7.82306C14.8448 7.48004 14.5596 7.20197 14.2077 7.20197H13.9337C13.7654 7.20004 13.6033 7.26387 13.4837 7.3792C13.364 7.49453 13.2966 7.65177 13.2966 7.81584C13.2966 8.16005 13.5806 8.44019 13.9337 8.44415ZM4.61513 4.98483H9.31884C9.67066 4.98483 9.95587 4.70676 9.95587 4.36375C9.95587 4.02073 9.67066 3.74266 9.31884 3.74266H4.61513C4.26618 3.74263 3.98215 4.01633 3.9781 4.35652C3.97807 4.70073 4.26211 4.98088 4.61513 4.98483Z" fill="white"/>
                </svg>
                Wallet connect
            </button>
        </div>
        @if($auth && (\Illuminate\Support\Facades\Route::current()->uri == 'home'))
            {{ $user }}
        @endif
    </div>
    @if($home == 'no')
        <div class="bg-[#14141FB2] py-[59px] flex flex-col items-center justify-center">
            <h1 class="text-white text-[48px] font-bold text-center">{{ $title }}</h1>
            <div class="flex gap-x-3 justify-center text-[#8A8AA0] text-[18px]">
                <p>Home</p>
                /
                <p>{{ $subpage }}</p>
                /
                <p class="text-white">{{ $sub_subpage }}</p>
            </div>
        </div>
    @else
        {{ $header }}
    @endif
</header>

{{ $slot }}

<footer class="bg-[#0D0D11] pt-[87px] pb-[80px] px-[255px] flex justify-between items-center">
    <div>
        <x-logo class="mb-3"/>
        <p class="leading-[22px] text-[14px] max-w-[245px] text-white mb-7">Lorem ipsum dolor sit amet,consectetur adipisicing elit.</p>
        <x-networks boxColor="#343444" iconColor="white"/>
    </div>
    <div>
        <h2 class="text-white font-bold text-[18px]">My Account</h2>
        <div class="text-[14px] text-white flex flex-col gap-y-4 mt-6">
            <a href="#">Authors</a>
            <a href="#">Collection</a>
            <a href="#">Author Profile</a>
            <a href="#">Create Collection</a>
        </div>
    </div>
    <div>
        <h2 class="text-white font-bold text-[18px]">Resources</h2>
        <div class="text-[14px] text-white flex flex-col gap-y-4 mt-6">
            <a href="#">Help & Support</a>
            <a href="#">Live Auctions</a>
            <a href="#">Item Details</a>
            <a href="#">Activity</a>
        </div>
    </div>
    <div>
        <h2 class="text-white font-bold text-[18px]">Company</h2>
        <div class="text-[14px] text-white flex flex-col gap-y-4 mt-6">
            <a href="#">About Us</a>
            <a href="#">Contact Us</a>
            <a href="#">Our Blog</a>
            <a href="#">Discover</a>
        </div>
    </div>
    <div class="mt-[-68px] flex flex-col gap-y-6">
        <h2 class="text-white font-bold text-[18px]">Suscribe Us</h2>
        <form action="">
            <div class="relative">
                <input placeholder="Info@yourgmail.com" class="py-[17px] text-white bg-transparent border-[1px] border-[#343444] rounded-[10px] pl-6 pr-[100px] placeholder-[#8A8AA0]" type="email">
                <button class="bg-[#5142FC] py-4 px-[18px] absolute right-0 h-full rounded-r-[10px]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M3.91533 2.18876C4.23957 1.95506 4.67182 1.93688 5.01454 2.14251L20.0145 11.1425C20.3157 11.3232 20.5 11.6487 20.5 12C20.5 12.3513 20.3157 12.6768 20.0145 12.8575L5.01454 21.8575C4.67182 22.0631 4.23957 22.0449 3.91533 21.8112C3.5911 21.5775 3.43715 21.1732 3.52386 20.7831L5.25343 13L10.5 13C11.0523 13 11.5 12.5523 11.5 12C11.5 11.4477 11.0523 11 10.5 11L5.25343 11L3.52386 3.21693C3.43715 2.82677 3.5911 2.42246 3.91533 2.18876Z" fill="white"/>
                    </svg>
                </button>
            </div>
        </form>
    </div>
</footer>
</body>
@stack('scripts')
</html>
