@extends('layouts.admin')

@section('title', 'Edit Service Section')

@section('content')
    <div class="container mx-auto my-6">
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h1 class="text-2xl font-semibold mb-4">Edit Service Section</h1>

            @if(session('success'))
                <div class="alert alert-success mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Form to edit the Service Section -->
            <form action="{{ route('admin.service.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Title Field -->
                <div class="mb-6">
                    <label for="title" class="block text-sm font-medium text-gray-700">Service Title</label>
                    <input type="text" id="title" name="title" value="{{ old('title', $service->title) }}" class="mt-2 block w-full p-2.5 border rounded-lg" required>
                    @error('title') 
                        <div class="text-red-600 text-sm mt-1">{{ $message }}</div> 
                    @enderror
                </div>

                <!-- Description Field -->
                <div class="mb-6">
                    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea id="description" name="description" rows="4" class="mt-2 block w-full p-2.5 border rounded-lg" required>{{ old('description', $service->description) }}</textarea>
                    @error('description') 
                        <div class="text-red-600 text-sm mt-1">{{ $message }}</div> 
                    @enderror
                </div>

                <!-- Image Upload Field -->
                <div class="mb-6">
                    <label for="image" class="block text-sm font-medium text-gray-700">Service Image</label>
                    <input type="file" id="image" name="image" class="mt-2 block w-full p-2.5 border rounded-lg">
                    @if ($service->image)
                        <div class="mt-4">
                            <img src="{{ asset('storage/' . $service->image) }}" alt="Current Image" class="w-32 h-32 object-cover rounded-md">
                        </div>
                    @endif
                    @error('image') 
                        <div class="text-red-600 text-sm mt-1">{{ $message }}</div> 
                    @enderror
                </div>

                <!-- Submit Button -->
                <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                    Update Service Section
                </button>
            </form>
        </div>
    </div>
@endsection
