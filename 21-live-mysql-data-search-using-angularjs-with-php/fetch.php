<?php

//fetch.php


$connect = new PDO("mysql:host=localhost;dbname=testing", "root", "");

$form_data = json_decode(file_get_contents("php://input"));

$query = '';
$data = array();

if(isset($form_data->search_query))
{
 $search_query = $form_data->search_query;
 $query = "
 SELECT * FROM tbl_customer 
 WHERE (CustomerName LIKE '%$search_query%' 
 OR Address LIKE '%$search_query%' 
 OR City LIKE '%$search_query%' 
 OR PostalCode LIKE '%$search_query%' 
 OR Country LIKE '%$search_query%') 
 OR Gender = '$search_query'
 ";
}
else
{
 $query = "SELECT * FROM tbl_customer ORDER BY CustomerName ASC";
}

$statement = $connect->prepare($query);

if($statement->execute())
{
 while($row = $statement->fetch(PDO::FETCH_ASSOC))
 {
  $data[] = $row;
 }
 echo json_encode($data);
}

?>

