<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Contravention;
use App\Caisse;
use Excel;
use PDF;

class CaisseController extends Controller
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

              $caisse = DB::table('constats')
                ->leftJoin('contraventionss', 'contraventionss.id', '=', 'constats.contraventions_id')
                 ->leftJoin('users', 'users.id', '=', 'constats.users_id')
                ->select('constats.*', 'contraventionss.motif','contraventionss.montant','users.name','users.commissariat')
                 ->where('statut', '=' , 0)
                ->get();
           
             return view('caisse/index', ['caisse' => $caisse]);
    }

   

    public function create()
    {

           
             return view('caisse/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response




     */



  public function store(Request $request)
    {
         $donne= new Caisse;//$donneFormulaire va recevoir BlogModel

        $donne->ref = $request->ref;
              
              $caisse = DB::table('constats')
                ->leftJoin('contraventionss', 'contraventionss.id', '=', 'constats.contraventions_id')
                 ->leftJoin('users', 'users.id', '=', 'constats.users_id')
                ->select('constats.*', 'contraventionss.motif','contraventionss.montant','users.name','users.commissariat')
                 ->where('ref', '=' , $donne->ref)
                ->get();

           
      return view('caisse/show', ['caisse' => $caisse]);
       

    }


     
   
    



     public function edit($id)
    {
                $donneFormUpdate= Caisse::find($id);

         $donneFormUpdate->statut = 1;//$donneF->name reco $request->name
        
        $donneFormUpdate->update();

        //S  Session::flash('success', 'supprimer avec succes');

           

       
           $caisse = DB::table('constats')
                ->leftJoin('contraventionss', 'contraventionss.id', '=', 'constats.contraventions_id')
                 ->leftJoin('users', 'users.id', '=', 'constats.users_id')
                ->select('constats.*','contraventionss.motif','contraventionss.montant','users.name','users.commissariat')
                ->where('constats.id', '=' , $id)
                ->first();



                 


        return view('caisse/reçu', ['caisse' => $caisse]);
    }


    public function pdf($id){
      
     //$data['prenom_nom_C'] = 'Notes List';
     $data['caisse'] =   DB::table('constats')
                ->leftJoin('contraventionss', 'contraventionss.id', '=', 'constats.contraventions_id')
                 ->leftJoin('users', 'users.id', '=', 'constats.users_id')
                ->select('constats.*', 'contraventionss.motif','contraventionss.montant','users.name','users.commissariat')
                 ->where('constats.id', '=' , $id)
                ->get();
 
     $pdf = PDF::loadView('caisse/notes_pdf', $data);
   
     return $pdf->download('tuts_notes.pdf');
    }
   
   
}
