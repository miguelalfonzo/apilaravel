<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Postre;
use DB;
class PostreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function mostrar(){

         return view('postre.index');
    }


    public function index()
    {
        $recurso=Postre::all();
        if($recurso){
            
            return response()->json($recurso);
          
        }else{
            return response()->json(["user_message"=>"no se encontro el recurso"],400);
        }
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('postre.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
          $recurso=Postre::create($request->all());
           
          return response()->json(["user_message"=>"creado satisfactoriamente"],200);
          
        } catch (\Exception $e) {
            Log::critical($e->getMessage());
            return response()->json(["user_message"=>"algo salio mal"],500);
        }

       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
     try {
         $recurso=Postre::find($id);
         if(!$recurso){
            return response()->json(["user_message"=>"no se encontro"],400);
         }else{
            return response()->json($recurso);
         }
     } catch (\Exception $e) {
         return response()->json(["user_message"=>"ocurrio un problema"],500);
     }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $detalle=Postre::find($id);
        return view('postre.edit',compact('detalle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       try {
           $recurso=Postre::find($id);
           if(!$recurso){
            return response()->json(["user_message"=>"no se encontro"],400);
           }else{
            $recurso->update($request->all());
            return response()->json(["user_message"=>"actualizado"],200);
           }
       } catch (\Exception $e) {
        Log::critical($e->getMessage());
           return response()->json(["user_message"=>"hubo un problema"],500);
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       try {
           $recurso=Postre::find($id);
           if(!$recurso){
            return response()->json(["user_message"=>"no se encontro"],400);
           }else{
            $recurso->delete();
            return response()->json(["user_message"=>"eliminado satisfactoriamente"],200);
           }
       } catch (\Exception $e) {
           Log::critical($e->getMessage());
           return response()->json(["user_message"=>"hubo un problema"],500);
       }    
    }
}
