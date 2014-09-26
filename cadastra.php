<?php 
// Cria uma variável que terá os dados do erro
$erro = false;
 

if ( !isset( $_POST ) || empty( $_POST ) ) {
    $erro = 'Nada foi preenchido.';
}
 

foreach ( $_POST as $chave => $valor ) {
    
    $$chave = trim( strip_tags( $valor ) );
    
    
    if ( empty ( $valor ) ) {
        $erro = 'Existem campos em branco.';
    }
}
 

if ( ( ! isset( $idade ) || ! is_numeric( $idade ) ) && !$erro ) {
    $erro = 'A idade deve ser um valor número.';
}
 

 

if ( ( ! isset( $email ) || ! filter_var( $email, FILTER_VALIDATE_EMAIL ) ) && !$erro ) {
    $erro = 'Envie um email válido.';
}
 

if ( $erro ) {
    echo $erro;
} else {
    
    
    echo "<h1> Veja os dados enviados</h1>";
    
    foreach ( $_POST as $chave => $valor ) {
        echo '<b>' . $chave . '</b>: ' . $valor . '<br><br>';
    }
}

echo $nome; 
 echo $email; 
 echo $datanascimento;  
echo $sexo;  
echo $profissao; 
echo $telefone; 
echo $endereco;
echo $cidade; 
 echo $estado; 
 echo $cep; 

?>