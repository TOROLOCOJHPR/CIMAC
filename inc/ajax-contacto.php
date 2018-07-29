<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    include 'conexion.php';
    $captcha = json_decode(file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=6LdRpGYUAAAAAIZa4UzdZbFRVch3q4hWvYiFvIbt&response='.$_POST['g-recaptcha-response']));
    if ( $captcha->success ) {
        if ( isset( $_POST['email'] ) ) {
            $email = filter_var( $_POST['email'], FILTER_SANITIZE_EMAIL );
            if ( filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
                $servicio = filter_var( trim( $_POST['servicio'] ), FILTER_SANITIZE_STRING );
                $nombre = filter_var( trim( $_POST['nombre'] ), FILTER_SANITIZE_STRING );
                $telefono = filter_var( trim( $_POST['telefono'] ), FILTER_SANITIZE_STRING );
                $msg = filter_var( trim( $_POST['msg'] ), FILTER_SANITIZE_STRING );
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                $headers .= 'From: '.$email;
            
                $email_body =
                '<!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <meta http-equiv="X-UA-Compatible" content="ie=edge">
                    <title>Formulario de contacto CIMAC</title>
                </head>
                <body>
                    <p><strong>Nombre: </strong>'.$nombre.'</p>
                    <p><strong>Correo: </strong>'.$email.'</p>
                    <p><strong>teléfono: </strong>'.$telefono.'</p>
                    <strong>Mensaje: </strong>
                    <p>'.$msg.'</p>
                </body>
                </html>';
                if(mail('info@markoptic.edu.mx,jparra@markoptic.mx,ctorres@fundacionmarkoptic.org.mx,ccota@fundacionmarkoptic.org.mx', 'contacto CIMAC',$email_body,$headers)){
                    try{
                        $objCon = new Conexion;
                        $con = $objCon->conectar();
                        $sql = "INSERT INTO formulario(nombre,email,telefono,comentario) VALUES('".$nombre."','".$email."','".$telefono."','".$msg."')";
                        $con->query($sql);
                    }catch(Exception $e){
                        echo $e->getMessage();
                    }finally{
                        $con->close();
                    }
                    $response = ['status'=>'success', 'message' => 'el comentario se envio correctamente']; 
                }
                
            } else {
                $response = ['status'=>'error', 'type' => 'email', 'message' => 'el email no es valido'];
            }
        } else {
            $response = ['status'=>'error', 'type' => 'email', 'message' => 'necesita ingresar un email valido'];        
        }
    } else {
        $response = ['status'=>'error', 'type' => 'captcha', 'message' => 'el captcha es invalido'];         
    }
    echo json_encode($response);