<br/>
<div class='container-fluid '>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Editar datos:
                </div>
                <form class="p-4" method="POST" action="{{route('hoteles.update',$hotel->id)}}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Título: </label>
                        <input type="text" class="form-control" name="txtTITULO" required 
                        value="{{ $hotel->Ititle }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Categoria: </label>
                        <input type="text" class="form-control" name="txtSTAR" autofocus required
                        value="{{ $hotel->Istar }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">País: </label>
                        <input type="text" class="form-control" name="txtPAIS" autofocus required
                        value="{{ $hotel->Ipais }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Ciudad: </label>
                        <input type="text" class="form-control" name="txtCIUDAD" autofocus required
                        value="{{ $hotel->Iciu }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Dirección: </label>
                        <input type="text" class="form-control" name="txtDIRECCION" autofocus required
                        value="{{ $hotel->Idirec }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Fecha de Inscripción: </label>
                        <input type="date" class="form-control" name="txtDATE" autofocus required
                        value="{{ date_format($hotel->created_at, 'Y-m-d') }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Celular: </label>
                        <input type="number" class="form-control" name="txtTELF" autofocus required
                        value="{{ $hotel->Itelf }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Estado: </label>
                        <input type="text" class="form-control" name="txtSTATE" autofocus required
                        value="{{ $hotel->Istate }}">
                    </div>
                    <div class="d-grid">
                        <input type="submit" class="btn btn-primary" value="Editar">
                    </div>
                </form>
            </div>
            <br/>
        </div>
    </div>
</div>
