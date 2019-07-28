
<?php

//insert.php

include("database_connection.php");

$form_data = json_decode(file_get_contents("php://input"));

if(!empty($form_data->content))
{
 $data = array(
  ':chat_content'  => $form_data->content
 );
 $query = "
 INSERT INTO chat 
 (chat_content) VALUES (:chat_content)
 ";
 $statement = $connect->prepare($query);
 if($statement->execute($data))
 {
  $output = array(
   'message' => 'Message Sended'
  );
  echo json_encode($output);
 }
}

?>

