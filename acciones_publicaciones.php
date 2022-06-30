<?php 
  require_once('Publicaciones.php');
  $Publicaciones= new Publicaciones();
  $datos=$_REQUEST;
  if(isset($_FILES['file'])){
     $pub_id=$datos['aux_id'];      
     $caracteres_permitidos = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
     $longitud = 8;
     $name=substr(str_shuffle($caracteres_permitidos),0,$longitud);
     $img= $_FILES['file'];
     $ext = pathinfo($img['name'], PATHINFO_EXTENSION );
     $fullname=$name.".".$ext;
     move_uploaded_file($img["tmp_name"],"img/".$fullname);
     $Publicaciones->update_img($pub_id,$fullname);
     echo $fullname;
  }else{
    
    $user=$datos['user'];
    $desc=$datos['descripcion'];
    $estado=$datos['estado'];
    $img=null;
  
    $Publicaciones->store($user,$descripcion,$estado,$img);
  
    $last=$Publicaciones->last_id();
  
    $registro=$Publicaciones->show($last[0]['pub_id']);
    echo json_encode($registro);

  }   


  

?>