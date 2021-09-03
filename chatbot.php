<?php 
    $conn = mysqli_connect("localhost", "root", "", "db_chatbot");

    if($conn){
        $user_message = mysqli_real_escape_string($conn, $_POST['messageValue']);
        $query = "SELECT * FROM chatbot WHERE message LIKE '%$user_message%'";
        $run = mysqli_query($conn, $query);
        if(mysqli_num_rows($run) > 0){
            $result = mysqli_fetch_assoc($run);
            echo $result['response'];
        }else{
            echo "Üzgünüm seni tam olarak anlayamadım!";
        }
    }else{
        echo "Bağlantı hatası!" . mysqli_connect_errno();
    }
?>