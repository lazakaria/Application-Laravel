<?php


namespace App\Http\Controllers;
use App\models\voitures;


use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Http\Requests\voituresRequest;


class VoituresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listvoitures = voitures::all();
        return view('voitures.index',['voitures'=> $listvoitures]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
          
          return view("voitures.creer");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response





     */


     public function search(Request $request)
     {

     $search=$request->get('search');
     $voitures=DB::table('voitures')->where('name','like','%'.$search.'%')->paginate(5);
      return view('voitures.index',['voitures'=> $listvoitures]);

}








    public function store(voituresRequest $request)
    {
        $voitures =new voitures();
        $voitures->marque=$request->input('marque');
        /**$voitures->couleur=$request->input('#e66465');*/
        $voitures->matricule=$request->input('matricule');
        $voitures->modele=$request->input('modele');
        $voitures->carburant=$request->input('carburant');
        $voitures->type=$request->input('type');
         $voitures->assurances=$request->input('assurances');
         $voitures->numassurances=$request->input('numassurances') ;
        /**$voitures->type=$request->input('debutassurance');
        $voitures->type=$request->input('finassurance');*/
       
        


        $voitures->nombreplaces=$request->input('nombreplaces');
        $voitures->kilometrage=$request->input('kilometrage');
        $voitures->puissance=$request->input('puissance');

        if($request->hasFile('photos')){
          $voitures->photos= $request->photos->store('image');
        }
        try{
            $voitures->save();
        }catch(\Exception $e) {
            dd($e);
        }
        session()->flash('success', 'La voiture est créée!!');
        return redirect ('voitures');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
     {
        $listvoitures = voitures::all();
        return view('voitures.detail',['voitures'=> $listvoitures]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
 
        $voitures=voitures::find($id);

         return view('voitures.edit',['voitures'=>$voitures]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(voituresRequest $request, $id)
    {
        $voitures=voitures::find($id);
       $voitures->marque=$request->input('marque');
        /**$voitures->couleur=$request->input('#e66465');*/
        $voitures->matricule=$request->input('matricule');
        $voitures->modele=$request->input('modele');
        $voitures->carburant=$request->input('carburant');
        $voitures->type=$request->input('type');
        /**$voitures->type=$request->input('debutassurance');
        $voitures->type=$request->input('finassurance');*/
       
        


        $voitures->nombreplaces=$request->input('nombreplaces');
        $voitures->kilometrage=$request->input('kilometrage');
        $voitures->puissance=$request->input('puissance');

        if($request->hasFile('photos')){
          $voitures->photos= $request->photos->store('image');
        }
        try{
            $voitures->save();
        }catch(\Exception $e) {
            dd($e);
        }
        session()->flash('success', 'La voiture est créée!!');
        return redirect ('voitures');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $voitures=voitures::find($id);
        $voitures->delete();
        return redirect('voitures');
    }
}
