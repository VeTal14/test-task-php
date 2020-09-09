<?php
$conn = mysqli_connect("localhost", "vteliczr_courses", "12qw34eR","vteliczr_courses");

$url = "records.json";
$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
); 
# считывание json файла
$json = file_get_contents($url, false, stream_context_create($arrContextOptions));
$data = json_decode($json);


if ($conn == false){
    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
}
else{
    $name = trim($_POST['name']);
    $value = trim($_POST['val']);
    $record = array($name => $value);
    array_push($data, $record);
    $jsonData = json_encode($data);
    if(file_put_contents('records.json',$jsonData)){
        mysqli_query($conn, "INSERT INTO Courses VALUES ('$name', $value);");
    }
    else echo var_dump($data);
    
    
}
 header('Location: index.php');
?>