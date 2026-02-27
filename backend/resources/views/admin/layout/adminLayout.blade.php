<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('title')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="bg-gray-100">

    <div class="flex h-screen overflow-hidden">

        <!-- Sidebar -->
        <aside id="sidebar"
            class="fixed md:relative z-40 w-64 bg-gray-900 text-gray-300
           transform transition-all duration-300 ease-in-out
           flex flex-col h-full">

            <div class="p-6 text-white text-2xl font-bold border-b border-gray-700">
                AdminPanel
            </div>

            <nav class="flex-1 p-4 space-y-2">
                <a href="{{ route('admin') }}" wire:navigate class="block px-4 py-2 rounded-lg hover:bg-gray-800">📊 Dashboard</a>
                <a href="{{ route('products') }}" wire:navigate class="block px-4 py-2 rounded-lg hover:bg-gray-800">👕 Products</a>
                <a href="#" class="block px-4 py-2 rounded-lg hover:bg-gray-800">📂 Categories</a>
                <a href="#" class="block px-4 py-2 rounded-lg hover:bg-gray-800">🛒 Orders</a>
                <a href="#" class="block px-4 py-2 rounded-lg hover:bg-gray-800">👤 Users</a>
            </nav>

            <div class="p-4 border-t border-gray-700">
                <a href="{{ route('homePage') }}" wire:navigate
                    class="block px-4 py-2 rounded-lg bg-indigo-600 text-white text-center hover:bg-indigo-700">
                    View Website
                </a>
            </div>
        </aside>


        <!-- Overlay (Mobile Only) -->
        <div id="overlay" class="fixed inset-0 bg-black/50 hidden z-30 md:hidden"></div>


        <!-- Main Content -->
        <div class="flex-1 flex flex-col w-full">

            <!-- Topbar -->
            <header class="bg-white shadow p-4 flex justify-between items-center">

                <div class="flex items-center space-x-4">

                    <!-- Toggle Button -->
                    <button onclick="toggleSidebar()"
                        class="text-gray-600 hover:text-indigo-600 text-2xl focus:outline-none">
                        ☰
                    </button>

                    <h1 class="text-xl font-semibold">Dashboard</h1>
                </div>

                <div class="flex items-center space-x-4">
                    <span class="text-gray-600 hidden sm:block">Admin</span>
                    <img src="https://i.pravatar.cc/40" class="w-10 h-10 rounded-full">
                </div>
            </header>

            <!-- Page Content -->
            <main class="flex-1 p-6 overflow-y-auto bg-gray-100">
                @yield('content')
            </main>

        </div>

    </div>


    @yield('scripts')

    @livewireScripts
    <script>
        (() => {
            const initSidebar = () => {
                const sidebar = document.getElementById('sidebar');
                const overlay = document.getElementById('overlay');

                if (!sidebar || !overlay) {
                    return;
                }

                window.toggleSidebar = () => {
                    if (window.innerWidth < 768) {
                        sidebar.classList.toggle('-translate-x-full');
                        overlay.classList.toggle('hidden');
                    } else {
                        sidebar.classList.toggle('w-64');
                        sidebar.classList.toggle('w-0');
                        sidebar.classList.toggle('overflow-hidden');
                    }
                };

                overlay.onclick = () => {
                    sidebar.classList.add('-translate-x-full');
                    overlay.classList.add('hidden');
                };

                if (window.innerWidth < 768) {
                    sidebar.classList.add('-translate-x-full');
                }
            };

            document.addEventListener('DOMContentLoaded', initSidebar);
            document.addEventListener('livewire:navigated', initSidebar);
        })();
    </script>

</body>

</html>
