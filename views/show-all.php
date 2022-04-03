<?php foreach($results as $result): ?>
    <div class="row">
        <div class="col border">
            <h3><?= $result['title'] ?></h3> 
            <p><?= $result['description_0'] ?></p>
            <hr>
        </div>
    </div>
<?php endforeach ?> 