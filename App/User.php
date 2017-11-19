<?php

    require_once 'App/DB.php';

    class User
    {
        private $db;

        public function getUser($id){

            $db = new DB();
            $sql = "SELECT * FROM members WHERE reg_no='$id'";
            $disp = mysqli_query($db->getConnection(), $sql);
            
            $result = mysqli_fetch_array($disp, MYSQLI_ASSOC);

            return $result;
        }

        public function addUser($data) {

            $db = new DB();            
            $sql = "INSERT INTO members VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            
            $state = mysqli_prepare($db->getConnection(), $sql);
            $state->bind_param("issississss", $data['reg_no'], $data['fname'], $data['lname'], $data['age'], $data['dob'], $data['address'], $data['tel_no'], $data['email'], $data['achs'], $data['services'], $data['donations']);
            $state->execute();
            
            $result = mysqli_query($db->getConnection(), $sql);
        }
    }

?>