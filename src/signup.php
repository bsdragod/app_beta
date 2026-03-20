<?php
include('../config/database.php');
//get data
$f_name = $_POST ['fname'];
$l_name = $_POST ['lname'];
$e_mail = $_POST ['email'];
$m_phone= $_POS  ['mphone'];
$passwd = $_POST ['passwd'];
//query to insert into SQL.
$sql = "INSERT INTO users (nombre,apellido,email,telefono,contraseña) VALUES ('$f_name','$lname','$e_mail','$m_phone','$passwd')";
//execute query
pg_query($sql);
?>