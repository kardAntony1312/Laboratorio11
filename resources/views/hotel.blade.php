<?php use App\Models\ListHotel; ?>

<!-- NOMBRE DE TABLA -->
<div class='container-fluid'>
    <div class="row align-item-start">
        <div class="col fs-1">Lista de Hoteles
        <a href="{{ route('hoteles.creador')}}"><button type="button" class="col btn btn-outline-primary"><i class="bi bi-clipboard-plus"></i> Registrar</button></a>
    </div>

    

</div>

<!-- TABLA -->
<div class="p-4">
    <table class="table table-striped">
        <thead>
            <tr class="card-header">
                <th scope="col">#</th> <th scope="col align-center">Título</th> <th scope="col">Categoria</th> <th scope="col">País</th> <th scope="col">Ciudad</th> <th scope="col">Dirección</th> <th scope="col">Teléfono</th> <th scope="col">Fecha de Inscripción</th> <th scope="col">Estado</th> <th scope="col" colspan="3">Opciones</th>
            </tr>
        </thead>
        <tbody>
            <?php $resultado = ListHotel::listaASC()->get(); $nro_indice =1; ?>
            @foreach($resultado as $campo)
                <tr>
                    <td scope="row">{{ $nro_indice }}</td>
                    <td>{{ $campo->Ititle }}</td> <td>{{ $campo->Istar }}</td> <td>{{ $campo->Ipais }}</td> <td>{{ $campo->Iciu }}</td> <td>{{ $campo->Idirec }}</td> <td>{{ $campo->Itelf }}</td> <td>{{ $campo->created_at }}</td> <td>{{ $campo->Istate }}</td>
                    
                    <td>

                        <div role="group" aria-label="Basic example">
                            <a href="{{ route('hoteles.edit', $campo->id)}}"><button class="btn btn btn-outline-primary btn-sm"><i class="bi bi-pencil-square"></i></button></a>
                            <a href="{{ route('promociones.index', $campo->id)}}"><button class="btn btn btn-outline-primary btn-sm" ><i class="bi bi-cart3"></i></button></a>
                            <a href="{{ route('hoteles.kill', $campo->id)}}"><button class="btn btn btn-outline-primary btn-sm" ><i class="bi bi-trash"></i></button></a>
                        </div>
                    </td>
                </tr>
                <?php $nro_indice = $nro_indice + 1;?>
            @endforeach
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
