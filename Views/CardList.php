<?php require_once("Components/Layout.php"); ?>

<body>
<div class="container-fluid vh-100" style="display:grid; grid-template-columns: repeat(auto-fit, minmax(230px, 1fr)); grid-template-rows: repeat(auto-fit, minmax(11rem, 0.40fr)); align-items: stretch;">

<?php
    foreach($data['allCards'] as $card){
        echo 
        "
        <div class='card text-dark bg-warning m-2'>
          <div class='card-header text-center'>{$card -> getWord()}</div>
          <div class='card-body text-center'>
            <p class='card-text'>{$card -> getMeaning()}</p>
          </div>
          <div class='d-flex justify-content-between mx-2 my-2'>
            <a href=?action=edit&id={$card ->getId()}>
              <button>
                <img src='./img/lapiz.svg' style='width:1rem;' />
              </button>
            </a>
            <a href=?action=delete&id={$card ->getId()}>
              <button>
                <img src='./img/delete.svg'  style='width:1rem;' />
              </button>
            </a>
          </div>
        </div>

        ";
    }

?>
</div>

<a href="?action=index">
  <button class="btn btn-dark ">
    Volver
  </button>
</a>


<?php require_once("Components/Footer.php"); ?>