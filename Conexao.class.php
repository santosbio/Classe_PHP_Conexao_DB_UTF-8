<?php
/**
*  Classe para conexão ao banco de dados, setando a codificação dos caracteres como UTF-8
*
*  Autor: Adriano dos Santos
*  E-mail: santosbio@gmail.com
*
*/

class Conexao
{
   private $_host = ''; // Host do deu DB. Provavelmente, localhost
   private $_user = ''; // User do seu DB
   private $_pass = ''; // Senha do seu DB
   private $_database = ''; // Nome do seu DB
   public  $_con;
 
   function __construct()
   {
       $this->conecta();
   }
 
   function conecta()
   {
        $_con = mysql_connect($this->_host, $this->_user, $this->_pass) or die("Erro ao conectar ao servidor &raquo; " . mysql_error());
        $_con = mysql_select_db($this->_database) or die("Erro ao selecionar o Banco de Dados &raquo; " . mysql_error());
        mysql_query("SET NAMES 'utf8'");
        mysql_query('SET character_set_connection=utf8');
        mysql_query('SET character_set_client=utf8');
        mysql_query('SET character_set_results=utf8');
       return $_con;
   }
}
?>