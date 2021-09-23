<?php

namespace App\Entity;

use \App\Db\Database;

class Vaga{

    /**
     * Indentificador único da vaga
     * @var integer
     */
    public $id;

    /**
     * Titulo da vaga
     * @var string
     */
    public $titulo;

    /**
     * Descrição da vaga
     * @var string
     */
    public $descricao;

    /**
     * Define se a vaga está ativa
     * @var string(s/n)
     */
    public $ativo;

    /**
     * Data de publicação da vaga
     * @var string
     */

    public $data;


    /**
     * Método responsável por cadastrar uma nova vaga
     * @return boolean
     */
    public function cadastrar(){
        //Definir a data
        
        $this->data=date('Y-m-d H:i:s');

        //Inserir a vaga no banco
        //Atribuir o ID da vaga na instancia
        $obDatabase = new Database('vagas');
        $obDatabase->insert([
            'titulo' => $this->titulo,
            'descricao' => $this->descricao,
            'ativo' => $this->ativo,
            'data' => $this->data
        ]);

        //Retornar Sucesso


    }

}