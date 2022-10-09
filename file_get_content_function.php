<?php 
if(isset($_GET['name'])){
$resposne = file_get_contents("https://api.agify.io?name={$_GET['name']}"); //returns the file in a string
$data = json_decode($resposne,true);
// print_r($data);
$age = $data['age'];
// $age = $data['']
//echo $resposne;

}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Example</title>
</head>
<body>

<?php
  if(isset($age)){
    echo $age;
  }
?>
    <form>     
        <label for="name">Name</label>
        <input name="name" id="name">
        
        <button>Guess age</button>
    </form>
</body>
</html>
    