<?php
echo "Iniciando a calculadora:" . PHP_EOL;

echo "Digite X para fechar o programa!" . PHP_EOL;
echo "Digite + para soma" . PHP_EOL;
echo "Digite - para subtraçao" . PHP_EOL;
echo "Digite * para multiplicaçao" . PHP_EOL;    
echo "Digite / para divisao" . PHP_EOL;

$operaçao = readline ('Informe a operação desejada: ');

$num1 = readline('Informe o primeiro numero: ');
$num2 = readline('Informe o segundo numero: ');

if ($operacao == 'X') {
    echo "Saiu do programa";
    return falso;
} else if ($operacao == '+') {

  $resultado = $num1 + $num2;

} else if ($operacao == '-') {

  $resultado = $num1 - $num2;

} else if ($operacao == '*') {
 
  $resultado = $num1 * $num2;

} else if ($operacao == '/') {

  $resultado = $num1 / $num2;

}

 echo "Resultado da " . $num1 . " " . $operacao . " " . $num2 . " = " . $resultado;   