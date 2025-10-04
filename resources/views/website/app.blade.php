<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <title>Shop</title>
</head>

<body class="bg-white">

    <!-- Start nav bar-->
    <nav class="w-full bg-white px-20 py-4 flex items-center gap-6 shadow-lg text-black">
        <x-website.nav-link route="website.index" class="text-xl font-bold">Shop.Co</x-website.nav-link>

        <div class="flex items-center gap-4">
            <x-website.nav-link route="website.index">Shop</x-website.nav-link>
            <x-website.nav-link route="website.index">On Sales</x-website.nav-link>
            <x-website.nav-link route="website.index">New Arrivals</x-website.nav-link>
            <x-website.nav-link route="website.index">Brand</x-website.nav-link>
        </div>

        <input type="text" placeholder="Search" class="ml-auto border px-3 py-1 rounded-xl">

        <span class="text-lg"><i class="fa-solid fa-user"></i></span>
        <span class="text-lg"><i class="fa-solid fa-cart-shopping"></i></span>
    </nav>
    <!-- End nav bar-->

    <!-- Start part one of home page -->
    <section class="bg-gray-200 py-12">
        <div class="max-w-7xl mx-auto px-4 flex flex-col lg:flex-row items-center gap-8">

            {{-- Left Content --}}
            <div class="lg:w-1/2">
                <h1 class="text-4xl lg:text-6xl font-extrabold leading-tight">
                    FIND CLOTHES<br>
                    THAT MATCHES<br>
                    YOUR STYLE
                </h1>
                <p class="mt-4 text-gray-600 max-w-lg">
                    Browse through our diverse range of meticulously crafted garments,
                    designed to bring out your individuality and cater to your sense of style.
                </p>

                <div class="mt-6">
                    <a href="#" class="inline-block bg-black text-white px-6 py-3 rounded-full">
                        Shop Now
                    </a>
                </div>

                {{-- Stats Section --}}
                <div class="mt-8 grid grid-cols-3 gap-4 text-center lg:text-left">
                    <div>
                        <div class="text-3xl font-extrabold">200+</div>
                        <div class="text-gray-500 text-sm">International Brands</div>
                    </div>
                    <div>
                        <div class="text-3xl font-extrabold">2,000+</div>
                        <div class="text-gray-500 text-sm">High-Quality Products</div>
                    </div>
                    <div>
                        <div class="text-3xl font-extrabold">30,000+</div>
                        <div class="text-gray-500 text-sm">Happy Customers</div>
                    </div>
                </div>
            </div>

            {{-- Right Image --}}
            <!-- <div class="lg:w-1/2 flex justify-end">
            <div class="rounded-2xl overflow-hidden">
                <img src="/images/hero.jpg" alt="Hero Image" class="max-h-[450px] object-cover w-full" />
            </div>
        </div> -->
        </div>
    </section>
    <!-- End part one -->

    <!-- Start brand part -->
     <section  class="bg-black py-10 ">
        <div class=" text-white font-bold text-center text-lg grid grid-cols-5 gap-9">
            <a href="">VERSCA</a>
            <a href="">ZARA</a>
            <a href="">GUCCI</a>
            <a href="">PRADA</a>
            <a href="">Calivan Klein</a>
        </div>
     </section>
    <!-- End brand part -->

    

</body>

</html>