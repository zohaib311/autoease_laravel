<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('title')
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">

    <div class="flex h-screen">

        <!-- Sidebar -->
        <aside class="w-64 bg-gray-900 text-gray-300 hidden md:flex flex-col">
            <div class="p-6 text-white text-2xl font-bold border-b border-gray-700">
                AdminPanel
            </div>

            <nav class="flex-1 p-4 space-y-2">
                <a href="{{ Route('admin') }}" class="block px-4 py-2 rounded-lg hover:bg-gray-800">📊 Dashboard</a>
                <a href="{{ Route('product') }}" class="block px-4 py-2 rounded-lg hover:bg-gray-800">👕 Products</a>
                <a href="#" class="block px-4 py-2 rounded-lg hover:bg-gray-800">📂 Categories</a>
                <a href="#" class="block px-4 py-2 rounded-lg hover:bg-gray-800">🛒 Orders</a>
                <a href="#" class="block px-4 py-2 rounded-lg hover:bg-gray-800">👤 Users</a>
            </nav>

            <div class="p-4 border-t border-gray-700">
                <a href="/"
                    class="block px-4 py-2 rounded-lg bg-indigo-600 text-white text-center hover:bg-indigo-700">
                    View Website
                </a>
            </div>
        </aside>


        <!-- Main Content -->
        <div class="flex-1 flex flex-col">

            <!-- Topbar -->
            <header class="bg-white shadow p-4 flex justify-between items-center">
                <h1 class="text-xl font-semibold">Dashboard</h1>

                <div class="flex items-center space-x-4">
                    <span class="text-gray-600">Admin</span>
                    <img src="https://i.pravatar.cc/40" class="w-10 h-10 rounded-full">
                </div>
            </header>

            <!-- Page Content -->
            <main class="flex-1 p-6 overflow-y-auto">
                @yield('content')
            </main>

        </div>

    </div>

</body>

</html>
