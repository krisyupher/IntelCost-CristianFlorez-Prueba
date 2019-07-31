@extends("layouts/plantilla")

@section ("Cabecera")
@endsection
@section ("contenido")
<div class="container">
     <div class="alert alert-info" role="alert">
        Crear Proveedor
    </div>
    <div class="row">
        <div class="col">
            <form method="post" action="../Proveedores">
                <div class="form-group">
                    {{csrf_field()}} 
                    <label for="exampleFormControlInput1">nombre</label>
                    <input type="text" class="form-control" name="FormNombre" placeholder="Francisco" required>
                    <label for="exampleFormControlInput1">apellido</label>
                    <input type="text" class="form-control" name="FormApellido" placeholder="Lopez" required>
                    <label for="exampleFormControlInput1">edad</label>
                    <input type="number" class="form-control" name="FormEdad" placeholder="24" required>
                    <label for="exampleFormControlInput1">correo electronico</label>
                    <input type="email" class="form-control" name="FormEmail" placeholder="Francisco@gmail.com"required>
                    <label for="exampleFormControlInput1">celular</label>
                    <input type="number" class="form-control" name="FormCelular" placeholder="3139996666" required>
                    <label for="exampleFormControlInput1">telefono</label>
                    <input type="number" class="form-control" name="FormTelefono" placeholder="7655555" >
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Agregar</button>
                    <button type="reset" class="btn btn-primary">Limpiar</button>
                </div>
            </form>
            @if(count($errors)>0)
                @foreach($errors->all() as $error)
                    {{$error}}
                @endforeach
            @endif
        </div>
    </div>
</div>
@endsection