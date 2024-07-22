<?php
    include("connection.php");

    if(isset($_POST['sendButton'])){
        if(
            strlen($_POST['Name']) >= 1 &&
            strlen($_POST['Email']) >= 1 &&
            strlen($_POST['PhoneNumber']) >= 1 &&
            strlen($_POST['textArea']) >= 1
            ){
                $name = trim($_POST['Name']);
                $email = trim($_POST['Email']);
                $phone = trim($_POST['PhoneNumber']);
                $textArea = trim($_POST['textArea']);

                $dateTime = date('d/m/y H:i:s');
                $query = "INSERT INTO registers(name, email, phone, message, dateTime)
                        value('$name', '$email', '$phone', '$textArea', '$dateTime')";
                $result = mysqli_query($connect, $query);

                if($result){
                    ?>
                        <h3>El registro se guardo en la base de datos</h3>
                    <?php
                }else{
                    ?>
                        <h3>El registro <b>NO</b> se guardó en la base de datos</h3>
                    <?php
                }
        }else{
            ?>
                <h3>Completa todos los campos</h3>
            <?php
        }
    }
?>