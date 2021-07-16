@extends('adminlte::page')

@section('title', 'Memoria Ram')


@section('content_header')
<h1>Memorías RAM <a href="{{ route('ram.create') }}" class="btn btn-success btn-xs"><i class="fa fa-plus"></i></a></h1>
@stop

@section('content')
@if(session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{session('success')}}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

<div class="container">
    <div class="row">
        <div class="col-md-10 offset-1">
            <div class="card">
                <div class="card-header">
                    <h2>Listado de Memorias RAM</h2>
                </div>
                <div class="card-body">
                    <table class="table table-ms table-bordered">
                        <thead class="thead-dark text-center">
                            <th>#</th>
                            <th>Capacidad</th>
                            <th>Acción</th>
                        </thead>
                        <tbody>
                            @foreach($rams as $ram)
                            <tr class="text-center">
                                <td>{{ $ram['id']}}</td>
                                <td>{{ $ram['ram_capacity']}}</td>
                                <td>
                                    <form action="{{ route('ram.destroy',$ram->id) }}" method="POST">
                                        <a class="btn btn-primary btn-sm" href="{{ route('ram.edit',$ram->id) }}"><i
                                                class="fa fa-pen"></i></a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" id="btnEliminar"
                                            onclick="eliminar();"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="float-right">
                {!! $rams->links() !!}
            </div>
        </div>
    </div>
</div>



@endsection

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
function eliminar() {
    Swal.fire({
        title: '¿Está seguro?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(
                'Eliminado!',
                'Your file has been deleted.',
                'success'
            )
        }
    })
}
</script>
@stop