@extends('admin.layout.adminLayout')

@section('title')
    <title>Products - Admin Panel</title>
@endsection()

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">Products</h2>

        <a href="#" class="bg-indigo-600 text-white px-5 py-2 rounded-lg hover:bg-indigo-700 transition">
            + Add Product
        </a>
    </div>

    <!-- Search + Filter -->
    <div class="bg-white p-4 rounded-xl shadow mb-6 flex flex-col md:flex-row gap-4 md:items-center md:justify-between">
        <input type="text" placeholder="Search products..."
            class="w-full md:w-1/3 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">

        <select class="px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
            <option>All Categories</option>
            <option>Casual</option>
            <option>Formal</option>
            <option>New Arrival</option>
        </select>
    </div>

    <!-- Products Table -->
    <div class="bg-white rounded-xl shadow overflow-x-auto">
        <table class="w-full text-left">

            <thead class="bg-gray-100 text-gray-600 text-sm uppercase">
                <tr>
                    <th class="px-6 py-4">Image</th>
                    <th class="px-6 py-4">Name</th>
                    <th class="px-6 py-4">Category</th>
                    <th class="px-6 py-4">Price</th>
                    <th class="px-6 py-4">Stock</th>
                    <th class="px-6 py-4">Status</th>
                    <th class="px-6 py-4">Actions</th>
                </tr>
            </thead>

            <tbody class="divide-y">

                @for ($i = 1; $i <= 6; $i++)
                    <tr class="hover:bg-gray-50">

                        <td class="px-6 py-4">
                            <img src="{{ asset('images/shirt1.jpg') }}" class="w-14 h-14 object-cover rounded-md">
                        </td>

                        <td class="px-6 py-4 font-medium">
                            Premium Cotton Shirt {{ $i }}
                        </td>

                        <td class="px-6 py-4">
                            Casual
                        </td>

                        <td class="px-6 py-4">
                            $49.00
                        </td>

                        <td class="px-6 py-4">
                            120
                        </td>

                        <td class="px-6 py-4">
                            <span class="px-3 py-1 text-xs rounded-full bg-green-100 text-green-600">
                                Active
                            </span>
                        </td>

                        <td class="px-6 py-4 space-x-2">
                            <button class="px-3 py-1 bg-blue-100 text-blue-600 rounded hover:bg-blue-200">
                                Edit
                            </button>
                            <button class="px-3 py-1 bg-red-100 text-red-600 rounded hover:bg-red-200">
                                Delete
                            </button>
                        </td>

                    </tr>
                @endfor

            </tbody>

        </table>
    </div>
@endsection
