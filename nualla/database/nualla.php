<?php

    include('connection.php');

    class Orderan {

        function __construct()
        {
            $this->database = new ConnectionDatabase();
        }

        function getAll($id){
            $query = "SELECT * FROM orderan WHERE deleted_at IS NULL";
            $data = mysqli_query($this->database->connection, $query);
            
            $res = [];
    
            while($item = mysqli_fetch_array($data)) {
                $res[] = $item;
            }

            $this->database->closeConnection();
    
            return $res;
        }

        function store($nama_pemesan, $nama_produk, $jumlah, $harga, $status ){
            $query = "INSERT INTO `orderan` (`nama_pemesan`, `nama_produk`, `jumlah`, `harga`, `status`) VALUES (?,?,?,?,?)";
            // echo $query;
            // exit();
            $process = $this->database->connection->prepare($query);

            if($process) {
                $process->bind_param('sssss', $nama_pemesan, $nama_produk, $jumlah, $harga, $status);
                $process->execute();
            } else {
                $error = $this->database->connection->errno . ' ' . $this->database->connection->error;
                echo $error;
            }
            
            $process->close();
            $this->database->closeConnection();            

            return true;
        }

        function store_admin($nama_pemesan, $nama_produk, $jumlah, $harga, $status ){
            $query = "INSERT INTO `orderan` (`nama_pemesan`, `nama_produk`, `jumlah`, `harga`, `status`) VALUES (?,?,?,?,?)";
            // echo $query;
            // exit();
            $process = $this->database->connection->prepare($query);

            if($process) {
                $process->bind_param('sssss', $nama_pemesan, $nama_produk, $jumlah, $harga, $status);
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
            $query = "SELECT * FROM orderan WHERE id = ?";
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

        function update($id, $nama_pemesan, $nama_produk, $jumlah, $harga, $status){
            $query = "UPDATE `orderan` SET `nama_pemesan` = ?, `nama_produk` = ?, `jumlah` = ?, `harga` = ?, `status` = ? WHERE id = ?";

            $process = $this->database->connection->prepare($query);

            if($process) {
                $process->bind_param('ssssss', $nama_pemesan, $nama_produk, $jumlah, $harga, $status, $id);
                $process->execute();
            } else {
                $error = $this->database->connection->errno . ' ' . $this->database->connection->error;
                echo $error;
            }
            
            $process->close();
            $this->database->closeConnection();            

            return true;
        }

        function delete($id){
            $query = "UPDATE `orderan` SET `deleted_at` = CURRENT_TIMESTAMP() WHERE id = ?";

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