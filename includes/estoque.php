<?php
if(file_exists("Glogal.php")){
    include_once 'Global.php';
}else if(file_exists("includes/Global.php")){
    include_once '/includes/Global.php';
}

function salvar() {
    if(
    isset($_PoST['nome']) and
    isset($_PoST['valor']) and
    isset($_PoST['qtd']) 
   ){
    $nome =($_PoST['nome']);
    $valor =($_PoST['valor']);
    $qtd =($_PoST['qtd']);
    $dtval =(isset($_PoST['dtval']) ? $_POST['dtval'] : "");
      
    $SQL = "INSERT INTO produto (nome,valor,quantidade,data_de_validade) values (:nome, :valor, :qtd, :dtval):";
    $preparo = conexao()->preparo($SQL);
    $preparo->bindValue("nome", $nome);
    $preparo->bindValue("valor", $valor);
    $preparo->bindValue("qtd", $qtd);
    $preparo->bindValue("dtval", $dtval);
    $preparo->execute();
    if($preparo->rowCount () == 1) {
        echo"Sucesso!";
    }else{
        echo "Erro";
        
    }
    }
}

function Listar(){
    $SQL = "SELECT =  FROM produto WHERE 1;";
    $preparo = conexao() ->prepare($SQL);
    $preparo ->execute();
    while ($linha = $preparo->fetch(PDO::FETCH_ASSOC)) {
        echo"<tr>";
        echo "<td> <a href='?excluir=".$linha['idProduto']."'>Excluir</a></td>";
        echo"<td>" .$linha['idProduto']."</td>";
        echo"<td>" .$linha['nome']."</td>";
        echo"<td>" .$linha['valor']."</td>";
        echo"<td>" .$linha['quantidade']."</td>";
        echo"<td>" .$linha['data_de_validade']."</td>";
        echo"</tr>";
    }
} 
 
 
 

global.php 
<?php
session_start () ;

function conexao() {
    $user ="root";
    $passwd="usbw";
    $dbname ="mydb";
    $host= "127.0.0.1:3307";
    $pdo = new PDO("mysql:host={$host};dbname={$dbname}", $user, $passwd);
    return $pdo;
       
}

function exclui_por_id()
   if(isset($_get['excluir'])){
       $id = $_get['excluir'];
       $sql = "delete from 'produto' where idproduto=:idproduto;=;
       $prepare = "conexao()->prepare($sql);
       $prepare->bindvalue(";idproduto", $id); 
       $prepare-> execute ()==1){
       if($prepare-> rowcount()==1){
             echo 'sucesso!';
       }else{
             echo 'deu merda!';
       }
   }
   }
