<?php

/**
 * 1-) Verificar a partir de um ano(numero) informado pelo usuario
 * Qual a sua idade e se o mesmo é maior de idade. Exibir a idade calculada 
 * e a mensagem innformando sua maioridade ou não.
 * 
 * DICA: Utilizar variáveis, date("Y") e if else.
 */

/*
 2-) Dada as notas de 4 provas e, a media para ser aprovado de ano sendo 7.
    Calcular se o aluno atingiu a media e informar se o mesmo foi aprovado.
    Dica: média aritmetica.

    Tema de casa: calcular tambem as médias: ponderada e harmonica.
*/

// $mediaEscola = 7;

// $prova1 = 9;
// $prova2 = 5;
// $prova3 = 7;
// $prova4 = 7;

// $mediaAluno = ($prova1 + $prova2 + $prova3 + $prova4) / 4;

// if ($mediaAluno >= $mediaEscola) {
//     echo "O aluno foi Aprovado com a média: $mediaAluno";
// } else if ( $mediaAluno < $mediaEscola ) {
//     echo "O aluno foi Reprovado tendo a sua média: $mediaAluno menor que a média da escola: $mediaEscola";
// }
//  else {
//     echo "aluno nao fez as provas";
// }

// Criar uma calculadora
// $valor1 = 10; 
// $valor2 = 10;
// $operador = "*";
// $resultado = 0;

// switch ($operador) {
//     case "+":
//         $resultado = $valor1 + $valor2;
//         break;
//     case "-":
//         $resultado = $valor1 - $valor2;
//         break;
//     case "*":
//         $resultado = $valor1 * $valor2;
//         break;
//     case "/":
//         $resultado = $valor1 / $valor2;
//         break;
//     default:
//         echo "Operador inválido.";
//         $resultado = 0;
//         break;
// }

// echo "O resultado da operação($valor1 $operador $valor2) é: $resultado";

// echo "<br><br>";

// if ($operador == "+") {
//     $resultado = $valor1 + $valor2;
// }
// else if ($operador == "-") {
//     $resultado = $valor1 - $valor2;
// }
// else if ($operador == "*") {
//     $resultado = $valor1 * $valor2;
// }
// else if ($operador == "/") {
//     $resultado = $valor1 / $valor2;
// }
// else {
//     echo "Operador inválido.";
//     $resultado = 0;
// }

// echo "O resultado da operação($valor1 $operador $valor2) é: $resultado";
// echo "<br><br>";



// // Ler 3 valores(A, B e C) e informar se eles sao iguais.
// $valorA = 10;
// $valorB = 10;
// $valorC = 10;

// if ($valorA == $valorB && $valorA == $valorC) {
//     echo "Os 3 valores sao iguais.";
// } else {
//     echo "Os valores sao diferentes";
// }


// echo "<br><br>";
// /* Ler 3 valores(A, B e C) e informar ao usuario qual tipo de triangulo ele forma.
//     OU se não formam nenhum triangulo. 
//     Triangulos a considerar: equilatero, isoceles e escaleno 
// */
// $valorA = 7;
// $valorB = 8;
// $valorC = 8;


// if ($valorA == $valorB && $valorA == $valorC) {
//     echo "Os valores informados formam um triangulo equilatero.";
// } 
// else if (
//     ($valorA == $valorB && $valorA > $valorC) ||
//     ($valorB == $valorC && $valorB > $valorA) ||
//     ($valorA == $valorC && $valorA > $valorB)
//     ) {
//     echo "Os valores informados formam um triangulo isoceles.";
// }
// else if (
//     ($valorA != $valorB && $valorB != $valorC) &&
//     ($valorA + $valorB > $valorC)
//     ) {
//          echo "Os valores informados formam um triangulo escaleno.";
//     }
// else {
//     echo "Os valores informados NÃO formam um triangulo";
// }


// echo "<br><br>";


$multiplicador = 5;

for ($i = 0; $i <= 10; $i++) {
    $resultado = $multiplicador * $i;

    // echo "$multiplicador * $i = $resultado" . "<br>";
}

echo "<br><br>";

// $i = 0;
// while ($i <= 10) {
    
//     $resultado = $multiplicador * $i;
//     echo "$multiplicador * $i = $resultado" . "<br>";
    
//     $i++;
// }


//  + - * / %(modulo)

$resultado = 10 / 2 ; // 5 Quociente
$resultado = 10 % 2 ; // 0 resto da divisao

$numero = 10;
$resto = $numero % 2 ; // 1
$par = $resto == 0; // verdade true




// Encontrar os 20 primeiros numeros pares e exibi-los

$contPares = 0;
for ($numero = 2; $contPares < 20; $numero++) {
    $resto = $numero % 2;
    $par = $resto == 0;

    if ($par) {
        // echo "O numero $numero é par! <br>";
        $contPares++;
    }
}

// Criar uma contagem regressiva de 10 - 0

// Encontrar os 5 primeiros numeros primos;
// 2, 3, 5, 7, 11, 13, 17, 19,
$primos = [];
$contPrimos = 0;

for ($numeroAvaliado = 3; $contPrimos < 10; $numeroAvaliado++) {
    $penultimoNumero = $numeroAvaliado - 1;
    $ehPrimo = true;

    for($divisor = 2; $divisor <= $penultimoNumero; $divisor++) {

        $resto = $numeroAvaliado % $divisor;
        $divisaoExata = $resto == 0;

        if ($divisaoExata && $divisor < $penultimoNumero) {
            $ehPrimo = false;
            break;
        }
    }

    if ($ehPrimo) {
        $contPrimos++;
        // echo "O numero: $numeroAvaliado é primo!<br>";
        $primos[] = $numeroAvaliado; //salvando primo
    }
}

/*

N / 1
...
N / N

10 % 2
10 % 3
10 % 4
10 % 5
10 % 6
10 % 7
10 % 8
10 % 9

100233 (semente)

senha123 (usuario)

secretPass

65a4sd564sa56d456s4ads65ad465as4d654sa65d4asd46sa54das

*/

// $primos = []; // array || vetor == vazio

// $primos = array(2, 3, 5, 7, 11);
// $primos = [2, 3, 5, 7, 11]; // 5 primeiros primos 
//         0, 1, 2, 3, 4

for ($i = 0; $i < count($primos); $i++) {
    $primo = $primos[$i];

    // echo "Primo: $primo" . "<br>";
}


$palavra = "radar";
$tamanho = strlen($palavra) - 1; // 3 - 1 == 2

$a=0;
$ehPalindromo = true;

for ($i = $tamanho; $i >= 0; $i--) {
    $letra_1 = $palavra[$a];
    $letra_2 = $palavra[$i];
    $letrasIguais =  $letra_1 == $letra_2; // r == r, a == a, d == d

    if (!$letrasIguais) {
        $ehPalindromo = false;
        break;
    }

    $a++;
}

// if ($ehPalindromo ) {
//     echo "A palavra $palavra é um palíndromo.";
// }
// else {
//   echo "A palavra $palavra NÃO é palíndromo.";
// }

/*
 Procurar uma palavra no meio da frase e informar se encontrou a mesma.

 $i
 E s c o l a     i n f o s e r v        c u r s o   d e   P H P .
 0 1 2 3 4 5  6  7 8 9 10 11 12 13  14  15 16 17 18  19  20 21  22 23 24 25 26 27 28

$j
 c u r s o
 0 1 2 3 4

*/

$palavraProcurada = "curso";
$frase = "Escola infoserv curso de PHP."; // curso

$tamanho = strlen($frase) - 1; // 28
$tamanhoPalavra = strlen($palavraProcurada) - 1; // 28

$tamanhoReal = $tamanho - $tamanhoPalavra;

$palavraEncontrada = false;

// percorre a frase toda, letra a letra
for ($i = 0; $i <= $tamanhoReal; $i++) {

    $letrasIguais = true;
    
    // percorre toda a palavra, letra a letra
    for ($j = 0; $j <= $tamanhoPalavra; $j++) {
        
        $indiceAtualDaFrase = $i + $j;
        // $k = $i + $j;

        $letraAtualDaFrase = $frase[$indiceAtualDaFrase];
        $letraAtualDaPalavra = $palavraProcurada[$j];

        if ($letraAtualDaFrase != $letraAtualDaPalavra) {
             $letrasIguais = false;
            break;
        } 

    }

    if ($letrasIguais) {
        $palavraEncontrada = true;
        break;
    } 
}

// if ($palavraEncontrada) {
//     echo "Encontrou a palavra procurada.";
// } else {
//     echo "Não Encontrou.";
// }


// algumas funcoes em PHP
// count(); //  obtem o tamanho de um array/objeto
// strlen($frase); //  obtem o tamanho de uma string
// substr(); // obtem uma parte de uma string
// ...

$operador = "-";
$valor1 =  10;
$valor2 = 10;

echo calculadora($valor1, $operador, $valor2);

function calculadora($valor1, $operador, $valor2) {
    switch ($operador) {
        case "+":
            $resultado = somar($valor1, $valor2);
            break;
        case "-":
            $resultado = $valor1 - $valor2;
            break;
        case "*":
            $resultado = $valor1 * $valor2;
            break;
        case "/":
            $resultado = $valor1 / $valor2;
            break;
        default:
            echo "Operador inválido.";
            $resultado = 0;
            break;
    }
}

function somar($valor1, $valor2) {
    $resultado = $valor1 + $valor2;

    return $resultado;
}



/**
 * Calendario: usuario vai informar uma data, validar essa data,
 * caso for uma data invalida, retornar a proxima data correta.
 * Ex.: 29/02/2025 => 01/03/2025
 * Ex.: 31/04/2025 => 01/05/2025
 * 
 * Funcao PHP: explode;
 */

 $data = "29/02/2025";
 $dataArray = explode("/", $data);

 $dia = $dataArray[0];
 $mes = $dataArray[1];
 $ano = $dataArray[2];

 /**
  * Ordenar os arrays abaixo em ordem decrescente (maior para menor):
  * $alfa = ["A", "B", "C", "D", "E"];
  * $numeros = [10, 20, 30, 40, 50];
  * Saida esperada: E, D, C, B, A
  * 50, 40, 30, 20, 10

  * Utilizar somente laço FOR. Não utilizar funcoes prontas do PHP para ordenacao.
  */
// $dados= []; // 0
// count($dados); // 0
// ordenarArray($dados); // asc
// ordenarArray($dados, "asc");
// ordenarArray($dados, "desc");
// ordenarArray($dados, "xyz"); // troca para asc

function ordenarArray(array $dados, string $ordem = "asc") {

    if ($ordem != "asc" && $ordem != "desc") {
        $ordem = "asc";
    }

    $tam = count($dados); // 0

    if ($tam == 0) {
        echo "o array informado esta vazio.";
        return;
    }

    for($i = 0; $i < $tam - 1; $i++) {

        for($j = 0; $j < $tam - 1; $j++) {

            $proximoIndice = $j + 1;
            $numeroAtual = $dados[$j];
            $proxNumero = $dados[$proximoIndice];

            if ($ordem == "desc") {
                if ($numeroAtual < $proxNumero) {
                    $aux = $numeroAtual;
                    $numeroAtual = $proxNumero;
                    $proxNumero = $aux;
            
                    $dados[$j] = $numeroAtual;
                    $dados[$proximoIndice] = $proxNumero;
                }
            } else {
                if ($numeroAtual > $proxNumero) {
                    $aux = $numeroAtual;
                    $numeroAtual = $proxNumero;
                    $proxNumero = $aux;

                    $dados[$j] = $numeroAtual;
                    $dados[$proximoIndice] = $proxNumero;
                }
            }
        

        } // fim FOR $j
    } // fim FOR $i

    return $dados;
} // fim funcao

// function exibirDados(array $dados) {
//     $tam = count($dados);

//     for ($i = 0; $i < $tam; $i++) {
//         echo "Array ordenado: $dados[$i]" . "<br>";
//     }

//     echo "<br>";
// }

// $alfa = ["A", "B", "C", "D", "E"];

// $numeros = [2,10, 20, 30, 60, 5,40, 50, 1, 500];

/**
 * Adicionar novo parametro na funcao de ordenarArray
 * sendo ele $ordem. ASC ou DESC
 * Se chamar a funcao com ASC => retornar os dados em crescente(asc)
 * menor => maior
 * Se chamar a funcao com DESC => retornar os dados em decrescente(desc)
 * maior => menor
 */

// $numerosOrdenados = ordenarArray($numeros);
// exibirDados($numerosOrdenados);
// $numerosOrdenados = ordenarArray($numeros, "desc");
// exibirDados($numerosOrdenados);
// $numerosOrdenados = ordenarArray($numeros);
// exibirDados($numerosOrdenados);





 /**
  * Somar os arrays/vetores abaixo:
  * $numerosA = [10, 20, 30, 40, 50];
  * $numerosB = [5, 45, 37, 2, 25];
  *
  * Saida esperada: $soma[15, 65, 67, 42, 75]

  * Utilizar somente laço FOR. Não utilizar funcoes prontas do PHP.
  */
  
$soma = [];
$numerosA = [10, 20, 30, 40, 50];
$numerosB = [5, 45, 37, 2, 25];
  
for($i=0; $i < count($numerosA); $i++) {
    
    $somaElementos =  $numerosA[$i] + $numerosB[$i];

    $soma[] = $somaElementos;
}

// $soma[15, 65, 67, 42, 75]
for($i=0; $i < count($soma); $i++) {

    echo $soma[$i] . "<br>";
}
  





  /**
  * Multiplicar os arrays/vetores abaixo:
  * $numerosA = [10, 20, 30, 40, 50];
  * $numerosB = [5, 45, 37, 2, 25];
  *
  * Saida esperada: $produto[50, 900, 1110, 80, 1250]

  * Utilizar somente laço FOR. Não utilizar funcoes prontas do PHP.
  */

