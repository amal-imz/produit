<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\cvRequest;
use App\Cv;
use Auth;

//use App\Http\Requests\cvRequest;
use Illuminate\Http\UploadedFile;

class CvController extends Controller
{
  public function __construct()
 {
  return $this->middleware('auth');
 }





 public function index()

    {

  // $listp=Cv::all();//affiche ts   
   $listp=Cv::where('user_id',Auth::user()->id)->get();// chaque user 
     /*if(Auth::user()->id_admin){
         $listp =cv::all();
        }else
            {
              $listp = Auth::user()->cvs;
            }*/

    return view('cv.index',['cvs'=>$listp]);
    }




     public function create()
    {
        return view('cv.create');
    }


    public function ajoute()
    {
        return view('cv.ajoute');
    }



 public function store(cvRequest $req)
    {
       $cv=new Cv();  //instentation objet  
       $cv->user_id=Auth::user()->id;
       $cv->cin =$req->input('cin');
       $cv->nom =$req->input('nom');
       $cv->prenom =$req->input('prenom');
       $cv->type =$req->input('type');
       $cv->produit =$req->input('produit');
       $cv->tel =$req->input('tel');
       $cv->mesage =$req->input('mesage');

        if($req->hasFile('photo')){
        $cv->photo=$req->photo->store('image');}
  

       $cv->save();
        session()->flash('success','la formulaire ã été bien enregistré');
       //enregistre nouveau
       return redirect('cvs');
    }

     public function edit($id)
    {
       $cv = Cv::find($id);

      $this->authorize('update' ,$cv);

       return view('cv.edit',['cv'=>$cv]);
    }

       public function update(cvRequest $req,$id)
    {
       $cv =Cv::find($id);

       $cv->cin =$req->input('cin');
       $cv->nom =$req->input('nom');
       $cv->prenom =$req->input('prenom');
       $cv->type =$req->input('type');
       $cv->produit =$req->input('produit');
       $cv->tel =$req->input('tel');
       $cv->mesage =$req->input('mesage');
     if($req->hasFile('photo')){
        $cv->photo=$req->photo->store('image');}
  
       $cv->save();
       return redirect('cvs');

    }


 /*  public function show($id)
     {

      return view('cv.show',['id'=>$id]); 
    
     }*/


 public function show($id)
     {

     $cv = Cv::find($id);

      $this->authorize('show' ,$cv);

       return view('cv.show',['cv'=>$cv]);
      
    
     }





    //physical
     public function destroy(Request $req,$id)
    {
       $cv =Cv::find($id);
       $cv->delete();
       return redirect('cvs');
    }   

  



}
