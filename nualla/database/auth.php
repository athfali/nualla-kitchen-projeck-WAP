<?php
    include('connection.php');

    class Auth {

        function __construct()
        {
            $this->database = new ConnectionDatabase();
        }

        function getAll($id){
            $query = "SELECT * FROM users WHERE deleted_at IS NULL";
            $data = mysqli_query($this->database->connection, $query);
            
            $res = [];
    
            while($item = mysqli_fetch_array($data)) {
                $res[] = $item;
            }

            $this->database->closeConnection();
    
            return $res;
        }

        function register($name, $email, $password, $level){
            $query = "INSERT INTO `users` (`name`, `email`, `password`, `level`) VALUES (?,?,?,?)";

            $process = $this->database->connection->prepare($query);

            if($process) {
                $process->bind_param('ssss', $name, $email, md5($password) ,$level);
                $process->execute();
            } else {
                $error = $this->database->connection->errno . ' ' . $this->database->connection->error;
                echo $error;
            }
            
            $process->close();
            $this->database->closeConnection();            

            return true;
        }

        function show($id){
            $result = null;
            $query = "SELECT * FROM users WHERE id = ?";
            $process = $this->database->connection->prepare($query);
            
            if($process) {
                $process->bind_param('s', $id);
                $process->execute();

                $result = $process->get_result();
                $result = $result->fetch_assoc();
            } else {
                $error = $this->database->connection->errno . ' ' . $this->database->connection->error;
                echo $error;
            }
            
            $process->close();
            $this->database->closeConnection();            

            return $result;
        }

        function login($email, $password){
            $result = null;
            $query = "SELECT * FROM `users` WHERE email = ?";
            $process = $this->database->connection->prepare($query);
            
            if($process) {
                $process->bind_param('s', $email);
                $process->execute();

                $result = $process->get_result();
                $result = $result->fetch_assoc();

                if ($result['password'] != md5($password)) {
                    return false;
                }
                
            } else {
                $error = $this->database->connection->errno . ' ' . $this->database->connection->error;
                echo $error;
            }
            
            $process->close();
            $this->database->closeConnection();            

            return $result;
        }

        function delete($id){
            $query = "UPDATE `users` SET `deleted_at` = CURRENT_TIMESTAMP() WHERE id = ?";

            $process = $this->database->connection->prepare($query);

            if($process) {
                $process->bind_param('s', $id);
                $process->execute();
            } else {
                $error = $this->database->connection->errno . ' ' . $this->database->connection->error;
                echo $error;
            }
            
            $process->close();
            $this->database->closeConnection();            

            return true;
        }
    }
?>