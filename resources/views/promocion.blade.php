<?php use App\Models\ListPromocion; ?>

<div class='container-fluid'>
    <div class="row align-item-start">
        <div class="col fs-1">Lista de Promociones</div>
        <hr/>
    </div>
</div>
<div class="row justify-content-center">
    <!-- seccion 1 -->
    <div class="col-3">
        <div class="card" >
            <div class=" card-header">
                <strong>Emisor :</strong> {{$hot->Ititle}}
            </div>
            <div class="container">
            <form method="POST" action="{{route('promociones.store',$hot->id)}}">
                @csrf
                <div><br/>
                    <label class="form-label">Celular: </label><br/>
                    <input class="form-control" type="text" name="txtCel" autofocus required>
                </div>
                <div><br/>
                    <label class="form-label">Promocion: </label><br/>
                    <input class="form-control" type="text" name="txtPromocion" autofocus required>
                </div>
                <div><br/>
                    <label class="form-label">Duración de la Promocion: </label><br/>
                    <input class="form-control" type="text" name="txtDuracion" autofocus required>
                </div>
                <div><br/>
                    <input class="btn btn-primary" type="submit" value="Registrar">
                </div>
                <br/>
            </form>
        </div>
    </div>
</div>
    
    <!-- sección 2 -->
    <div class="col-8">
        <div class=" card card-header">
                Lista de Promociones
        </div>            
        
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Promocion</th>
                    <th>Duracion</th>
                    <th>Celular</th>
                    <th>Enviar Mensaje</th>
                </tr>
            </thead>
            <tbody>
                <?php $nro_indice = 1; $resultados = ListPromocion::listaESP($hot->id)->get();?>
                @foreach ($resultados as $dato)
                    <tr>
                        <td>{{ $nro_indice; }}</td>
                        <td>{{ $dato->Ipromo; }}</td>
                        <td>{{ $dato->Idura; }}</td>
                        <td>{{ $dato->Icelu; }}</td>
                        <td width="15%" align="center">
                            <a class="text-primary" href="{{ route('envios.store',$dato->id)}}"><button class="btn btn btn-outline-primary btn-sm" ><i class="bi bi-cursor"></i></button></a>
                        </td>
                    </tr>
                    <?php $nro_indice = $nro_indice + 1;?>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
