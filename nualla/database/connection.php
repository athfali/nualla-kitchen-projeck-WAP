<?php
    class ConnectionDatabase {
        var $db_host = "localhost";
        var $db_username = "root";
        var $db_pass = "";
        var $db_name = "nualla";

        function __construct()
        {
            $this->connection = new mysqli(
                $this->db_host, 
                $this->db_username, 
                $this->db_pass, 
                $this->db_name
            );

            mysqli_select_db($this->connection, $this->db_name);
            
            if(mysqli_connect_error()) {
                echo "Connections is failed to connect " . mysqli_connect_error();
            }
        }

        function closeConnection() {
            return $this->connection->close();
        }
    }
    
?>