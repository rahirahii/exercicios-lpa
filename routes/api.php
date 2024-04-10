<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use function PHPUnit\Framework\returnSelf;

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


Route::get('lista/exercicio/1', function(Request $request){
    $numero=$request->input('numero');
    if ($numero>10){
        return 'maior que 10';
    }elseif($numero==10){
        return 'igual a 10';
    }else{
        return 'menor que 10';
    }
});

Route::get('liste/exercicio/2', function(Request $request){
    $numero=$request->input('numero');
    if($numero>0){
        return 'positivo';
    }elseif($numero==0){
        return 'zero';
    }else{
        return 'negativo';
    }
});

Route::get('lista/exercicio/3',function(Request $request){
    $idade=$request->input('idade');
    if($idade>=18){
        return 'maior de idade';
    }else{
        return 'menor de idade';
    }
});

Route::get('lista/exercicio/4',function(Request $request){
    $numero=$request->input('numero');
    if($numero %2 ==0){
        return 'par';
    }else{
        return 'impar';
    }
});

Route::get('lista/exercicio/5',function(Request $request){
    $numero1=$request->input('numero1');
    $numero2=$request->input('numero2');
    if ($numero1>$numero2){
        return 'numero 1 e maior';
    }else{
        return 'numero 2 e maior';
    }
});

Route::get('lista/exercicio/6',function(Request $request){
    $numero=$request->input('numero');
    if ($numero %9 ==0){
        return 'divisivel por 9';
    }else{
        return 'nao divisivel por 9';
    }
});

Route::get('lista/exercicio/7',function(Request $request){
    $temperatura=$request->input('temperatura');
    if ($temperatura>30){
        return 'esta quente';
    }else{
        return 'nao esta quente';
    }
});

Route::get('lista/exercicio/8',function(Request $request){
    $numero=$request->input('numero');
    if ($numero %7 ==0 ){
        return 'e multiplo de 7';
    }else{
        return 'nao e multiplo de 7';
    }
});

Route::get('lista/exercicio/9',function(Request $request){
    $idade=$request->input('idade');
    if ($idade>12){
        return 'voce nao e uma crianca';
    }else{
        return 'voce e uma crianca';
    }
});

Route::get('lista/exercicio/10', function(Request $request){
    $numero=$request->input('numero');
    if ($numero>0){
        if($numero %2 !=0){
            return 'o numero e positivo e impar';
        }
    }
});
  


Route::get('lista/exercicio/11', function(Request $request){
    $numero=$request->input('numero');
    if ($numero>100){
        return 'o numero e maior que 100';
    }elseif($numero<100){
        return 'o numero e menor que 100';
    }else{
        return 'o numero e igual a 100';
    }
});


Route::get('lista/exercicio/12',function(Request $request){
    $numero=$request->input('numero');
    if ($numero %6 ==0){
        return 'divisivel por 6';
    }else{
        return 'nao divisivel por 6';
    }
});

Route::get('lista/exercicio/13',function(Request $request){
    $nome=$request->input('nome');
    if($nome=='alice'){
        return 'ola alice';
    }else{
        return '';
    }
});

Route::get('lista/exercicio/14',function (Request $request){
    $idade=$request->input('idade');
    $carteira=$request->input('carteira');
    if($idade>=18){
        if($carteira=='sim'){
            return 'pode dirigir';
        }else{
            return 'nao pode dirigir';
        }
    }
});

Route::get('lista/exercicio/15',function(Request $request){
    $numero1=$request->input('numero1');
    $numero2=$request->input('numero2');
    if($numero1 < $numero2){
        return 'menor';
    }else{
        return '';
    }
});

Route::get('lista/exercicio/16',function(Request $request){
    $nome=$request->input('nome');
    $idade=$request->input('idade');
    if ($idade>=18){
        return 'voce e maior de idade, rahi';
    }else{
        return 'voce e menor de idade, rahi';
    }
});

Route::get('lista/exercicio/17',function(Request $request){
    $numero1=$request->input('numero1');
    $numero2=$request->input('numero2');
    if($numero1==0){
        return 'nao e possivel efetuar a divisao pois o primeiro numero e zero ';
    }elseif($numero2 ==0){
        return 'nao e possivel efetuar a divisao pois o segundo numero é zero';
    }else{
        return $numero1/$numero2;
    }
});

Route::get('lista/exercicio/18',function(Request $request){
    $numero1=$request->input('numero1');
    $numero2=$request->input('numero2');
    $resultado=$numero1*$numero2;
    if ($resultado>100){
        return 'e maior que 100';
    }else{
        return 'e menor que 100';
    }
});

Route::get('lista/exercicio/19', function(Request $request){
    $numero1=$request->input('numero1');
    $numero2=$request->input('numero2');
    $soma=$numero1+$numero2;
    if($soma %2 ==0){
        return $numero1*$numero2;
    }else{
        return $numero1/$numero2;
    }

});

Route::get('atividade/1',function(Request $request){
    $nota1=$request->input('nota1');
    $nota2=$request->input('nota2');
    $nota3=$request->input('nota3');
    $media=$nota1+$nota2+$nota3/3;
    if($media>7){
        return 'aprovado';
    }else{
        return 'reprovado';
    }
});

Route::get('atividade/2',function(Request $request){
    $renda=$request->input('renda');
    if ($renda<=1900){
        return 'isento de imposto';
    }
    if ($renda>=1901){
        if ($renda<=2800)
        return 'paga 7% de imposto, ' . 'paga ' . $renda*7/100 . ' de imposto';
    }
    if($renda>=2801){
        if($renda<3700)
        return 'paga 15% de imposto, ' . 'paga ' . $renda*15/100 . ' de imposto';
    }
    if ($renda>=3700){
        return 'paga 22% de imposto, ' . 'paga ' . $renda*22/100 . ' de imposto';
    }
});

Route::get('atividade/3',function(Request $request){
    $ano=$request->input('ano');
    if($ano %4 ==0){
        return 'bissexto';
    }else{
        return 'nao bissexto';
    }
});

Route::get('atividade/4',function(Request $request){
    $valorPago=$request->input('valor');
   if($valorPago>=1000){
    return 'ganha 15% de desconto, '. 'o desconto e ' . 15/100*$valorPago . ' reais';
   }else{
    return 'nao ganha desconto';
   }
});

Route::get('atividade/5',function(Request $request){
    $peso=$request->input('peso');
    $altura=$request->input('altura');
    $calculo=($altura*$altura)/$peso;
    if($calculo<=18.5){
        return 'abaixo do peso';
    }
    if($calculo>=18.5){
        if($calculo<=24.9)
        return 'peso normal';
    }
    if($calculo>=25){
        if ($calculo<29.9)
        return 'sobrepeso';
    }
    if($calculo<=30){
        if ($calculo<34.9)
        return 'obesidade nível 1';
    }
    if($calculo>=35){
        if($calculo<39.9)
        return 'obesidade nível 2';
    }
    if($calculo>=40){
        return 'obesidade nível 3';
    }else{
        return '';
    }
});

