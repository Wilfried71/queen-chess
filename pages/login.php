<div class="container mt-5">
    <h1>Se connecter</h1>
    <form action="?page=login-confirm" method="POST">
        
        <div class="form-group">
            <label for="input-email">Adresse email *</label>
            <input type="email" class="form-control" id="input-email" required>
        </div>
        <div class="form-group">
            <label for="input-password">Mot de passe *</label>
            <input type="password" class="form-control" id="input-password" required>
        </div>
        <p>Pas encore de compte ? <a href="?page=register">Créer un compte</a></p>
        <small class="form-text mb-3">* Champ obligatoire</small>
        <button type="submit" class="btn btn-primary">Se connecter</button>
    </form>
</div>