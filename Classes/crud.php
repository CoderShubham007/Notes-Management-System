<?php
    class CRUD extends Database {
        function __construct() {
            parent::__construct();
        }

        // check email in db
        function check_email($email) {
            try {
                $query = "SELECT * FROM `users` WHERE `user_email`=:user_email";
                $statement = $this->connection->prepare($query);
                $statement->bindParam(":user_email", $email);
                $statement->execute();
                if ($statement->rowCount() > 0) {
                    return true;
                }
                return false;
            } catch (PDOEXception $e) {
                return false;
            }
        }

        // verify user 
        function verify_user($email, $password) {
            try {
                $query = "SELECT * FROM `users` WHERE `user_email`=:user_email AND `user_password`=:user_password";
                $statement = $this->connection->prepare($query);
                $statement->bindParam(":user_email", $email);
                $statement->bindParam(":user_password", $password);
                $statement->execute();
                if ($statement->rowCount() > 0) {
                    return $statement;
                }
                return false;
            } catch (PDOEXception $e) {
                return false;
            }
        }

        // get user notes 
        function get_user_notes($user_id) {
            try {
                $query = "SELECT * FROM `notes` WHERE `user_id`=:user_id";
                $statement = $this->connection->prepare($query);
                $statement->bindParam(":user_id", $user_id);
                $statement->execute();
                if ($statement->rowCount() > 0) {
                    return $statement;
                }
                return false;
            } catch (PDOEXception $e) {
                return false;
            }
        }

        function get_note_details($note_id) {
            try {
                $query = "SELECT * FROM `notes` WHERE `note_id`=:note_id";
                $statement = $this->connection->prepare($query);
                $statement->bindParam(":note_id", $note_id);
                $statement->execute();
                return $statement;
            } catch (PDOException $e) {
                return false;
            }
        }

        function update_note($note_id, $note_title, $note_description) {
            try {
                $query = "UPDATE `notes` SET `title`=:title, `description`=:description WHERE `note_id`=:note_id";
                $statement = $this->connection->prepare($query);
                $statement->bindParam(":note_id", $note_id);
                $statement->bindParam(":title", $note_title);
                $statement->bindParam(":description", $note_description);
                $statement->execute();
                return true;
            } catch (PDOEXception $e) {
                return false;
            }
        }

        // delete user note 
        function delete_note($note_id) {
            try {
                $query = "DELETE FROM `notes` WHERE `note_id`=:note_id";
                $statement = $this->connection->prepare($query);
                $statement->bindParam(":note_id", $note_id);
                $statement->execute();
                return true;
            } catch (PDOEXception $e) {
                return false;
            }
        }
    }
?>