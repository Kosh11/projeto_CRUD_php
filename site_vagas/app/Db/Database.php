<?php

//Abstraindo o processo de inserção de dados no DB

namespace App\Db;


use \PDO;
use \PDOException;

class Database{


    /**
     * Host de conexão com o banco de dados
     * @var string
     */
    const HOST = '';

    /**
     * Nome do bando de dados
     * @var string
     *  */
    const NAME = 'projeto_vagas';

    /**
     * Usuário do banco de dados
     * @var string
     */
    const USER = 'root';


    /**
     * Senha de acesso ao banco de dados
     * @var string
     */
    const PASS = '';


    /**
     * Nome da tabela a ser manipulada
     * @var string
     */
    private $table;

    /**
     * PDO Instância de conexão com o banco de dados
     * @var PDO
     */
    private $connection;


    /**
     * Define a tablea e instancia a conexão
     * @param string
     */
    public function __construct($table = null){
        $this->table= $table;
        $this->setConnection();
    }

    /**
     * Método responsável por criar uma conexão com o banco de dados
     */
    private function setConnection(){
        try{
            $this->connection = new PDO('mysql:host='.self::HOST.';dbname='.self::NAME,self::USER,self::PASS);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            die('ERROR: '.$e->getMessage()); //Apenas para exemplo
        }

    }

    /**
     * Método responsável por executar queries dentro do banco de dados
     * @param string
     * @param array
     * @return PDOstatement
     */
    public function execute ($query, $params = []){
        try{
            $statement = $this->connection->prepare($query);
            $statement->execute($params);
            return $statement;
        }catch(PDOException $e){
            die('ERROR: '.$e->getMessage()); //Apenas para exemplo
        }

    }

    /**
     * Método responsável por inserir dados no banco
     * @param array
     * @return integer
     */
    public function insert($values){

        $fields = array_keys($values);
        $binds = array_pad([], count($fields), '?');

        $query= 'INSERT INTO '.$this->table.' ('.implode(',',$fields).') VALUES ('.implode(',',$binds).')';

        //Dados da Query
        
    }
}