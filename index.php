
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Smart CRUD</title>
</head>
<body class="container-fluid vh-100 d-flex flex-column justify-content-center">
    
    <div class="col-12 d-flex justify-content-center mb-4 pt-2">
        <form class="d-flex" method="post" action="">
            <input type="text" class="form-control me-2" name="word-input" placeholder="Enter a new word">
            <input type="text" class="form-control ms-2" name="meaning-input" placeholder="and it's meaning">
            <button class="btn btn-success ms-4">Add</button>
        </form>
    </div>

    <?php

    include 'models/queries.php';

     if(isset($_POST['word-input']) && isset($_POST['meaning-input'])) {
        $word_input = $_POST['word-input'];
        $meaning_input = $_POST['meaning-input'];

        $sql_add = 'INSERT INTO french_vocabulary(word, meaning) VALUES (?,?)';

        $sentence_add = $pdo -> prepare($sql_add);
        $sentence_add -> execute(array($word_input, $meaning_input));
 
      }
    ?>
   

    <form method="post" class="container ctBtns d-flex justify-content-center">
        <input type="submit" name="btStudy" value="Study" class="btn btn-dark me-3"></input>
        <input type="submit" name="btShow" value="Show All" class="btn btn-primary ms-3"></input>
    </form>

    <div class="container vw-100 mt-5 d-flex justify-content-center">
    <?php include 'views/button_listeners.php'; ?>


    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>