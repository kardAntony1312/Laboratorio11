<div class="card">
    <h5 class="card-header">Eliminar un Hotel!</h5>
    <div class="card-body">
        
        <p class="card-text">
            <div class="alert alert-danger" role="alert">
                Estas seguro de eliminar este registro!!!

                <table class="table table-sm table-hover table-bordered" style="background-color: white">
                    <thead>
                        <tr class="card-header">
                            <th scope="col align-center">Título</th> <th scope="col">Categoria</th> <th scope="col">País</th> <th scope="col">Ciudad</th> <th scope="col">Dirección</th> <th scope="col">Teléfono</th> <th scope="col">Fecha de Inscripción</th> <th scope="col">Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                    <td>{{ $registro->Ititle }}</td> <td>{{ $registro->Istar }}</td> <td>{{ $registro->Ipais }}</td> <td>{{ $registro->Iciu }}</td> <td>{{ $registro->Idirec }}</td> <td>{{ $registro->Itelf }}</td> <td>{{ $registro->created_at }}</td> <td>{{ $registro->Istate }}</td>
                        </tr>
                    </tbody>
                </table>
                <hr>
                <form action="{{ route('hoteles.destroy', $registro->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="{{ route("hoteles.index") }}" class="btn btn-info" >
                        <span class="fas fa-undo-alt"></span> Regresar
                    </a>
                    <button class="btn btn-danger">
                        <span class="fas fa-user-times"></span> Eliminar 
                    </button>
                </form>
            </div>
        </p>
        
    </div>
</div>