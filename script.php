<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "land_info";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $agentName = $_POST['agent_name'];
    $agentPhone = $_POST['agent_phone'];
    $ownerName = $_POST['owner_name'];
    $ownerPhone = $_POST['owner_phone'];
    $landLocation = $_POST['land_location'];
    $surveyNo = $_POST['survey_no'];
    $landSize = $_POST['land_size'];

    
    $conn = new mysqli($servername, $username, $password, $dbname);

    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    
    $sql = "INSERT INTO form_data (agent_name, agent_phone, owner_name, owner_phone, land_location, survey_no, land_size)
            VALUES ('$agentName', '$agentPhone', '$ownerName', '$ownerPhone', '$landLocation', '$surveyNo', '$landSize')";

    if ($conn->query($sql) === TRUE) {
        echo "Form submission received and saved to database!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid request method.";
}
?>
