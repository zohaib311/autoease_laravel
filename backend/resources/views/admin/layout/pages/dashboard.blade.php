@extends('admin.layout.adminLayout')

@section('title')
    <title>Dashboard - Admin Panel</title>
@endsection()

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">

        <div class="bg-white p-6 rounded-xl shadow">
            <h3 class="text-gray-500">Total Products</h3>
            <p class="text-3xl font-bold mt-2">120</p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow">
            <h3 class="text-gray-500">Total Orders</h3>
            <p class="text-3xl font-bold mt-2">340</p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow">
            <h3 class="text-gray-500">Users</h3>
            <p class="text-3xl font-bold mt-2">1,200</p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow">
            <h3 class="text-gray-500">Revenue</h3>
            <p class="text-3xl font-bold mt-2">$12,430</p>
        </div>

    </div>
@endsection
