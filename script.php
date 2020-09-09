<?php

# подключение к бд mysql
$conn = mysqli_connect("localhost", "vteliczr_courses", "12qw34eR","vteliczr_courses");
$url = "https://vip.trade/courses.json";
$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
); 
# считывание json файла
$json = file_get_contents($url, false, stream_context_create($arrContextOptions));
$data = json_decode($json);

$keys = [];
$values = [];



if ($conn == false){
    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
}
else {
    # Записываем данные с JSON в массивы, чтобы отобразить на странице html
    foreach($data as $key => $value){
        array_push($keys,$key);
        array_push($values, $value);

    # Функция для сохранения записей в БД   
    // mysqli_query($conn, "INSERT INTO Courses VALUES ('$key', $value);");
}
 
}

header('Location: index.php');
?>

