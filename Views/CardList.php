<?php require_once("Components/Layout.php"); ?>

<body class="container-fluid vh-100" style="display:grid; grid-template-columns: repeat(auto-fit, minmax(230px, 1fr)); grid-template-rows: repeat(auto-fit, minmax(5rem, 1fr)); align-items: stretch;">

<?php
    foreach($data['allCards'] as $card){
        echo 
        "
        <div class='card text-dark bg-warning m-2'>
        <div class='card-header text-center'>{$card -> getWord()}</div>
        <div class='card-body text-center'>
          <p class='card-text'>{$card -> getMeaning()}</p>
        </div>
        </div>

        ";
    }

?>



<?php require_once("Components/Footer.php"); ?>