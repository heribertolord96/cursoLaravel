<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Rol;
use App\Models\Admin\Menu;

class MenuRolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rols = Rol::orderBy('id')->pluck('nombre','id')->toArray();
        $menus= Menu::getMenu();
        $menusRols = Menu::with('roles')->get()->pluck('roles','id')->toArray();
        return view('admin.menu-rol.index',compact ('rols','menus','menusRols'));
        //return view('admin.menu-rol.index',compact('menus'));

        //dd($rols);
    }
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(Request $request)
    {
        if($request -> ajax()){
            $menus = new Menu();
            if ($request->input('estado')== 1){
                define('SCRIPT_DEBUG', true);
                $menus->find($request->input('menu_id'))->roles->attach($request->input('rol_id'));

                return response()->json(['respuesta'=> 'El rol se agregó correctamente']);
            } else{
                $menus->find($request->input('menu_id'))->roles->detach($request->input('rol_id'));
                return response()->json(['respuesta'=> 'El rol se eliminocorrectamente']);
            }
        }else{
            abort(404); 
        }
    }

   
}
