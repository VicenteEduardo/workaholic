@extends('layouts.merge.dashboard')
@section('titulo', 'Lista de Imagens do Slideshow')

@section('content')

    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title">
                Lista de Imagens do Slideshow
            </h2>
        </div>
    </div>


    <div class="card shadow mb-4">
        <div class="card-body">

            <div class="table-responsive">
                <table class="table  datatables table-hover table-bordered" id="dataTable-1">
                    <thead class="bg-primary">
                        <tr class="text-center">
                            <th>ID</th>
                            <th>TITULO</th>
                            <th>LINK</th>
                            <th>ACÇÕES</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">

                        @foreach ($slideshows as $item)
                            <tr class="text-center text-dark">
                                <td>{{ $item->id }}</td>
                                @if ($item->title)
                                    <td>{{ $item->title }}</td>
                                @else
                                    <td>-</td>
                                @endif
                                @if ($item->link)
                                    <td>{{ $item->link }}</td>
                                @else
                                    <td>-</td>
                                @endif

                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-primary btn-sm dropdown-toggle" type="button"
                                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-clone fa-sm" aria-hidden="true"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a href='{{ url("admin/slideshow/show/{$item->id}") }}'
                                                class="dropdown-item">Detalhes</a>

                                            <a href='{{ url("admin/slideshow/edit/{$item->id}") }}'
                                                class="dropdown-item">Editar</a>
                                            <a href='{{ url("admin/slideshow/delete/{$item->id}") }}'
                                                class="dropdown-item">Eliminar</a>


                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

        </div>
    </div>



@endsection
