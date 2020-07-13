@extends('layouts.dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="d-flex align-item-center">
                    <h1>Dettagli Post</h1>
                </div>
                <div>
                    <h4>Titolo:</h4>
                    <p>{{ $post->title }}</p>
                    <hr>
                </div>
                <div>
                    <h4>Contenuto:</h4>
                    <p>{{ $post->content }}</p>
                    <hr>
                </div>
                <div>
                    <h4>Slug:</h4>
                    <p>{{ $post->slug }}</p>
                    <hr>
                </div>
                <div>
                    <h4>Data di creazione:</h4>
                    <p>{{ $post->created_at }}</p>
                    <hr>
                </div>
                <div>
                    <h4>Ultima modifica:</h4>
                    <p>{{ $post->updated_at }}</p>
                    <hr>
                </div>
            </div>
        </div>
    </div>
@endsection
