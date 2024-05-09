<?php
function somar(){
    $a = 12;
    $b = 13;
    $c = $a + $b;
    return $c;
}
//$result = somar();
//echo $result;

function divisao($valor1, $valor2){
    if($valor2 != 0){
        if(!is_string($valor2) && !is_bool($valor2)){
            $result = $valor1/$valor2;
            return $result;
        }else{
            return "Erro: Tipo de valor Inválido";        
        }        
    }  
    return "Erro: Impossível dividir por 0";
}

$resultado = divisao(50, 4);
//echo "Resultado: " . $resultado;

function tabuada($tabuada){
    for ($i = 0; $i <= 10; $i++){
        $result = $tabuada * $i;
        echo $tabuada . " x " . $i . " = " . $result;
        echo "<br>";
    }
}
//tabuada(5);
$vet_car = array("Gol GTA 1.8", "Monza");

function verificar($param, $vet_car){
    foreach($vet_car as $key => $value){
        if($value == $param){
            return true;
        }        
    }
    return false;
}
//echo verificar("Monza", $vet_car);
$cpf = "123465789";

function armazenarCliente($cpf){
    if(validarCPF($cpf)){
        //armazenar o cpf
        return "Registro cadastrado com sucesso!!!";
    }else{
        return "Impossível cadastrar o registro!!!";
    } 
}

function validarCPF($cpf){
    // Extrai somente os números
    $cpf = preg_replace('/[^0-9]/is', '', $cpf);
     
    // Verifica se foi informado todos os digitos corretamente
    if (strlen($cpf) != 11) {
        return false;
    }

    // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
    if (preg_match('/(\d)\1{10}/', $cpf)) {
        return false;
    }

    // Faz o calculo para validar o CPF
    for ($t = 9; $t < 11; $t++) {
        for ($d = 0, $c = 0; $c < $t; $c++) {
            $d += $cpf[$c] * (($t + 1) - $c);
        }
        $d = ((10 * $d) % 11) % 10;
        if ($cpf[$c] != $d) {
            return false;
        }
    }
    return true;
}
echo armazenarCliente($cpf);

//calculo de comissão