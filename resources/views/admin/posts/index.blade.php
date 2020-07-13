@extends('layouts.dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>BASHBOARD</h1>
                <div class="d-flex justify-content-between align-items-center">
                    <h3>Tutti i Post</h3>
                    <a class="btn btn-small btn-outline-primary" href="{{ route('admin.posts.create') }}">+ Nuovo Post</a>
                </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Titolo</th>
                            <th>Contenuto</th>
                            <th>Slug</th>
                            <th>Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->content }}</td>
                                <td>{{ $post->slug }}</td>
                                <td>
                                    <a class="btn btn-small btn-outline-info" href="{{ route('admin.posts.show', ['post' => $post->id]) }}">
                                        Dettagli
                                    </a>
                                    <a class="btn btn-small btn-outline-warning" href="{{ route('admin.posts.edit', ['post' => $post->id]) }}">
                                        Modifica
                                    </a>
                                    <form class="d-inline-block" action="{{ route('admin.posts.destroy', ['post' => $post->id]) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" class="btn btn-small btn-outline-danger" value="Elimina">
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4">
                                    <p>Ancora nessun Post.</p>
                                    <a class="btn btn-small btn-outline-primary" href="{{ route('admin.posts.create') }}">+ Nuovo Post</a>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
