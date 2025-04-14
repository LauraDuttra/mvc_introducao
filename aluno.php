<?php
//defina uma classe chamada aluno
class Aluno{
    //Criar uma propriedade privada (Encapsulament0) chamada $alunos.
    //Essa propriedade é um array que armazena dados e alunos.
    //Cada aluno é apresentado por um array associativo com nome e idade.
    private $alunos = [
        ['nome' => 'João', 'idade' => 16],
        ['nome' => 'João', 'idade' => 16],
        ['nome' => 'João', 'idade' => 16],
    ];

//define um método público chamado listarAlunos.
//esse método serve para "retornar" o conteúdo do array $alunos.
public function listarAlunos(){
    return $this->alunos;
}

}


?>