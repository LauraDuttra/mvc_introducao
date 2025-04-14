<?php

//declara uma função chamada exibir Alunos que recebe o parametro $alunos.
//esse parametro é esperado com um array com informações dos alunos
function exibirAlunos($alunos){


//imprime na tela um título h2 2 abre uma lista não ordenada ul.
echo "<h2> Lista de Alunos:</h2> <ul>";

//inicia um loop foreach, que percorre cada idem do array $alunos.
//cada item é armazenado temporiareamente na variavel $alunos
foreach ($alunos as $aluno){
// para cada aluno, imprime um item na lista (li).
//exibe o nome do aluno e sua idade, formatados como "Nome - Idade anos".
echo "<li>{$aluno['nome']} - {$aluno['idade']} anos</li>";
};

echo "</ul>";

}

?>
