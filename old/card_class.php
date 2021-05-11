<?php
 
    class Card {
        public string $word;
        public string $meaning;
        public bool $isStudied = false;

        public function __construct($word, $meaning)
        {
            $this -> word = $word;
            $this -> meaning = $meaning;
       
        }
        public function setWord($word)
        {
            $this ->word = $word;
        }

        public function getWord()
        {
            return $this ->word;
        }

        public function setMeaning($meaning)
        {
           $this ->meaning = $meaning;
        }

        public function getMeaning()
        {
            return $this -> meaning;
        }


        public function getIsStudied()
        {
            return $this ->isStudied;
        }
    }

    $maria = new Card("chuchoter", "susurrar");
 
?>