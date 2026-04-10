<?php
include ('../config/database.php');
//getdata
$f_name = $_POST ['fname'];
$l_name = $_POST ['lname'];
<<<<<<< HEAD
$m_phone = $_POST ['mphone'];
$e_mail= $_POST ['email'];
$p_sswd= $_POST ['passwd'];
$enc_pass = md5($p_sswd);
//  FEATURE 4
$enc_pass = password_hash($p_sswd, PASSWORD_DEFAULT);

// VALIDAR CONTRASEÑAS
if($p_sswd != $confirm){
    echo "Las contraseñas no coinciden";
    exit;
}

//  FEATURE 1
$check_email = pg_query($local_conn, "SELECT * FROM users WHERE email='$e_mail'");
if(pg_num_rows($check_email) > 0){
    echo "El correo ya está registrado";
    exit;
}
=======
$e_mail = $_POST ['email'];
$m_phone= $_POST  ['mphone'];
$passwd = $_POST ['passwd']; 
$enc_pass = md5($passwd);
//query to insert into SQL.
$sql = "INSERT INTO users (nombre,apellido,email,telefono,contraseña) VALUES ('$f_name','$l_name','$e_mail','$m_phone','$enc_pass')";
>>>>>>> b331016821d326c9c6dd2396cc00c7a965d480e0

// FEATURE 2
$check_phone = pg_query($local_conn, "SELECT * FROM users WHERE telefono='$m_phone'");
if(pg_num_rows($check_phone) > 0){
    echo "El teléfono ya está registrado";
    exit;
}

//  INSERT
$sql = "INSERT INTO users (nombre, apellido, telefono, email, contrasena)
VALUES ('$f_name','$l_name','$m_phone','$e_mail','$enc_pass')";

// FEATURE 3
pg_query($local_conn, $sql);
pg_query($supa_conn, $sql);

echo "Registro exitoso";

?>