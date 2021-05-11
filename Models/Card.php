<?php

namespace App\Models;


use App\Database;

class Card {
        private string $word;
        private string $meaning;
        private bool $isStudied = false;
        public $database;
        private $table = "french_vocabulary";

        public function __construct(string $word, string $meaning, bool $isStudied = false)
        {
            $this -> word = $word;
            $this -> meaning = $meaning;
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
        $query = $database->mysql->query("select * FROM french_vocabulary");
        $wordsArray = $query->fetchAll();
        $wordsList = [];
        foreach ($wordsArray as $word) {
            $wordItem = new self($word["word"], $word["id"], $word["meaning"], $word["status"]);
            array_push($wordsArray, $wordItem);
        }

        return $wordsList;
        }
    }

$hola = new Card("sèmer", "sembrar");
echo $hola -> all();
 
