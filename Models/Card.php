<?php

include "Database.php";

class Card {
        public int $id;
        public string $word;
        public string $meaning;
        public int $isStudied;
        public static $database;
        private static $table = "french_vocabulary";

        public function __construct(int $id = null, string $word, string $meaning, int $isStudied = 0)
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

        public static function all()
        {
            $database = new Database();
            $query = $database->mysql->query("SELECT * FROM french_vocabulary");
            $wordsArray = $query->fetchAll();
            $wordsList = [];
            foreach ($wordsArray as $word) {
                $wordItem = new self($word["id"], $word["word"], $word["meaning"], $word["status"]);
                array_push($wordsList, $wordItem);
               
            }
            return $wordsList;
        } 
    }

    $test = Card::all(); 
    print_r($test);

   