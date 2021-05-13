<?php

include "./Models/Card.php";
include "./Core/View.php";

class CardController
{

    public function __construct()
    {

        if (isset($_GET["action"]) && ($_GET["action"] == "create")) {
            $this->create();
            return;
        }
        if (isset($_GET["action"]) && ($_GET["action"] == "store")) {
            $this->store($_POST);
            return;
        }
        if (isset($_GET["action"]) && ($_GET["action"] == "random")) {
            $this->random();
            return;
        }

        $this->index();
    }

    public function index(): void
    {

        new View("Home");
    }

    public function create(): void
    {
        $card = new Card();
        $cards = $card -> all();

        new View("CardList", [
            "allCards" => $cards,
        ]);
    }

    public function store(array $request): void
    {
     
        $newWord = new Card($request["word"], $request["meaning"]);
        $newWord -> save();
        
        $this->index();
    }
    public function random(): void
    {
        $card = new Card();
        $randomCard = $card -> randomWord();

        new View("RandomWord", [
           "randomcard" => $randomCard,
        ]);
    }


}