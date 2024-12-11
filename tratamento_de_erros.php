<?php
try {
    //code...

    echo '<h3>*** Try***</h3>';
   // $sql = 'Select *from clientes';
    //mysqli_query($sql);

    if(!file_exists('requiere_arquivo_a.php'))
    {
        throw new Exception("O Arquivo não está disponível as ".date('d/m/Y H:i'), 1);
        
    }
}

catch(Error $e){

    echo'<h3> ***Catch do Erro ***</h3>';
    echo'<p style="color:red">'.$e.'</p>';
    //armazenando erro sem DB para análises

}

catch(Exception $e){

    echo'<h3> ***Catch da Excecção***</h3>';
    echo'<p style="color:red">'.$e.'</p>';
    //armazenando erro sem DB para análises

}

finally {
    //throw $th;
    echo '<h3>***Finally**</h3>';
}


?>