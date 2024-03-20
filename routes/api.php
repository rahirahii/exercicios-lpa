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
    return $salarioInicial . "-" . $aumento . "-" .  $salarioFinal; 
}); 

Route::get('pontos', function(Request $request){ 
    $valorDasCompras=$request->input('valor'); 
    $pontosGanhos=$valorDasCompras/10; 
    return $pontosGanhos; 
}); 

Route::get('comissao', function(Request $request){ 
    $valorTotal=$request->input('total'); 
    $valorComissao=$valorTotal/100*5; 
    return $valorComissao; 
}); 

Route::get('hora', function(Request $request){ 
    $dias=$request->input('day'); 
    $horas=$dias*24; 
    $minutos=$horas*60; 
    $segundos=$minutos*60; 
    return $horas . '-' . $minutos . '-' . $segundos; 
}); 

Route::get('produto', function(Request $request){ 
    $preco=$request->input('price'); 
    $quantidadeComprada=$request->input('quantidade'); 
    $precoTotal=$preco*$quantidadeComprada; 
    return $precoTotal; 
}); 


Route::get ('exemplo/condicao', function (Request $request){
    $idade=$request->input('idade');
    $retorno="";
    if($idade >= 18){
        $retorno="maior de idade";
  }
  else{
    $retorno = "menor de idade";
  }
  return $retorno;
});


Route::get('verifica/idade', function (request $request){
    $idade=$request->input('idade');
    if ($idade>18){
        return "maior de idade";
} else {
        return "menor de idade";
}
});


Route::get('verificar/par', function(Request $request){
    $numero=$request->input('numero');
    if($numero %2 ==0){
        return 'par';
    }
    else{
        return 'impar';
    }
});


Route::get('verificar/numero', function (Request $request){
    $numero=$request->input('numero');
    if ($numero>10){
        return 'maior que 10';
     } elseif ($numero=10){
        return 'igual a 10';
    }else{
        return 'menor que 10';
    }
});


Route::get('temperatura', function (Request $request){
    $temperatura=$request->input('temperatura');
    if($temperatura>30){
        return 'esta quente';
    }else{
        return 'nao esta quente';
    }

});

Route::get('positivo/negativo/zero', function(Request $request){
    $numero=$request->input('numero');
    if($numero>0){
        return 'e positivo';
    }elseif ($numero==0){
        return 'e igual a zero';
    }
    else{
        return 'e negativo';
    }
});


Route::get('numero/maior', function (Request $request){
    $numero1=$request->input('numero1');
    $numero2=$request->input('numero2');
   if($numero1>$numero2){
    return 'o numero 1 e maior';
   }else{
    return 'o numero 2 e maior';
   }
});

Route::get('numero/informado', function (Request $request){
    $numero=$request->input('numero');
    if ($numero %3 ==0){
        return $numero . ' divisivel por 3';
    }else{
        return $numero . ' nao divisivel por 3';
    }
});