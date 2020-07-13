@extends('layouts.dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="d-flex align-item-center">
                    <h1>Modifica Post</h1>
                </div>

                <form action="{{ route('admin.posts.update', ['post' => $post->id]) }}" method="post">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="titolo">Titolo</label>
                        <input type="text" name="title" class="form-control" id="titolo" value="{{ old('title', $post->title) }}" placeholder="Inserisci il Titolo del nuovo Post..." required>
                        @error('title')
                            <small class="alert-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="testo">Testo Post</label>
                        <input type="text" name="content" class="form-control" id="testo" value="{{ old('content', $post->content) }}" placeholder="Scrivi qualcosa..." required>
                        @error('content')
                            <small class="alert-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <a href="{{ route('admin.posts.index') }}" class="btn btn-outline-secondary"> Annulla </a>
                    <button type="submit" class="btn btn-primary"> Salva </button>
                </form>
            </div>
        </div>
    </div>
@endsection
