@extends('layouts.admin')

@section('title', 'Edit Mission Section')

@section('content')
    <div class="container mx-auto my-6">
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h1 class="text-2xl font-semibold mb-4">Edit Mission Section</h1>

            @if(session('success'))
                <div class="alert alert-success mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Form to edit the Mission Section -->
            <form action="{{ route('admin.mission.update') }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Mission Field -->
                <div class="mb-6">
                    <label for="mission" class="block text-sm font-medium text-gray-700">Mission</label>
                    <textarea id="mission" name="mission" rows="4" class="mt-2 block w-full p-2.5 border rounded-lg" required>{{ old('mission', $mission->mission) }}</textarea>
                    @error('mission') 
                        <div class="text-red-600 text-sm mt-1">{{ $message }}</div> 
                    @enderror
                </div>

                <!-- Vision Field -->
                <div class="mb-6">
                    <label for="vision" class="block text-sm font-medium text-gray-700">Vision</label>
                    <textarea id="vision" name="vision" rows="4" class="mt-2 block w-full p-2.5 border rounded-lg" required>{{ old('vision', $mission->vision) }}</textarea>
                    @error('vision') 
                        <div class="text-red-600 text-sm mt-1">{{ $message }}</div> 
                    @enderror
                </div>

                <!-- Team Field -->
                <div class="mb-6">
                    <label for="team" class="block text-sm font-medium text-gray-700">Team</label>
                    <textarea id="team" name="team" rows="4" class="mt-2 block w-full p-2.5 border rounded-lg" required>{{ old('team', $mission->team) }}</textarea>
                    @error('team') 
                        <div class="text-red-600 text-sm mt-1">{{ $message }}</div> 
                    @enderror
                </div>

                <!-- Submit Button -->
                <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                    Update Mission Section
                </button>
            </form>
        </div>
    </div>
@endsection
