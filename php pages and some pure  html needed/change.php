<?php
  include('connection.php'); 

$user_email = $_POST['myusername'];
$oldpass = $_POST['old_pass'];
$newpass = $_POST['re_pass'];


//$stmt = mysqli->prepare("SELECT * FROM tblogins WHERE user_email =?");
$select = mysqli_query($conn, "SELECT * FROM your_table WHERE seuemail = '".$_POST['myusername']."' AND suasenha = '".$_POST['old_pass']."'");
//$select2 = mysqli_query($conn, "SELECT * FROM tblogins WHERE );
//roda o estatamento
//$stmt->execute([$user_email]); 
//verifica o resultado
//$user = $stmt->fetch();


//if ($user && password_verify($_POST['oldpass'], $user['oldpass'])) {
    // se o usuario e a senha existem no banco   && mysqli_num_rows($select2)
	
if(mysqli_num_rows($select) ) {	
	
	$sql = "UPDATE your_table SET suasenha = '$newpass' WHERE seuemail = '$user_email'" ;
	
	//precisa checar conexao com banco
	if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
} else {
    // se não existe
	
	//echo $select;
	//echo $select2;
	 header("Location: forbid.html");
} 

?>
