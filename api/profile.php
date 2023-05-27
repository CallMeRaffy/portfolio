<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

class capstone
{
    function getProfile()
    {
        include 'connections.php';

        $sql = 'SELECT * FROM tblprofile ORDER BY pro_lastname';
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
    }
  
}

$job = $_POST['job'];
$json = isset($_POST['json']) ? $_POST['json'] : "";

$capstone = new capstone();
switch ($job) {
    case 'getProfile':
        echo $capstone->getProfile();
        break;
   
}