<?php

include "Database.php";

class Card {
        public ?int $id;
        public string $word;
        public string $meaning;
        public ?int $isStudied;
        private $database;
        private $table = "french_vocabulary";

        public function __construct(int $id = null, string $word = "", string $meaning = "", int $isStudied = null)
        {
            $this -> id = $id;
            $this -> word = $word;
            $this -> meaning = $meaning;
            $this -> isStudied = $isStudied;


       
        }
        
        public function getWord()
        {
            return $this ->word;
        }


        public function getMeaning()
        {
            return $this -> meaning;
        }


        public function getIsStudied()
        {
            return $this ->isStudied;
        }

        public function save(): void 
        {
        $this->database->mysql->query("INSERT INTO `{$this->table}` (`word`) VALUES ('$this->word');");
        }

        public function all()
        {
            $database = new Database();
            $query = $database->mysql->query("SELECT * FROM french_vocabulary");
            $wordsArray = $query->fetchAll();
            $wordsList = [];
            foreach ($wordsArray as $word) {
                $wordItem = new Card($word["id"], $word["word"], $word["meaning"], $word["status"]);
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
    }

 