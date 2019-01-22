<section>
    <div class="login-form">
        <form action="/create" method="post" >
            <h2 class="text-center">Nouveau contact</h2>
            <div class="form-group">
                <input type="text" name="lastname" class="form-control" placeholder="Nom" required="required">
            </div>
            <div class="form-group">
                <input type="text" name="firstname" class="form-control" placeholder="prenom" required="required">
            </div>
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Username" required="required">
            </div>
            <input type="hidden" name="user_id" class="form-control"  required="required" value=1>


            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Envoyer</button>
            </div>

        </form>
    </div>
</section>