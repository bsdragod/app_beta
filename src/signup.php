<?php
include('../config/database.php');
//get data
$f_name = $_POST ['fname'];
$l_name = $_POST ['lname'];
$e_mail = $_POST ['email'];
$m_phone= $_POST  ['mphone'];
$passwd = $_POST ['passwd']; 
$enc_pass = md5($passwd);
//query to insert into SQL.
$sql = "INSERT INTO users (nombre,apellido,email,telefono,contraseña) VALUES ('$f_name','$l_name','$e_mail','$m_phone','$enc_pass')";

?>
