<div class="row">
    <div class="col">
        <h3 class="mt-2">dodawanie anime do bazy</h3>
        
        <form action="/anime/?request=save" method="POST">
            <div class="form-group my-3">
                <label for="title">Tytul</label>
                <input type="text" class="form-control" id="title" placeholder="podaj tytul" name="title" required>
            </div>
            <div class="form-group mb-3">
                <label for="description_0">Opis</label>
                <textarea class="form-control" id="description_0" rows="3" name="description_0" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary mb-2">Dodaj</button>
        </form>
    </div>
</div>