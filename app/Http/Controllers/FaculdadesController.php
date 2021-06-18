<?php

namespace App\Http\Controllers;
use app\Faculdades;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller;

class FaculdadesController extends Controller {

    public function listarFaculdades() {
        $faculdades = DB::table('faculdades')
        ->select('nome','tipo','acessos')
        ->get();

        $faculdades = json_encode($faculdades);

        return $faculdades;
    }

}

?>