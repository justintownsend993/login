<?php
        $con = mysqli_connect("localhost", "root", "", "logindb");
        if(isset($_POST['log'])){
            $username = mysqli_real_escape_string($con, $_POST['email']);
            $passwd = mysqli_real_escape_string($con, $_POST['password']);

            if($username != "" && $passwd != ""){
                $sql = "SELECT id FROM login WHERE username = '$username' AND passwd = '$passwd'";
                $result = mysqli_query($con, $sql);
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

                $count = mysqli_num_rows($result);
                if($count == 1){
                    header("location: https://justintownsend993.github.io/portfolio/");
                }
            }
        }