<?php
    session_start();
    require_once 'pdo.php';

    function account_insert($username, $password,$email,$address,$phone){
        $sql = "INSERT INTO users(Username,Password,Email,Addres,Phone) VALUES(?,?,?,?,?)";
        pdo_execute($sql, $username, $password, $email, $address, $phone);
    }
    function account_select( $iduser )
    {
        $sql = "SELECT * FROM `users` WHERE Id=$iduser";
        $list = pdo_query($sql);
        return $list;
    }
    function checkuser($email, $password) {
        $password = md5($password); // Mã hóa mật khẩu
        $sql = "SELECT * from tk where EMAIL= :email AND password= :password";
        try {
            $stmt = pdo_execute_acc($sql, array(':email' => $email, ':password' => $password));
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            die("Có lỗi xảy ra: " . $e->getMessage());
        }
    } 
    function check_user($email, $password){
        $conn = pdo_get_connection();
        $stmt = $conn->prepare("SELECT * FROM users where Email=:email AND Password=:password"); 
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
    
        // Fetch the user, or return null if not found
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result ? $result : null;
    }
?>