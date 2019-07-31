@extends("layouts/plantilla")
@section ("Cabecera")
@endsection
@section ("contenido")
<div class="container" style="margin-top: 50px">
    <div class="alert alert-info" role="alert">
        Tabla de proveedores
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Edad</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Celular</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Eliminar</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($Proveedor as $key)
                    <tr>
                        <th>{{$key->id}}</th>
                        <td><a href="./Proveedores/{{$key->id}}/edit">{{$key->nombres}}</a></td>
                        <td>{{$key->apellidos}}</td>
                        <td>{{$key->edad}}</td>     
                        <td>{{$key->correo_electronico}}</td>                      
                        <td>{{$key->celular}}</td>                      
                        <td>{{$key->telefono}}</td>   
                        <td>
                            <form method="post" action="./Proveedores/{{$key->id}}">
                                {{csrf_field()}} 
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-primary">Eliminar</button>
                            </form>
                        </td>                   
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a class="btn btn-primary btn-lg btn-block" href="{{url('Proveedores/create')}}">Crear</a>
        </div>
    </div>
</div>
@endsection