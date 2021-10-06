<?php

namespace AppControllers;

use Core Controller;
use App Models Veiculo;

class modeloveiculoController extends Controller {
    
    public function index() {
        $modelo = new Veiculo();
        $modelos = $modelo->getAll();

        $this->view('veiculolist', ['modelos' => $modelos]);
    }

    public function name(Request $request) {
        $modeloName = $request->get();
        $modelovv = new Veiculo();
        $modelov = $modelovv->getBy(['Descricao', 'idcliente' , 'idveiculo' => $modeloName, $idcliente, $idveiculo]);

        $this->view('veiculomodel', ['modelos' => $modelov]);
    }
}
</?