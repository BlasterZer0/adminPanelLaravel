<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = Admin::paginate(5);
        //$orderBy = Admin::orderBy("created_at", 'desc')->get();
        return view('admin.index')->with('admins',$admins);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'pregunta' => 'required|max:25',
            'numero' => 'required|gte:1',
            'activo' => 'required|boolean'
        ]);
        
        $admin = Admin::create($request->only("pregunta","numero","valor","intensidad","activo"));
        
        Session::flash('mensaje', 'Registro Creado con Exito!');
        
        return redirect()->route('admin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        return view('admin.form')->with('admin', $admin);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        $request->validate([
            'pregunta' => 'required|max:25',
            'numero' => 'required|gte:1',
            'activo' => 'required|boolean'
        ]);
        
        $admin->pregunta = $request['pregunta'];
        $admin->numero = $request['numero'];
        $admin->valor = $request['valor'];
        $admin->intensidad = $request['intensidad'];
        $admin->activo = $request->boolean(['activo']);
        $admin->save();
        
        Session::flash('mensaje', 'Registro Editado con Exito!');
        
        return redirect()->route('admin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        $admin->delete();

        Session::flash('mensaje', 'Registro Eliminado con Exito!');
        
        return redirect()->route('admin.index');
    }
}
