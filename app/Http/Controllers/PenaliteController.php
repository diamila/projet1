<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Penalite;
class PenaliteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
       $penalite= Penalite::orderBy('created_at', 'asc')->paginate(5);

           
      return view('penalite/index', ['penalite' => $penalite]);
          
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('penalite/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request, ['classe' => 'required|min:3' ]);
          $this->validate($request, ['motif' => 'required|min:3' ]);
           $this->validate($request, ['montant' => 'required|min:1' ]);

        $donneFormulaire= new Penalite;//$donneFormulaire va recevoir BlogModel

        $donneFormulaire->classe = $request->classe;//$donneF->name reco $request->name
        $donneFormulaire->motif = $request->motif;
        $donneFormulaire->montant = $request->montant;
       


          $donneFormulaire->save();
        //Session::flash('success', 'ajouter avec succes');

         return redirect()->route('penalite.index');//partir vers la page qui a initialisé la requete
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
       $client= Penalite::find($id);
           
      return view('penalite/show', ['penalite' => $penalite]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

       
       $penalite= Penalite::find($id);

       return view('penalite/edit', ['penalite' => $penalite]);
       
         
    
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

           $this->validate($request, ['classe' => 'required|min:3' ]);
          $this->validate($request, ['motif' => 'required|min:3' ]);
           $this->validate($request, ['montant' => 'required|min:1' ]);


        $donneFormUpdate= Penalite::find($id);

         $donneFormUpdate->classe = $request->classe;//$donneF->name reco $request->name
        $donneFormUpdate->motif = $request->motif;
        $donneFormUpdate->montant = $request->montant;
       

        $donneFormUpdate->update();//requete pour enregistrer de nouvelles donné

        return redirect()->route('penalite.index');//partir vers la page qui a initialisé
        

    }

   
}
