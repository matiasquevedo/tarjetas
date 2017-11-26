<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Code;
use App\Email;
use App\Http\Requests\CodeRequest;

class CodesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $codes = Code::orderBy('id','ASC')->paginate(7);
        return view('code.index')->with('tags', $codes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('code.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $codes = new Code($request->all());
        $codes->save();
        dd('guardado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    //////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function CodeGet($code){
        $recive = Code::where('nombre','LIKE',"$code")->first();;
        $json = json_decode(json_encode($recive),true);
        if($json != null ){
            //dd('todo peola');
            return response()->json(array('result'=>$json));
        } else {
            dd('rayos y centellas');
        }
        
    }

    public function SendCode($email){
        dd($email);
        $datos = new Email();
        $datos->email=$email;
        $datos->save();
    }

}
