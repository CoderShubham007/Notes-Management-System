<?php
    class User extends Database {
        private $username;
        private $email;
        private $password;

        function __construct($username, $email, $password) {
            $this->username = $username;
            $this->email = $email;
            $this->password = $password;

            parent::__construct();
        }

        public function push() {
            try {
                if ($this->connection == null) {
                    return false;
                }
                $query = "INSERT INTO `users` (`user_name`, `user_email`, `user_password`, `status`) VALUES (:user_name, :user_email, :user_password, :user_status)";
                $statement = $this->connection->prepare($query);
                $statement->bindParam(":user_name", $this->username);
                $statement->bindParam(":user_email", $this->email);
                $statement->bindParam(":user_password", $this->password);
                $statement->bindValue(":user_status", "Active");
                $statement->execute();
                return true;
            } catch (Exception $e) {
                return false;
            }
        }
    }
?>