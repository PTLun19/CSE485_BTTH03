<?php
include("configs/DBConnection.php");
include("models/Login.php");
    class LoginService
    {
        public function getAllAdmin()
        {
            // 4 bước thực hiện
            $db = new DBConnection();
            $conn = $db -> getConnection();

            // B2. Truy vấn
            $sql = "SELECT * FROM user";
            $stmt = $conn->query($sql);

            // B3. Xử lý kết quả
            $admins = [];
            while($row = $stmt -> fetch()){
                $admin = new User($row['username'],$row['password']);
                array_push($admins, $admin);
            }

            return $admins;
        }
    }
?>