<?php require_once("Components/Layout.php"); ?>

<body class="container-fluid vh-100 d-flex flex-column justify-content-center">
    

    <div class="container vw-100 h-100 d-flex flex-column justify-content-center ">
        <form class="d-flex flex-column w-100 h-100 align-items-center justify-content-center" method="post" action="?action=update&id=<?php echo $data["editedCard"] -> getId() ?>">
            <div class='card w-50 h-25 text-dark bg-warning m-2'>
                <div class='card-header text-center'>
                    <input type="text" class="form-control me-2 text-center" name="word" required value='<?php echo $data["editedCard"] -> getWord() ?>' />
                </div>
                <div class='card-body text-center'>
                    <input type="text" class="form-control me-2 text-center" name="meaning" class='card-text' required value='<?php echo $data["editedCard"] ->getMeaning()?>' />
                </div>
            </div>
        
        <div class="d-flex w-25 mt-2 justify-content-around">

            <a href="?action=create">
              <button class="btn btn-dark ">
                Volver
              </button>
            </a>
            <a>
              <button class="btn btn-success " type="submit">
                Confirmar
              </button>
            </a>
        </div>
        </form>
    </div>




<?php require_once("Components/Footer.php"); ?>