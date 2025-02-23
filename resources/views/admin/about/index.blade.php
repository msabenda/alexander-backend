@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Edit About Section</h2>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('admin.about.update', $aboutSection->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="heading">Heading</label>
            <input type="text" name="heading" id="heading" class="form-control" value="{{ $aboutSection->heading }}">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" rows="5">{{ $aboutSection->description }}</textarea>
        </div>

        <div class="form-group">
            <label for="quote">Quote</label>
            <textarea name="quote" id="quote" class="form-control" rows="3">{{ $aboutSection->quote }}</textarea>
        </div>

        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" name="author" id="author" class="form-control" value="{{ $aboutSection->author }}">
        </div>

        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" id="image" class="form-control">
            @if($aboutSection->image)
                <img src="{{ asset('storage/'.$aboutSection->image) }}" alt="current-image" class="mt-3" width="100">
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
