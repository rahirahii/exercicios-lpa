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

Route::get('operacao2', function(Request $request){ 
     $primeiroNumero=$request->input('number1'); 
     $segundoNumero=$request->input('number2'); 
     $terceiroNumero=$request->input('number3'); 
     $resultado=$primeiroNumero-$segundoNumero-$terceiroNumero; 
     return $resultado; 
}); 

