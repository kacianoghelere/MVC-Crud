<?php

/**
 * Classe de configuração da aplicação
 * em nosso MVC em PHP. Atualmente possui
 * apenas informações de configuração
 * de acesso ao banco de dados.
 */
class Config {

    /**
     * Um array de configurações possibilita a 
     * criação de modelos para múltiplos bancos
     * de dados.
     */
    public $servidor = 'localhost';
    public $usuario = 'root';
    public $driver = 'mysqli';
    public $senha = 'd0v4hk11n';
    public $porta = '';
    public $banco = 'teste';
    public $charset = 'utf8';

}
