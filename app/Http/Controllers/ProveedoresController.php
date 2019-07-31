<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\proveedor;

class ProveedoresController extends Controller
{
    public function index(){
        $Proveedor = proveedor::all();
        return view("CarpProveedor/Mostrar",compact("Proveedor"));
    }
    public function create(){
        return view("CarpProveedor/Formulario");
    }
    public function store(Request $request){
        $Proveedor = new proveedor;
        $Proveedor->nombres = $request->FormNombre;
        $Proveedor->apellidos = $request->FormApellido;
        $Proveedor->edad = $request->FormEdad;
        $Proveedor->correo_electronico = $request->FormEmail;
        $Proveedor->celular = $request->FormCelular;
        $Proveedor->telefono = $request->FormTelefono;
        $Proveedor->save();
        return redirect('Proveedores/');
    }
    public function show($id){
        /*$Proveedor = proveedor::all();
        return view("CarpProveedor/Mostrar",compact("Proveedor"));*/
    }
    public function edit($id){
        $Proveedor=proveedor::findOrFail($id);
        return view('CarpProveedor/edit', compact('Proveedor'));
    }
    public function update(Request $request, $id){
        $Proveedor=proveedor::findOrFail($id);
        $Proveedor->nombres = $request->FormNombre;
        $Proveedor->apellidos = $request->FormApellido;
        $Proveedor->edad = $request->FormEdad;
        $Proveedor->correo_electronico = $request->FormEmail;
        $Proveedor->celular = $request->FormCelular;
        $Proveedor->telefono = $request->FormTelefono;
        $Proveedor->save();
        return redirect("/Proveedores");
    }
    public function destroy($id){
        $Proveedor = proveedor::findOrFail($id);
        $Proveedor->delete();
        return redirect("/Proveedores");
    }
}
