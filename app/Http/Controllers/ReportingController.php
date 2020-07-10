<?php



namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Caisse;
use App\Penalite;
use App\User;
use Excel;
use PDF;


class ReportingController extends Controller
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
                ->get();



               

   
           
             return view('reporting/index', ['caisse' => $caisse]);
    }

   

  public function create()
    {
           $filename = date('Y-m-d');

              $caisse = DB::table('constats')
                ->leftJoin('contraventionss', 'contraventionss.id', '=', 'constats.contraventions_id')
                 ->leftJoin('users', 'users.id', '=', 'constats.users_id')
                ->select('constats.*', 'contraventionss.motif','contraventionss.montant','users.name')
                 ->where ('date_accusation', '=' , $filename)
                ->get();

           
      return view('reporting/show', ['caisse' => $caisse]);
       

    }
     


      public function statistique()
      {


          return view('reporting/statistique');

      }

   

    
   
    
}




