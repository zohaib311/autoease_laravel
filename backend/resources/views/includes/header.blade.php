<header class="bg-white shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">

            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="/" class="text-2xl font-bold text-indigo-600">
                    ShirtStore
                </a>
            </div>

            <!-- Desktop Menu -->
            <nav class="hidden md:flex space-x-8">
                <a href="{{ route('homePage') }}" class="text-gray-700 hover:text-indigo-600 transition">Home</a>
                <a href="#" class="text-gray-700 hover:text-indigo-600 transition">Shop</a>
                <a href="#" class="text-gray-700 hover:text-indigo-600 transition">Categories</a>
                <a href="{{ route('aboutPage') }}" class="text-gray-700 hover:text-indigo-600 transition">About</a>
                {{-- <a href="#" class="text-gray-700 hover:text-indigo-600 transition">About</a> --}}
                <a href="#" class="text-gray-700 hover:text-indigo-600 transition">Contact</a>
            </nav>

            <!-- Right Side -->
            <div class="hidden md:flex items-center space-x-4">

                <!-- Cart -->
                <button class="relative text-gray-700 hover:text-indigo-600">
                    🛒
                    <span class="absolute -top-2 -right-2 bg-red-500 text-white text-xs px-1 rounded-full">
                        2
                    </span>
                </button>

                <!-- Auth Buttons -->
                <a href="#" class="text-gray-700 hover:text-indigo-600">Login</a>
                <a href="#" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 transition">
                    Register
                </a>
            </div>

            <!-- Mobile Button -->
            <div class="md:hidden">
                <button id="menu-btn" class="text-gray-700 focus:outline-none">
                    ☰
                </button>

            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-white border-t">
        <div class="px-4 pt-4 pb-4 space-y-3">
            <a href="{{ route('homePage') }}" class="block text-gray-700 hover:text-indigo-600">Home</a>
            <a href="#" class="block text-gray-700 hover:text-indigo-600">Shop</a>
            <a href="#" class="block text-gray-700 hover:text-indigo-600">Categories</a>
            <a href="{{ route('aboutPage') }}" class="block text-gray-700 hover:text-indigo-600">About</a>
            <a href="#" class="block text-gray-700 hover:text-indigo-600">Contact</a>
            <hr>
            <a href="#" class="block text-gray-700 hover:text-indigo-600">Login</a>
            <a href="#"
                class="block bg-indigo-600 text-white px-4 py-2 rounded-md text-center hover:bg-indigo-700">
                Register
            </a>
        </div>
    </div>
</header>


@section('scripts')
    <script>
        const btn = document.getElementById('menu-btn');
        const menu = document.getElementById('mobile-menu');

        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>

    {{-- <script>
        document.addEventListener('livewire:navigated', () => {
            const btn = document.getElementById('menu-btn');
            const menu = document.getElementById('mobile-menu');

            if (btn) {
                btn.addEventListener('click', () => {
                    menu.classList.toggle('hidden');
                });
            }
        });
    </script> --}}
@endsection
