$aluno = array(
    "nome" => "Gabriel Diniz",
    "idade" => 18,
    "curso" => "Engenharia de Software"
);

// Usando foreach para percorrer e imprimir no formato "chave: valor"
foreach ($aluno as $chave => $valor) {
    echo $chave . ": " . $valor . "<br>";
}
?>
