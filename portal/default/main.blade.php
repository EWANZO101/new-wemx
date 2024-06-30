<!DOCTYPE html>
<html lang="en" class="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Game and Web hosting made easy!">
    <meta name="keywords" content="Swiftpeakhosting">
    <meta name="author" content="WemX">
    <title>SwiftPeakHosting Store</title>
    <link rel="icon" href="@settings('favicon', 'https://media.discordapp.net/attachments/345186787745988609/1165260919291523132/OTHLOGO.png')">
    <meta name="description" content="Game and Web hosting made easy!">
    <link rel="stylesheet" href="{{ Theme::get('othpanel')->assets }}assets/css/custom.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    @include(Portal::path('layouts.tailwind'))
    <meta http-equiv="Content-Security-Policy" content="frame-ancestors *">
    <!-- link -->
    <link rel="stylesheet" href="assets/css/bundle.min.css">
    <link rel="stylesheet" href="assets/css/fonts.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/templates.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/64ff2cb70f2b18434fd7e4bf/1ha2cdb1d';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<!-- Google Calendar Appointment Scheduling begin -->
<link href="https://calendar.google.com/calendar/scheduling-button-script.css" rel="stylesheet">
<script src="https://calendar.google.com/calendar/scheduling-button-script.js" async></script>
<script>
(function() {
  var target = document.currentScript;
  window.addEventListener('load', function() {
    calendar.schedulingButton.load({
      url: 'https://calendar.google.com/calendar/appointments/schedules/AcZssZ25VEIvteo4gHgs0-tVBdudBqzaXfdMxuPlLyQljrSRZXLNeKYKic20fEuQJ0iaJf5ipPs9e5qU?gv=true',
      color: '#039BE5',
      label: 'Book an appointment',
      target,
    });
  });
})();
</script>
<!-- end Google Calendar Appointment Scheduling -->
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-5QLN2XL12W"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-5QLN2XL12W');
</script>
</head>
<body class="bg-neutral-900">
@include(Portal::path('layouts.header'))


<section id="home" class="bg-white dark:bg-neutral-950 bg-cover bg-center" style="background-image: url('https://media.discordapp.net/attachments/345186787745988609/1196530731476852736/bg-d.png');">
    <div class="grid py-8 px-4 mx-auto max-w-screen-xl lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
        <div class="place-self-center mr-auto lg:col-span-7">
            <a href="https://store.swiftpeakhosting.co.uk/news" class="inline-flex justify-between items-center py-1 px-1 pr-4 mb-7 text-sm text-gray-700 bg-gray-100 rounded-full dark:bg-neutral-900 dark:text-white" role="alert">
                <span class="text-xs bg-primary-600 rounded-full text-white px-4 py-1.5 mr-3">New</span> <span class="text-sm font-medium">New Update! See what's new</span>
                <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
              </a>
            <h1 class="mb-4 max-w-2xl text-4xl font-extrabold leading-none md:text-5xl xl:text-6xl dark:text-white">
            Swift Peak Hosting
            </h1>
            <p class="mb-6 max-w-2xl font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">At Swift, our goal is to maintain your servers uptime at no or minimal cost, ensuring it operates 24/7 reliability and value with our services.</p>
            <a href="#pricing"
               class="inline-flex justify-center items-center py-3 px-5 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
               
                @settings('portal::button', 'Explore Plans')
                <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                     xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                          clip-rule="evenodd"></path>
                </svg>
            </a>
            <a href="@settings('socials::discord')"
               class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-gray-900 rounded-lg border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                {!! __('auth.join_discord') !!}
            </a>
        </div>
        <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
            <img src="https://i.imgur.com/4rBkgcQ.png" alt="mockup">
        </div>
    </div>
</section>


<section class="bg-white dark:bg-neutral-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16">
        <h1 class="mb-4 text-4xl font-extrabold text-center leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Some of the games <span class="underline underline-offset-3 decoration-8 decoration-blue-400 dark:decoration-blue-600">we host</span></h1>
        <div class="grid grid-cols-2 gap-8 text-gray-500 sm:gap-12 md:grid-cols-3 lg:grid-cols-3 dark:text-gray-400">

            <a href="https://store.swiftpeakhosting.co.uk//store/rust" class="flex justify-center items-center">
                <img src="https://cdn.discordapp.com/attachments/1054865340435279932/1196613253887963248/download_5.png?ex=65b843ef&is=65a5ceef&hm=74ac8315bd424253355fcfd9c18c402233aa7f3b384e005e3a94f443ab62e729&" class="hover:text-gray-900 dark:hover:text-white"
                     style="height: 60px;"/>
                <h2 class="text-3xl font-extrabold tracking-tight leading-tight text-center text-gray-900 dark:text-white md:text-3xl ml-4">Rust</h2>
            </a>

            <a href="https://store.swiftpeakhosting.co.uk//store/minecraft" class="flex justify-center items-center">
                <img src="https://cdn.discordapp.com/attachments/1054865340435279932/1196612738831614092/Minecraft-Hosting.png?ex=65b84374&is=65a5ce74&hm=31d2982a6567778ad0c06563cfb8ab38217d34c2f4d1d4ee734126006773317a&" class="hover:text-gray-900 dark:hover:text-white"
                     style="height: 60px;"/>
                <h2 class="text-3xl font-extrabold tracking-tight leading-tight text-center text-gray-900 dark:text-white md:text-3xl ml-4">Minecraft</h2>
            </a>

            <a href="https://store.swiftpeakhosting.co.uk//store/vps" class="flex justify-center items-center">
                <img src="https://media.discordapp.net/attachments/1054865340435279932/1200978545674047588/VPS-Hosting_1.png?ex=65c8256e&is=65b5b06e&hm=24755463b9aabbc1471831d4ef902d50175c8cdff29840eb8c7289fa7f1a4eba&=&format=webp&quality=lossless" class="hover:text-gray-900 dark:hover:text-white"
                     style="height: 60px;"/>
                <h2 class="text-3xl font-extrabold tracking-tight leading-tight text-center text-gray-900 dark:text-white md:text-3xl ml-4">VPS</h2>
            </a>

            <a href="https://store.swiftpeakhosting.co.uk//store/snailycad" class="flex justify-center items-center">
                <img src="https://cdn.discordapp.com/attachments/1054865340435279932/1196612545964933221/SN26Ek6.png?ex=65b84346&is=65a5ce46&hm=d683c4a79211794215b557ad05983143aa5e94c6ed1fff954dc0b63ee49e10ff&" class="hover:text-gray-900 dark:hover:text-white"
                     style="height: 60px;"/>
                <h2 class="text-3xl font-extrabold tracking-tight leading-tight text-center text-gray-900 dark:text-white md:text-3xl ml-4">SnailyCad</h2>
            </a>

            <a href="https://store.swiftpeakhosting.co.uk//store/gmod" class="flex justify-center items-center">
                <img src="https://cdn.discordapp.com/attachments/1054865340435279932/1196612698444673126/GarryE28099s-Mod.png?ex=65b8436b&is=65a5ce6b&hm=a7bb4d42045616eba3004c6bf96f9e808af3ac1806c435c5fb1ee008305c132c&" class="hover:text-gray-900 dark:hover:text-white"
                     style="height: 60px;"/>
                <h2 class="text-3xl font-extrabold tracking-tight leading-tight text-center text-gray-900 dark:text-white md:text-3xl ml-4">Garry's Mod</h2>
            </a>

            <a href="https://store.swiftpeakhosting.co.uk/store/FiveM" class="flex justify-center items-center">
                <img src="https://cdn.discordapp.com/attachments/1054865340435279932/1196612670816800820/FiveM-Hosting.png?ex=65b84364&is=65a5ce64&hm=9ab8e55e83b8b14e38386081c5ad46b558bfebf6c6e4eb20f73158d50aed54bd&" class="hover:text-gray-900 dark:hover:text-white"
                     style="height: 60px;"/>
                <h2 class="text-3xl font-extrabold tracking-tight leading-tight text-center text-gray-900 dark:text-white md:text-3xl ml-4">FiveM</h2>
            </a>

        </div>
    </div>
</section>


<section class="bg-white dark:bg-neutral-900" id="pricing">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        @if($selected_category !== NULL)
            <div class="mx-auto max-w-screen-md text-center mb-8 lg:mb-12">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">{{ $selected_category->name }} Plans</h2>
                <p class="mb-5 font-light text-gray-500 sm:text-xl dark:text-gray-400">{{ $selected_category->description }}</p>
            </div>
            <div class="space-y-8 lg:grid lg:grid-cols-3 sm:gap-6 xl:gap-10 lg:space-y-0">
                @foreach ($selected_category->packages as $package)

                    @if($package->status == 'unlisted' OR $package->status == 'inactive' OR $package->status == 'restricted')
                        @if($package->status == 'restricted')
                            @if(Auth::guest() OR !Auth::user()->is_admin())
                                @continue
                            @endif
                        @else
                            @continue
                        @endif
                    @endif
                    <div
                        class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-neutral-900 xl:p-8 dark:bg-neutral-900 dark:text-white">
                        <h3 class="mb-4 text-2xl font-semibold">{{ $package->name }}</h3>
                        <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                            {!! __('client.price_block_desc', [
                                'period' => mb_strtolower($package->prices->first()->period()),
                                'total_price' => $package->prices->first()->totalPrice(),
                                'renewal_price' => $package->prices->first()->renewal_price,
                                'per_period' => mb_strtolower($package->prices->first()->periodToHuman()),
                                'symbol' => currency('symbol')
                             ]) !!}
                        </p>
                        <div class="flex justify-center items-baseline my-8">
                                <span
                                    class="mr-2 text-5xl font-extrabold">{{ currency('symbol') }}{{ $package->prices->first()->renewal_price }}</span>
                            <span
                                class="text-gray-500 dark:text-gray-400">/{{ $package->prices->first()->periodToHuman() }}</span>
                        </div>
                        <!-- List -->
                        <ul role="list" class="mb-8 space-y-4 text-left">
                            <div class="grid grid-cols-1 gap-4">
                                @foreach($package->features()->orderBy('order', 'desc')->get() as $feature)
                                <li class="flex items-center space-x-3">
                                    <!-- Icon -->
                                    <span class="text-{{$feature->color}}-500 dark:text-{{$feature->color}}-500 bx-sm">
                                        {!! $feature->icon !!}
                                    </span>
                                    <span>{{ $feature->description }}</span>
                                </li>
                                @endforeach
                            </div>
                        </ul>
                        <a href="{{ route('store.package', ['package' => $package->id]) }}"
                           class="text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:ring-primary-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white  dark:focus:ring-primary-900">
                            {!! __('client.get_started') !!}</a>
                    </div>
                @endforeach
            </div>
    </div>
    @else
        <div class="mx-auto max-w-screen-md text-center mb-8 lg:mb-12">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">
                {!! __('client.no_plans_display') !!}</h2>
            <p class="mb-5 font-light text-gray-500 sm:text-xl dark:text-gray-400">
                {!! __('client.no_plans_display_desc') !!}</p>
        </div>
        @endif
        </div>
</section>




<section>
    <aside aria-label="Related articles" class="flex flex-wrap py-8 lg:py-15 bg-white dark:bg-neutral-950">
        <div class="px-4 mx-auto max-w-screen-xl">
            <h2 class="mb-8 text-2xl font-bold text-gray-900 dark:text-white">{!! __('client.other_categories') !!}</h2>
            <div class="grid gap-12 sm:grid-cols-2 lg:grid-cols-3">

                @foreach ($categories->all() as $category)
               @if(in_array($category->status, ['unlisted', 'inactive', 'restricted']))
                     @if($category->status == 'restricted')
                         @if(Auth::guest() OR !Auth::user()->is_admin())
                             @continue
                         @endif
                     @else
                         @continue
                     @endif
                 @endif
                    <article class="max-w-xs">
                        <a href="{{ url()->current() }}?category={{ $category->link }}#pricing">
                            <img src="{{ $category->icon() }}" class="mb-5 rounded-lg" alt="Image 1"
                                 style="height: 200px;">
                        </a>
                        <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                            <a href="#">{{ $category->name }}</a>
                        </h2>
                        <p class="mb-4 font-light text-gray-500 dark:text-gray-400">{{ $category->description }}</p>
                        <a href="{{ url()->current() }}?category={{ $category->link }}#pricing"
                           class="py-2.5 px-5 mr-2 mb-2 min-w-full text-center text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">@if(request()->input('category', (isset($selected_category->link)) ? $selected_category->link : '') == $category->link)
                                {!! __('client.selected') !!}
                            @else
                                {!! __('client.pricing') !!}
                            @endif</a>
                    </article>
                @endforeach

            </div>
        </div>
    </aside>
</section>


<section class="text-gray-400 bg-white dark:bg-neutral-900 body-font">
    <div class="container px-5 py-24 mx-auto">
        <h1 class="mb-4 text-4xl font-extrabold text-gray-900 text-black dark:text-white text-center">Testimonials</h1>
        <div class="flex flex-wrap -m-4">
            <div class="p-4 md:w-1/2 w-full">
                <div class="h-full bg-white dark:bg-neutral-950 p-8 rounded">
                    <div class="flex items-center mb-4 text-yellow-300">
                        <svg class="w-5 h-5 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                        <svg class="w-5 h-5 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                        <svg class="w-5 h-5 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                        <svg class="w-5 h-5 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                    </div>
                    <blockquote>
                        <p class="text-2xl font-semibold text-gray-900 dark:text-white">"***"</p>
                    </blockquote>
                    <figcaption class="flex items-center mt-6 space-x-3 rtl:space-x-reverse">
                        <img class="w-6 h-6 rounded-full" src="https://media.discordapp.net/attachments/1054865340435279932/1200978520248168519/Screenshot_2024-01-16_003830-removebg-preview.png?ex=65c82568&is=65b5b068&hm=3539408cca358b494464b46066e4f040321e077269323db32b190a2e31845126&=&format=webp&quality=lossless" alt="profile picture">
                        <div class="flex items-center divide-x-2 rtl:divide-x-reverse divide-gray-300 dark:divide-gray-700">
                            <cite class="pe-3 font-medium text-gray-900 dark:text-white">**</cite>
                            <cite class="ps-3 text-sm text-gray-500 dark:text-gray-400">**</cite>
                        </div>
                    </figcaption>
                </div>
            </div>
            <div class="p-4 md:w-1/2 w-full">
                <div class="h-full bg-white dark:bg-neutral-950 p-8 rounded">
                    <div class="flex items-center mb-4 text-yellow-300">
                        <svg class="w-5 h-5 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                        <svg class="w-5 h-5 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                        <svg class="w-5 h-5 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                        <svg class="w-5 h-5 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                    </div>
                    <blockquote>
                        <p class="text-2xl font-semibold text-gray-900 dark:text-white">"Best hosting out! Ewan C efficiently assisted with pre-installation for Snaily CAD, which was a quick process. There have been no incidents of crashes or outages on the hosting platform. I highly recommend for you to use Swift Peak Hosting"</p>
                    </blockquote>
                    <figcaption class="flex items-center mt-6 space-x-3 rtl:space-x-reverse">
                        <img class="w-6 h-6 rounded-full" src="https://cdn.discordapp.com/attachments/1054865340435279932/1200978494566436895/Screenshot_2024-01-16_003846-removebg-preview.png?ex=65c82562&is=65b5b062&hm=62fecd46b0fbcf5ef6c85a8ce62048f8db53df2a9c5dd036c80b0742ab252332&" alt="profile picture">
                        <div class="flex items-center divide-x-2 rtl:divide-x-reverse divide-gray-300 dark:divide-gray-700">
                            <cite class="pe-3 font-medium text-gray-900 dark:text-white">Void</cite>
                            <cite class="ps-3 text-sm text-gray-500 dark:text-gray-400">VPS Customer.</cite>
                        </div>
                    </figcaption>
                </div>
            </div>
        </div>
    </div>
</section>
 
<section class="text-gray-400 bg-white dark:bg-neutral-900 body-font">
    <div class="text-center">
       <button class="text-neutral-800 bg-neutral-900 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-neutral-900 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" type="button" data-drawer-target="drawer-bottom-example" data-drawer-show="drawer-bottom-example" data-drawer-placement="bottom" aria-controls="drawer-bottom-example">
       </button>
    </div>
    
    <!-- drawer component -->
    <div id="drawer-bottom-example" class="fixed bottom-0 left-0 right-0 z-40 w-full p-4 overflow-y-auto transition-transform bg-neutral-800 dark:bg-neutral-800 transform-none" tabindex="-1" aria-labelledby="drawer-bottom-label">
       <h5 id="drawer-bottom-label" class="inline-flex items-center mb-4 text-base font-semibold text-gray-500 dark:text-gray-400"><svg class="w-4 h-4 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
       <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
     </svg>Notifications</h5>
       <button type="button" data-drawer-hide="drawer-bottom-example" aria-controls="drawer-bottom-example" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white" >
         <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
         </svg>
         <span class="sr-only">Close menu</span>
      </button>
       <p class="max-w-lg mb-6 text-sm text-gray-500 dark:text-gray-400">** .</p>
      <a href="https://store.swiftpeakhosting.co.uk/auth/login" class="px-4 py-2 me-2 text-sm font-medium text-center text-gray-900 bg-neutral-800 border border-gray-200 rounded-lg focus:outline-none hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Login</a>
      <a href="https://store.swiftpeakhosting.co.uk//store" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Get started <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
       <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
     </svg></a>
   </div>
   





<section class="theme-footer relative bg-black dark:bg-neutral-900">
    <div class="rounded-lg shadow m-4 w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between dark:bg-neutral-950">
        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">
            © 2024 <a href="https://store.swiftpeakhosting.co.uk" class="hover:underline">SwiftPeakHosting</a>. All Rights Reserved.
        </span>
        <ul class="flex flex-wrap items-center mt-3 space-x-4 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
            <li>
                <a href="https://docs.swiftpeakhosting.co.uk/about" class="hover:underline">About</a>

            </li>
            <li>
                <a href="https://www.demoswiftpeakhosting.co.uk/TermsandConditions" class="hover:underline">T&C/Privacy Policy</a>

            </li>
            <li>
                <a href="#" class="hover:underline"></a>
            </li>
            <li>
                <a href="contact-us" class="hover:underline">Contact</a>
            </li>
        </ul>
    </div>
</section>


@include(Theme::path('layouts.cookie'))

      <!-- jquery-3.3.1.min.js -->
      <script src="assets/js/jquery-3.3.1.min.js"></script>
      <!-- jquery.lazy.min.js -->
      <script src="assets/js/jquery.lazy.min.js"></script>
      <!-- jQuery.cookies.js -->
      <script src="assets/js/jQuery.cookies.js"></script>
      <!-- templates.js -->
      <script src="assets/js/templates.js"></script>
      <!-- script.js -->
      <script src="assets/js/script.js"></script>
</body>
</html>