<?php
    class Note extends Database {
        private $note_title;
        private $note_description;

        function __construct($note_title, $note_description) {
            $this->note_title = $note_title;
            $this->note_description = $note_description;

            parent::__construct();
        }

        public function add_note($user_id) {
            try {
                $query = "INSERT INTO `notes` (`user_id`, `title`, `description`) VALUES (:user_id, :title, :description)";
                $statement = $this->connection->prepare($query);
                $statement->bindParam(":user_id", $user_id);
                $statement->bindParam(":title", $this->note_title);
                $statement->bindParam(":description", $this->note_description);
                $statement->execute();
                return true;
                return true;
            } catch (PDOException $e) {
                return false;
            }
        }
    }
?>