<?php
class dbController
{
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "barber";
    private $conn;

    function __construct()
    {
        $this->conn = $this->connectDB();
    }
    function connectDB()
    {
        $conn = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        return $conn;
    }
    function runQuery($query)
    {
        $result = mysqli_query($this->conn, $query);
        if( $result ){
            while ($row = mysqli_fetch_assoc($result)) {
                $resultset[] = $row;
            }
            if (!empty($resultset))
                return $resultset;
        }
        else{
            return "Error";
        }

    }

    function exec($query){
        if (mysqli_query($this->conn, $query)) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $query . "<br>" . mysqli_error($this->conn);
          }
    }
}
?>