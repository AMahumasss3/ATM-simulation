

<?php
session_start();
// 1 - verficar a quantidade de tentativas
        // caso seja maior ou igual a 3 bloqueia durante 3horas;
        // senão faz a verficação
        



$usuario=['conta'=>110102048342,'senha'=>12345];

if($_POST ['conta']==""){
    $_SESSION['conta-vazia']= "Digite o numero da conta";
    return header('location:index.php');
}else if($_POST ['senha']==""){
    $_SESSION['conta-vazia']="Digite a senha";
    $_SESSION['old-conta']=$_POST['conta'];
    return header('location:index.php');
}

if($_POST ['conta'] != '110102048342' || $_POST['senha'] != '12345' ){
    if ( !isset( $_SESSION[ 'tentativas' ] ) ) {
        $_SESSION[ 'tentativas' ] = [ 
            'conta' => '110102048342',
            'senha' => '12345',
            'data' => '',
            'erros' => 0,
            'status' => true,
        ];
    }
    
    
    $hora = new DateTime( date('d/m/Y h:i:s') );
    if ( !$_SESSION[ 'tentativas' ][ 'status' ] ) {
        $boqueio = new DateTime( $_SESSION[ 'tentativas' ][ 'data' ] );
        if ( (date_diff( $hora, $bloqueio )->i)<= 3 ) {
            $_SESSION[ 'mensagem' ] = 'Conta temporariamente bloqueada, volte a tentar em '.( 3-(date_diff( $hora, $bloqueio )->i)).' minutos';
        } else {
            $_SESSION[ 'tentativas' ][ 'status' ] = true;
            $_SESSION[ 'tentativas' ][ 'data' ] = '';
        }
        return header( 'location:../index.php' );
    }else if ($_SESSION[ 'tentativas' ][ 'conta' ] != $_POST[ 'conta' ] ) {
        if ( $_SESSION[ 'tentativas' ][ 'erros' ] >= 3 ) {
            $_SESSION[ 'mensagem' ] = 'Errou a senha 3 vezes, a conta sera bloqueada por um periodo de 3 horas';
            $_SESSION[ 'tentativas' ][ 'status' ] = false;
            $_SESSION[ 'tentativas' ][ 'data' ] = date( 'd/m/Y h:i:s' );
            return header( 'location:../index.php' );
        }else{
            $_SESSION[ 'tentativas' ][ 'erros' ]++;
            $_SESSION[ 'mensagem' ] = "Senha ou Conta incorrecta, faltam apenas ".(3-$_SESSION[ 'tentativas' ][ 'erros' ])." tentativas";
            return header( 'location:../index.php' );
        }
    }
}else{
    return isset( $_SESSION[ 'tentativas' ]['status']) ? header('location:menu.php') : header('location:menu.php');
}   