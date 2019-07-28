<?php

//insert.php

include('database_connection.php');

$form_data = json_decode(file_get_contents("php://input"));

$error = '';
$message = '';
$validation_error = '';
$name = '';
$programming_languages = '';

if(empty($form_data->person_name))
{
 $error[] = 'Name is Required';
}
else
{
 $name = $form_data->person_name;
}

if(empty($form_data->skill))
{
 $error[] = 'Programming Language is Required';
}
else
{
 foreach($form_data->skill as $language)
 {
  $programming_languages .= $language . ', ';
 }
 $programming_languages = substr($programming_languages, 0, -2);
}

$data = array(
 ':name'      => $name,
 ':programming_languages' => $programming_languages
);

if(empty($error))
{
 $query = "
 INSERT INTO tbl_name 
 (name, programming_languages) VALUES 
 (:name, :programming_languages)
 ";
 $statement = $connect->prepare($query);
 if($statement->execute($data))
 {
  $message = 'Data Inserted';
 }
}
else
{
 $validation_error = implode(", ", $error);
}

$output = array(
 'error'  => $validation_error,
 'message' => $message
);

echo json_encode($output);

?>
