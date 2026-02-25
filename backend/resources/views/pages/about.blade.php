@extends('layout.app')

@section('title')
    <title>About</title>
@endsection()

@section('content')
    <!-- HERO -->
    <section class="relative bg-gray-900 text-white">
        <div class="absolute inset-0">
            <img src="{{ asset('images/hero.avif') }}" class="w-full h-full object-cover opacity-40">
        </div>

        <div class="relative max-w-7xl mx-auto px-6 py-32 text-center">
            <h1 class="text-4xl md:text-6xl font-bold">
                About ShirtStore
            </h1>
            <p class="mt-6 text-lg text-gray-200 max-w-2xl mx-auto">
                Crafting confidence through premium quality shirts designed for modern style.
            </p>
        </div>
    </section>


    <!-- OUR STORY -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

            <div>
                <img src="{{ asset('images/casual.jfif') }}" class="rounded-xl shadow-lg w-full h-[450px] object-cover">
            </div>

            <div>
                <h2 class="text-3xl font-bold mb-6">Our Story</h2>
                <p class="text-gray-600 leading-relaxed mb-4">
                    ShirtStore was founded with a simple idea — create shirts that combine
                    premium quality fabric with timeless design. We believe clothing is not
                    just fashion, it’s identity.
                </p>
                <p class="text-gray-600 leading-relaxed">
                    Every piece is carefully designed to ensure comfort, durability,
                    and confidence. From casual wear to formal elegance, we bring
                    modern craftsmanship to your wardrobe.
                </p>
            </div>

        </div>
    </section>


    <!-- MISSION & VISION -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6 text-center">

            <h2 class="text-3xl font-bold mb-12">Our Mission & Vision</h2>

            <div class="grid md:grid-cols-2 gap-10">

                <div class="bg-white p-8 rounded-xl shadow">
                    <div class="text-4xl mb-4">🎯</div>
                    <h3 class="text-xl font-semibold mb-4">Our Mission</h3>
                    <p class="text-gray-600">
                        To deliver high-quality, stylish shirts that empower
                        individuals to express confidence and personality.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-xl shadow">
                    <div class="text-4xl mb-4">🌍</div>
                    <h3 class="text-xl font-semibold mb-4">Our Vision</h3>
                    <p class="text-gray-600">
                        To become a globally trusted fashion brand known
                        for excellence, innovation, and timeless style.
                    </p>
                </div>

            </div>

        </div>
    </section>


    <!-- STATS SECTION -->
    <section class="py-20 bg-indigo-600 text-white">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-4 gap-10 text-center">

            <div>
                <h3 class="text-4xl font-bold">10K+</h3>
                <p class="mt-2">Happy Customers</p>
            </div>

            <div>
                <h3 class="text-4xl font-bold">500+</h3>
                <p class="mt-2">Premium Designs</p>
            </div>

            <div>
                <h3 class="text-4xl font-bold">50+</h3>
                <p class="mt-2">Countries Served</p>
            </div>

            <div>
                <h3 class="text-4xl font-bold">5★</h3>
                <p class="mt-2">Customer Rating</p>
            </div>

        </div>
    </section>


    <!-- TEAM SECTION -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6 text-center">

            <h2 class="text-3xl font-bold mb-12">Meet Our Team</h2>

            <div class="grid md:grid-cols-3 gap-10">

                <div>
                    <img src="{{ asset('images/shirt1.jpg') }}"
                        class="rounded-full w-40 h-40 mx-auto object-cover shadow-lg">
                    <h3 class="mt-6 font-semibold text-lg">John Smith</h3>
                    <p class="text-gray-500">Founder & CEO</p>
                </div>

                <div>
                    <img src="{{ asset('images/shirt2.jpg') }}"
                        class="rounded-full w-40 h-40 mx-auto object-cover shadow-lg">
                    <h3 class="mt-6 font-semibold text-lg">Emma Johnson</h3>
                    <p class="text-gray-500">Creative Director</p>
                </div>

                <div>
                    <img src="{{ asset('images/shirt3.jpg') }}"
                        class="rounded-full w-40 h-40 mx-auto object-cover shadow-lg">
                    <h3 class="mt-6 font-semibold text-lg">David Lee</h3>
                    <p class="text-gray-500">Head of Design</p>
                </div>

            </div>

        </div>
    </section>


    <!-- CTA -->
    <section class="bg-gray-900 text-white py-20 text-center">
        <div class="max-w-4xl mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold">
                Ready to Upgrade Your Style?
            </h2>
            <p class="mt-6 text-gray-300">
                Explore our latest collections and find your perfect fit today.
            </p>

            <a href="#" class="inline-block mt-8 bg-indigo-600 px-8 py-3 rounded-lg hover:bg-indigo-700 transition">
                Shop Now
            </a>
        </div>
    </section>
@endsection()
