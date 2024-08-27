
// codigo em php comeca com <?php   e ?> 
// todas as variavies comecam com $
// $soma $diferenca $divisao $produto
// sempre coloca a chave na linha de baixo
// para print usa-se echo
// tem que ter o formulario html para coletar as informaçoes
// POST esvia os dados para o servidor
// switch case default é tipo um if mais limpo e organizado
// while do 
/* condicional em php
 $idade = 18;

if ($idade >= 18) {
    echo "Você é maior de idade.";
} else {
    echo "Você é menor de idade.";
}
 */

 /* loop em php
 for ($i = 0; $i < 5; $i++) {
    echo $i . "\n";
}

// Loop while
$i = 0;
while ($i < 5) {
    echo $i . "\n";
    $i++;
}
*/
/* exemplo de programa completo
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Soma</title>
</head>
<body>
    <form method="post">
        <label for="num1">Número 1:</label>
        <input type="text" id="num1" name="num1">
        <br>
        <label for="num2">Número 2:</label>
        <input type="text" id="num2" name="num2">
        <br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtém os números do formulário
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        // Calcula a soma
        $soma = $num1 + $num2;

        // Exibe o resultado
        echo "A soma dos números é: " . $soma;
    }
    ?>
</body>
</html>
*/