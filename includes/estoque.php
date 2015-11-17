<?php
if(file_exists("global.php")){
   include_once './global.php';
}else if(file_existe("includes/global.php")){
    include_once './includes/global.php';
    }

    function salvar () {
        if(
                isset($post['nome']) and
                isset($post['valor']) and
                isset($post['qtd'])
                (}
                {
                $nome =_post['nome'];
                $valor =_post['valor'];
                $qtd =_post['qtd'];
   }
$SQL = "";
$preparo = conexao ()->prepare($sql); 
$preparo->execute();
if($preparo->rowcount() ==1){
}else{
    echo "erro!";
   }
}
        