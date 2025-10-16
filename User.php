<?php
class User {
    private $id;
    public $login;
    public $email;
    public $firstname;
    public $lastname;

    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    // CREATE
    public function create() {
        $sql = "INSERT INTO users (login, email, firstname, lastname)
                VALUES ('$this->login', '$this->email', '$this->firstname', '$this->lastname')";
        return mysqli_query($this->conn, $sql);
    }

    // READ
    public function read($id) {
        $sql = "SELECT * FROM users WHERE id = $id";
        $result = mysqli_query($this->conn, $sql);
        if ($row = mysqli_fetch_assoc($result)) {
            $this->id = $row['id'];
            $this->login = $row['login'];
            $this->email = $row['email'];
            $this->firstname = $row['firstname'];
            $this->lastname = $row['lastname'];
            return true;
        }
        return false;
    }

    // UPDATE
    public function update($id) {
        $sql = "UPDATE users SET 
                login = '$this->login',
                email = '$this->email',
                firstname = '$this->firstname',
                lastname = '$this->lastname'
                WHERE id = $id";
        return mysqli_query($this->conn, $sql);
    }

    // DELETE
    public function delete($id) {
        $sql = "DELETE FROM users WHERE id = $id";
        return mysqli_query($this->conn, $sql);
    }
}
?>