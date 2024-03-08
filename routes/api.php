<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('receber/nome', function(Request $request){ 
   $nome=$request->input('name'); 
return $nome; 
}); 

Route::get('receber/nome/idade', function(Request $request){ 
   $nome=$request->input('name'); 
   $idade=$request->input('idade'); 
return 'meu nome é '. $nome .' tenho'.$idade.' anos de idade'; 
}); 

Route::get('receber/nome/ano/cidade', function(Request $request){ 
    $nome=$request->input('name'); 
    $ano=$request->input('ano'); 
    $cidade=$request->input('city'); 
return 'meu nome é ' . $nome . ' nasci no ano de ' . $ano . ' na cidade de ' . $cidade; 

}); 

Route::get('operacao', function(Request $request){ 
    $primeiroNumero=$request->input('number1'); 
    $segundoNumero=$request->input('number2'); 
    $resultado=$primeiroNumero+$segundoNumero; 
    return $resultado; 
}); 

Route::get('operacao2', function(Request $request){ 
    $primeiroNumero=$request->input('number1'); 
    $segundoNumero=$request->input('number2'); 
    $terceiroNumero=$request->input('number3'); 
    $resultado=$primeiroNumero-$segundoNumero-$terceiroNumero; 
    return $resultado; 
}); 

Route::get('operacao3', function(Request $request){ 
    $primeiroNumero=$request->input('number1'); 
    $segundoNumero=$request->input('number2'); 
    $resultado=$primeiroNumero/$segundoNumero; 
    return $resultado; 
}); 

Route::get('operacao4', function(Request $request){ 
    $primeiroNumero=$request->input('number1'); 
    $segundoNumero=$request->input('number2'); 
    $resultado=$primeiroNumero*$segundoNumero; 
    return $resultado; 
}); 

Route::get('media', function(Request $request){ 
    $prova1=$request->input('nota1'); 
    $prova2=$request->input('nota2'); 
    $prova3=$request->input('nota3'); 
    $prova4=$request->input('nota4'); 
    $prova5=$request->input('nota5'); 
    $media=$request->input('media'); 
    $resultado=$prova1+$prova2+$prova3+$prova4+$prova5/$media; 
    return $resultado; 
}); 

Route::get('operacao5', function(Request $request){ 
    $primeiroNumero=$request->input('number1'); 
    $segundoNumero=$request->input('number2'); 
    $resultado=$segundoNumero/$primeiroNumero; 
    return $resultado; 
}); 

Route::get('operacao6', function(Request $request){ 
    $primeiroNumero=$request->input('number1'); 
    $segundoNumero=$request->input('number2'); 
    $resultado=$primeiroNumero*$segundoNumero; 
    return 'o dobro do ' . $segundoNumero . ' é igual ' . $resultado; 
}); 

Route::get('area', function(Request $request){ 
    $base=$request->input('number1'); 
    $altura=$request->input('number2'); 
    $resultado= $base*$altura; 
    return $resultado; 
}); 

Route::get('desconto', function(Request $request){ 
    $precoOriginal=$request->input('price'); 
    $porcentagem=$request->input('porcentagem'); 
    $valorDesconto=$precoOriginal/100*$porcentagem; 
    $valorComDesconto=$precoOriginal-$valorDesconto; 
    return $valorComDesconto; 
}); 

Route::get('salario', function(Request $request){ 
    $salarioInicial=$request->input('pay'); 
    $aumento=$request->input('percentual'); 
    $valorAcrescido=$salarioInicial/100*$aumento; 
    $salarioFinal=$salarioInicial+$valorAcrescido; 
    return $salarioInicial . " " . $aumento . " " .  $salarioFinal; 
}); 