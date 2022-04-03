<div class="container">
<?php if(isset($_SESSION['deleted'])): ?>
    <div class="row">
        <div class="col alert alert-danger" role="alert">
            <?= $_SESSION['deleted']; ?>
            <?php unset($_SESSION['deleted'])?>
        </div>
    </div>
    <?php endif ?>
    <?php if(isset($_SESSION['added'])): ?>
    <div class="row">
        <div class="col alert alert-success" role="alert">
            <?= $_SESSION['added']; ?>
            <?php unset($_SESSION['added'])?>
        </div>
    </div>
    <?php endif ?>
    <?php  $results = getAnimes($db); ?>
    <?php foreach($results as $result): ?>
        <div class="row border-bottom">
            <div class="col-3"style="height: 20px; overflow:hidden;"><?= $result['title'] ?></div>
            <div class="col-7" style="height: 20px; overflow:hidden;"><?= $result['description_0'] ?></div>
            <form action="/anime/?request=edit" method="post" class="col-1"> 
                <div><input type="submit" value="edit" class="btn btn-primary btn-sm"></div>
                <input type="hidden" name="id" value='<?= $result['id']; ?>'>
            </form>
            <form action="/anime/?request=del" method="post" class="col-1">
                <div><input type="submit" value="del" class="btn btn-danger btn-sm"></div>
                <input type="hidden" name="id" value='<?= $result['id']; ?>'>            
            </form>
        </div>    
    <?php endforeach ?>
</div>
