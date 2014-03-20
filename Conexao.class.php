<?php
/**
*  Classe para conexão ao banco de dados, setando a codificação dos caracteres como UTF-8
*
*  Utilização:
*  $conexao = new Conexao();
*  $conexao->conecta('host', 'user', 'password', 'db_name');
*
*  Autor: Adriano dos Santos
*  E-mail: santosbio@gmail.com
*
*/

class Conexao
{
   public  $_con;

   function conecta($_host, $_user, $_pass, $_database)
   {
        $_con = mysql_connect($_host, $_user, $_pass) or die("Erro ao conectar ao servidor &raquo; " . mysql_error());
        $_con = mysql_select_db($_database) or die("Erro ao selecionar o Banco de Dados &raquo; " . mysql_error());
        mysql_query("SET NAMES 'utf8'");
        mysql_query('SET character_set_connection=utf8');
        mysql_query('SET character_set_client=utf8');
        mysql_query('SET character_set_results=utf8');
       return $_con;
   }
}
?>