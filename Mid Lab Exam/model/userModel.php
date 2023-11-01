<?php
    require_once('db.php');

    function login($id, $password){
        $con = getConnection();
        $sql = "select * from users where ID='{$id}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        
        if(count($user) > 0){
            $users = [];
            while ($row = mysqli_fetch_assoc($result)) {
                array_push($users, $row);
            }

            $user = $users[0];

            session_start();
            $_SESSION['user'] = ['id' => $user['id'], 'name' => $user['name'], 'password' => $user['password'], 'userType' => $user['UserType']];

            $_SESSION['auth'] = "true";
            if ($user['userType'] == 'admin') {
                header('location: ../views/admin_home.php');
            }
            
            else {
                header('location: ../views/user_home.php');
            }
        }
        
        else {
            return false;
        }
    }

    function signup($id, $password, $name, $userType){
        $con = getConnection();
        $sql = "insert into users(ID, Password, Name, UserType) values('{$id}', '{$password}', '{$name}', '{$userType}')";
        $result = mysqli_query($con, $sql);

        if($result){
            header('location: ../views/login.html');
        }else{
            echo 'Error!';
        }
    }

    function getAllUser(){
        $con = getConnection();
        $sql = "select * from users";
        $result = mysqli_query($con, $sql);
        $users = [];
        
        while($user = mysqli_fetch_assoc($result)){
            array_push($users, $user);
        }
        
        return $users;
    }

    function changePassword() {
        session_start();
        
        if (isset($_SESSION['auth']) && $_SESSION['user']) {
            $id = $_SESSION['user']['id'];
            $password = $_SESSION['user']['password'];
        }

        $con = getConnection();
        $sql = "update users set password='{$password}' where id='{$id}';";
    }
?>