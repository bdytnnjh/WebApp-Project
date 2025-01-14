@extends('master.layout')
@section('content')
    <div class="py-12 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-2xl font-bold">Users List</h2>
                        <a href="{{ route('users.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Add New User
                        </a>
                    </div>

                    @if(session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="overflow-x-auto">
                        <table class="min-w-full table-auto">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th class="px-6 py-3 text-left">Full Name</th>
                                    <th class="px-6 py-3 text-left">Matric No</th>
                                    <th class="px-6 py-3 text-left">Email</th>
                                    <th class="px-6 py-3 text-left">Phone</th>
                                    <th class="px-6 py-3 text-left">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                    <tr class="border-b">
                                        <td class="px-6 py-4">{{ $user->full_name }}</td>
                                        <td class="px-6 py-4">{{ $user->matric_no }}</td>
                                        <td class="px-6 py-4">{{ $user->email }}</td>
                                        <td class="px-6 py-4">{{ $user->phone_number }}</td>
                                        <td class="px-6 py-4">
                                            <a href="{{ route('users.edit', $user) }}" class="text-blue-600 hover:text-blue-900 mr-3">Edit</a>
                                            <form action="{{ route('users.destroy', $user) }}" method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('Are you sure?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.tailwindcss.com"></script>
@endsection
