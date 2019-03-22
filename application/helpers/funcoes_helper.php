<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function formataDataBr($data = null)
{
    /*
        FORMATO DO BANCO => 2017-08-05
        FORMATO BRASIL   => 05/08/2017
    */

    if ($data) {
        
        //Separa a data
        $data_funcao    = explode("-", $data);

        //Substitui o - por / e junta novamente
        $data_final     =   $data_funcao[2] .'/'. 
                            $data_funcao[1] .'/'. 
                            $data_funcao[0];
        
        return $data_final;
    }
}

function formataMoedaBr($valor = null)
{
    /*
    FORMATO DO BANCO => 10.00
    FORMATO BRASIL   => R$ 10,00
*/

    if ($valor) {
        
        //retorno o valor
        return 'R$ '. number_format($valor, 2,',','.');
    
    }
}