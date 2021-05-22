<?php

include "Database.php";

class Card {
        public ?int $id;
        public string $word;
        public string $meaning;
        public ?int $isStudied;
        private $database;
        public $table = "french_vocabulary";

        public function __construct(string $word = "", string $meaning = "", int $id = null, int $isStudied = null)
        {
            
            $this -> word = $word;
            $this -> meaning = $meaning;
            $this -> id = $id;
            $this -> isStudied = $isStudied;

            if (!$this->database) {
            $this->database = new Database();
        }
       
        }


        public function getWord()
        {
            return $this ->word;
        }


        public function getMeaning()
        {
            return $this -> meaning;
        }

        public function getId()
        {
            return $this -> id;
        }

        public function getIsStudied()
        {
            return $this ->isStudied;
        }

        public function save(): void 
        {
        $this->database->mysql->query("INSERT INTO `{$this->table}` (`word`, `meaning`) VALUES ('$this->word', '$this->meaning');");
        }

        public function all()
        {
            $database = new Database();
            $query = $database->mysql->query("SELECT * FROM french_vocabulary");
            $wordsArray = $query->fetchAll();
            $wordsList = [];
            foreach ($wordsArray as $word) {
                $wordItem = new Card($word["word"], $word["meaning"], $word["id"], $word["status"]);
                array_push($wordsList, $wordItem);
               
            }
            return $wordsList;
        } 

        public function randomWord()
        {

            $database = new Database();
            $query = $database->mysql->query("SELECT * FROM french_vocabulary");
            $wordsArray = $query->fetchAll();
            $randomWord = $wordsArray[array_rand($wordsArray)];
            
            return $randomWord;
        } 

        function findById($id){
            $query = $this ->database -> mysql -> query("SELECT * FROM {$this->table} WHERE `id` = {$id}");
            $result = $query -> fetchAll();
            $word = new Card($result[0]['word'],$result[0]['meaning'], $result[0]['id'], $result[0]['status']);

            return $word;
        }

        function delete(){
            $this -> database -> mysql -> query("DELETE FROM {$this -> table} WHERE {$this -> table}.`id` = {$this-> id}");
        }

       
    }

    
    
 