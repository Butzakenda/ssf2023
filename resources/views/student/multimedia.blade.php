@extends('layouts.app')

@section('content')
<div class="container">
    @include('partials.search-bar')
    <div class="d-flex justify-content-center mt-2">
        <h1>{{ __('Multimedia') }}</h1>
    </div>
    @Auth
        @if (Auth::user()->tipo=='Administrador')
        <div class="d-flex justify-content-center flex-wrap gap-5 mt-3">
            <h6>Upload Multimedia</h6>
        </div>
        <div class="d-flex justify-content-center flex-wrap gap-5 mt-3">
            <a href="{{route('multimedia.show')}}">
                <button type="button" class="btn btn-success">
                    Upload
                </button>
            </a>
        </div>
        @endif
    @endauth

    @foreach ($multimedia as $multi)
    <div class="d-flex justify-content-center flex-wrap gap-5 mt-5">
        <div class="card" style="width: 250px;">
            <a href="{{route('multimedia.see')}}">
                <img src="..." class="card-img-top" alt="...">
            </a>
            <div class="px-2 pt-2">
                <p class="fw-bold mb-0">Title: {{$multi->Nombres}}</p>
                <p class="mb-0">Description: {{$multi->Descripcion}}</p>
                <p class="mb-0">Type: {{$multi->Tipo}}</p>
                <p class="mb-0">Language: {{$multi->Idioma}}</p>
                <p class="mb-0">Programming Language: {{$multi->Lenguaje}}</p>
                <p class="mb-0">Technology: {{$multi->Tecnologia}}</p>
                <p class="mb-0">Price: {{$multi->Tecnologia}}</p>
            </div>
            @auth
                @if(auth::user()->tipo == 'Administrador')
                <div class="px-2 pt-2 d-flex justify-content-center gap-2">
                    <a href="{{route('multimedia.edit')}}">
                        <button type="button" class="btn btn-warning">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                            </svg>
                        </button>
                    </a>
                    <button type="button" class="btn btn-danger">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                        </svg>
                    </button>
                </div>
                @endif
            @endauth
        </div>
    </div>
    @endforeach

</div>
@endsection
