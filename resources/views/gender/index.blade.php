@extends('adminlte::page')

@section('title', 'Gender')


@section('content_header')
<h1>Genders <a href="{{ route('gender.create') }}" class="btn btn-success btn-sm"><i class="fa fa-plus"></i></a></h1>
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
                    <h2>Listado de gender</h2>
                </div>
                <div class="card-body">
                    <table class="table table-ms table-bordered">
                        <thead class="thead-dark">
                            <th>#</th>
                            <th>Nombre gender</th>
                            <th>Acción</th>
                        </thead>
                        <tbody>
                            @foreach($genders as $gender)
                            <tr>
                                <td>{{ $gender['id']}}</td>
                                <td>{{ $gender['gender_name']}}</td>
                                <td>
                                    <form action="{{ route('gender.destroy',$gender->id) }}" method="POST">
                                        <a class="btn btn-primary"
                                            href="{{ route('gender.edit',$gender->id) }}">Editar</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" id="btnEliminar"
                                            onclick="eliminar();">Eliminar</button>
                                    </form>
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