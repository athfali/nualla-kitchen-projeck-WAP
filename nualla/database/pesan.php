<?php

    include('connection.php');

    class orderan {

        function __construct()
        {
            $this->database = new ConnectionDatabase();
        }

        function getAll($no_telp){
            $query = "SELECT * FROM message WHERE deleted_at IS NULL";
            $data = mysqli_query($this->database->connection, $query);
            
            $res = [];
    
            while($item = mysqli_fetch_array($data)) {
                $res[] = $item;
            }

            $this->database->closeConnection();
    
            return $res;
        }

        function pesan($nama, $alamat, $no_telp, $pesan, $no_pesanan){
            $query = "INSERT INTO `message` (`nama`, `alamat`, `no_telp`, `pesan`, `no_pesanan`) VALUES (?,?,?,?,?)";
            // echo $query;
            // exit();
            $process = $this->database->connection->prepare($query);

            if($process) {
                $process->bind_param('sssss', $nama, $alamat, $no_telp, $pesan, $no_pesanan);
                $process->execute();
            } else {
                $error = $this->database->connection2->errno . ' ' . $this->database->connection->error;
                echo $error;
            }
            
            $process->close();
            $this->database->closeConnection();            

            return true;
        }

        function show($no_pesanan){
            $result = null;
            $query = "SELECT * FROM message WHERE $no = ?";
            $process = $this->database->connection->prepare($query);
            
            if($process) {
                $process->bind_param('s', $no);
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

    }
    
   
?>