<?php

namespace App\Http\Controllers;
use App\models\assurances;

use Illuminate\Http\Request;
use App\Http\Requests\assurancesRequest;

class AssurancesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $listassurances = assurances::all();
        return view('assurances.indexassurances',['assurances'=> $listassurances]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("assurances.creerassurances");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(assurancesRequest $request)
    {
        $assurances =new assurances();
        $assurances->numassurances=$request->input('numassurances');
        $assurances->agence_assurances=$request->input('agence_assurances');
        $assurances->contact=$request->input('contact');
        $assurances->tel=$request->input('tel');
         $assurances->date_debut=$request->input('date_debut');
          $assurances->date_fin=$request->input('date_fin');

       


        $assurances->save();
        return redirect ('assurances');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         return view();    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $assurances=assurances::find($id);

         return view('assurances.editassurances',['assurances'=>$assurances]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(assurancesRequest $request, $id)
    {
        $assurances=assurances::find($id);

        
        $assurances->numassurances=$request->input('numassurances');
        $assurances->agence_assurances=$request->input('agence_assurances');
        $assurances->contact=$request->input('contact');
        $assurances->tel=$request->input('tel');
        $assurances->date_debut=$request->input('date_debut');
        $assurances->date_fin=$request->input('date_fin');

        $assurances->save();
        return redirect('assurances');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $assurances=assurances::find($id);
        $assurances->delete();
        return redirect('assurances');
    }
}
