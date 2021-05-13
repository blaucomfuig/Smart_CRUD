<?php require_once("Components/Layout.php"); ?>

<body class="container-fluid vh-100 d-flex flex-column justify-content-center">
    
    <div class="col-12 d-flex justify-content-center mb-4 pt-2">
        <form class="d-flex" method="post" action="">
            <input type="text" class="form-control me-2" name="word-input" placeholder="Enter a new word">
            <input type="text" class="form-control ms-2" name="meaning-input" placeholder="and it's meaning">
            <button class="btn btn-success ms-4">Add</button>
        </form>
    </div>

    
    <div class="container d-flex justify-content-center">
        <a href="?action=random">
            <button class="btn btn-dark me-3">
                Study
            </button>
        </a>
        <a href="?action=create">
            <button class="btn btn-primary ms-3">
                Show All
            </button>
        </a>
    </div>

    <div class="container vw-100 mt-5 d-flex justify-content-center">
    


    </div>




<?php require_once("Components/Footer.php"); ?>