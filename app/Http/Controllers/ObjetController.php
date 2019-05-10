<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Objet;
use Illuminate\Http\UploadedFile;
class ObjetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listp=Objet::all();

    return view('objet.index',['objet'=>$listp]);
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     // return view('objet.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
       /*$obj=new Objet();  //instentation objet  
       $obj->cin =$req->input('cin');
       $obj->nom =$req->input('nom');
       $obj->prenom =$req->input('prenom');
       $obj->type =$req->input('type');
       $obj->produit =$req->input('produit');
       $obj->tel =$req->input('tel');
       $obj->mesage =$req->input('mesage');

        if($req->hasFile('photo')){
        $obj->photo=$req->photo->store('image');}
  

       $obj->save();
        session()->flash('success','la formulaire ã été bien enregistré');
       //enregistre nouveau
       return redirect('objet');*/
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
}
