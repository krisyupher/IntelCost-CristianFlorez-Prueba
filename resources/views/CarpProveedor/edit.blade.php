@extends("layouts/plantilla")

@section ("Cabecera")
@endsection
@section ("contenido")
<div class="container">
    <div class="alert alert-info" role="alert">
        Editar Proveedor
    </div>
    <div class="row">
        <div class="col">
            <form method="post" action="../{{$Proveedor->id}}">
                @method('put')
                <div class="form-group">
                    {{csrf_field()}} 
                    <label for="exampleFormControlInput1">nombre</label>
                    <input type="text" class="form-control" name="FormNombre" value="{{$Proveedor->nombres}}" required>
                    <label for="exampleFormControlInput1">apellido</label>
                    <input type="text" class="form-control" name="FormApellido" value="{{$Proveedor->apellidos}}" required>
                    <label for="exampleFormControlInput1">edad</label>
                    <input type="number" class="form-control" name="FormEdad" value="{{$Proveedor->edad}}" required>
                    <label for="exampleFormControlInput1">correo electronico</label>
                    <input type="email" class="form-control" name="FormEmail" value="{{$Proveedor->correo_electronico}}" required>
                    <label for="exampleFormControlInput1">celular</label>
                    <input type="number" class="form-control" name="FormCelular" value="{{$Proveedor->celular}}" required>
                    <label for="exampleFormControlInput1">telefono</label>
                    <input type="number" class="form-control" name="FormTelefono" value="{{$Proveedor->telefono}}">
                </div>
                <div class="form-group"> 
                    <button type="submit" class="btn btn-primary">Agregar</button>
                    <input type="hidden" name="_method" value="PUT">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection