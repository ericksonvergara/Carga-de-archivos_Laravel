@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Mis archivos') }}</div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Ver</th>
                                        <th scope="col">Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($files as $file)
                                        <tr>
                                            <th scope="row">{{ $file->id }}</th>
                                            <td>{{ $file->name }}</td>
                                            <td>
                                                <a target="_blank" href="storage/{{ Auth::id() }}/{{ $file->name }}"
                                                    class="btn btn-sm btn-outline-secundary">
                                                    Ver
                                                </a>
                                            </td>
                                            <td>
                                                <form action="{{ route('user.files.destroy', $file->id) }}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-sm btn-outline-danger">
                                                        Eliminar
                                                    </button>

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
    </div>
@endsection
