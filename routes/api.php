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