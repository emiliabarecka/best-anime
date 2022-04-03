<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best anime</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1><a href="/anime/?request=show-all" class="text-decoration-none">Best anime</a></h1>
        
        <div class="row">
            <div class="col">
                <a href="/anime" class="text-decoration-none">Strona głowna</a>
                <a href="/anime/?request=heroes" class="text-decoration-none">bohaterowie</a>
                <?php if ($_SESSION['admin'] == true): ?>
                    <a href="/anime/?request=add-anime" class="text-decoration-none">dodaj anime</a>
                    <a href="/anime/?request=list-animes" class="text-decoration-none">lista tytulow</a>
                <?php endif ?>
                <a href="/anime/?request=log-in" class="text-decoration-none">zaloguj</a>
            </div>
        </div>
       
        <div class="mt-5 row">
            <div class="col-2 border">sidebar</div>
            <div class="col-8 border element-parent">
                <?php require_once('./app/routing.php');?>   
            </div>
            <div class="col-2 border">sidebar2</div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- <script src="layout.js"></script> -->
</body>
</html>

