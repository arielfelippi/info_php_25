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

    echo "$multiplicador * $i = $resultado" . "<br>";
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
        echo "O numero $numero é par! <br>";
        $contPares++;
    }
}



// Criar uma contagem regressiva de 10 - 0

// Encontrar os 5 primeiros numeros primos;
// 2, 3, 5, 7, 11, 13, 17, 19,
$contPrimos = 0;

for ($numeroAvaliado = 3; $contPrimos < 5; $numeroAvaliado++) {
    $penultimoNumero = $numeroAvaliado - 1;

    for($divisor = 2; $divisor <= $penultimoNumero; $divisor++) {

        $resto = $numero % 2;
        $divisaoExata = $resto == 0;

        if ($divisaoExata && $divisor < $penultimoNumero) {
            break;
        }

        // implementar a logica
    }
}
