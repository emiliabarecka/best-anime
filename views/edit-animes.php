<?php foreach ($results as $result): ?>        
    <?php if($result['id'] == $_POST['id']): ?>
        
    <div class="row">
        <div class="col">
            <h3 class="mt-2">Edytowanie</h3>
            
            <form action="/anime/?request=update" method="post">
                <div class="form-group my-3">
                    <h5>Id: <?=$result['id'];?></h5>
                    <input type="hidden" name="id" value = "<?=$result['id'];?>" >
                    <input type="text" name="title" value = "<?=$result['title'];?>" required >
                </div>
                <div class="form-group mb-3">
                    <label for="description_0">edytuj</label>
                    <textarea class="form-control" id="description_0" rows="3" name="description_0" required placeholder="<?= $result['description_0'];?>"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mb-2">wyslij</button>
            </form>
        </div>
    </div>
    
    <?php endif ?>   
<?php endforeach ?>