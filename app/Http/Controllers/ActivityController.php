<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\IlluminateSupportFacadesAuth;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class ActivityController extends Controller {


public function insertForm(){
return view('newActivity');
} 

public function insert(Request $request){

$id_user = Auth::id();
$nome = $request->input('nome');
$localita = $request->input('localita');
$indirizzo = $request->input('indirizzo');
$lingua = $request->input('lingua');
$data = $request->input('data');
$durata = $request->input('durata');
$categoria = $request->input('categoria');
$descrizione_breve = $request->input('descrizione_breve');
$n_max_partecipanti = $request->input('n_max_partecipanti');
$ora_start = $request->input('ora_start');
$data=array('nome'=>$nome,"localita"=>$localita,"indirizzo"=>$indirizzo,"lingua"=>$lingua, "data"=>$data, "id_user"=>$id_user,"durata"=>$durata,"categoria"=>$categoria,"descrizione_breve"=>$descrizione_breve
,"n_max_partecipanti"=>$n_max_partecipanti,"ora_start"=>$ora_start);

DB::table('attivita')->insert($data);

return redirect('home');

}

}