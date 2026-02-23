@extends('layout.app')


@section('content')
    <!-- HERO SECTION -->
    <section class="relative bg-gray-100">
        <div class="max-w-7xl mx-auto px-6 py-20 grid md:grid-cols-2 gap-10 items-center">

            <!-- Left Content -->
            <div>
                <h1 class="text-4xl md:text-6xl font-bold text-gray-900 leading-tight">
                    Elevate Your <span class="text-indigo-600">Style</span>
                </h1>
                <p class="mt-6 text-gray-600 text-lg">
                    Discover premium shirts crafted for comfort, confidence, and class.
                </p>

                <div class="mt-8 flex space-x-4">
                    <a href="#" class="bg-indigo-600 text-white px-6 py-3 rounded-lg hover:bg-indigo-700 transition">
                        Shop Now
                    </a>
                    <a href="#" class="border border-gray-300 px-6 py-3 rounded-lg hover:bg-gray-200 transition">
                        Explore
                    </a>
                </div>
            </div>

            <!-- Right Image -->
            <div>
                <img src ="{{ asset('images/hero.avif') }}" class="rounded-xl shadow-lg w-full object-cover h-[600px]">
            </div>

        </div>
    </section>

    <!-- CATEGORIES -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">

            <h2 class="text-3xl font-bold text-center mb-12">Shop by Category</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <div class="relative group">
                    <img src="https://images.unsplash.com/photo-1598033129183-c4f50c736f10"
                        class="rounded-xl h-80 w-full object-cover">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-40 rounded-xl flex items-center justify-center opacity-0 group-hover:opacity-100 transition">
                        <h3 class="text-white text-2xl font-semibold">Casual Shirts</h3>
                    </div>
                </div>

                <div class="relative group">
                    <img src="https://images.unsplash.com/photo-1541099649105-f69ad21f3246"
                        class="rounded-xl h-80 w-full object-cover">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-40 rounded-xl flex items-center justify-center opacity-0 group-hover:opacity-100 transition">
                        <h3 class="text-white text-2xl font-semibold">Formal Shirts</h3>
                    </div>
                </div>

                <div class="relative group">
                    <img src ="{{ asset('images/product_1.jfif') }}" class="rounded-xl h-80 w-full object-cover">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-40 rounded-xl flex items-center justify-center opacity-0 group-hover:opacity-100 transition">
                        <h3 class="text-white text-2xl font-semibold">New Arrivals</h3>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- TRENDING PRODUCTS -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">

            <h2 class="text-3xl font-bold text-center mb-12">Trending Now</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">

                @for ($i = 0; $i < 4; $i++)
                    <div class="bg-white rounded-xl shadow hover:shadow-lg transition p-4">
                        <img src="{{ asset('images/casuel.jfif') }}" class="rounded-lg h-64 w-full object-cover">

                        <h3 class="mt-4 font-semibold">Premium Cotton Shirt</h3>
                        <p class="text-gray-500">$49.00</p>

                        <button class="mt-4 w-full bg-indigo-600 text-white py-2 rounded-md hover:bg-indigo-700 transition">
                            Add to Cart
                        </button>
                    </div>
                @endfor

            </div>
        </div>
    </section>

    <!-- PROMO BANNER -->
    <section class="bg-indigo-600 py-16">
        <div class="max-w-7xl mx-auto px-6 text-center text-white">

            <h2 class="text-3xl md:text-4xl font-bold">
                Summer Sale 50% OFF
            </h2>
            <p class="mt-4 text-lg">
                Limited time offer on selected collections.
            </p>

            <a href="#"
                class="inline-block mt-6 bg-white text-indigo-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">
                Shop Sale
            </a>

        </div>
    </section>

    <!-- WHY US -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">

            <h2 class="text-3xl font-bold text-center mb-12">Why Choose Us</h2>

            <div class="grid md:grid-cols-3 gap-10 text-center">

                <div>
                    <div class="text-4xl mb-4">🚚</div>
                    <h3 class="font-semibold text-xl">Free Shipping</h3>
                    <p class="text-gray-500 mt-2">On all orders above $100</p>
                </div>

                <div>
                    <div class="text-4xl mb-4">💳</div>
                    <h3 class="font-semibold text-xl">Secure Payment</h3>
                    <p class="text-gray-500 mt-2">100% secure payment</p>
                </div>

                <div>
                    <div class="text-4xl mb-4">⭐</div>
                    <h3 class="font-semibold text-xl">Premium Quality</h3>
                    <p class="text-gray-500 mt-2">Crafted with finest fabrics</p>
                </div>

            </div>
        </div>
    </section>
@endsection
