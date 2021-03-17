<div class="container mt-3">
    <h1>Créer un compte</h1>
    <form action="?page=login-confirm" method="POST">
        
        <div class="form-group">
            <label for="input-email">Adresse email *</label>
            <input type="email" class="form-control" id="input-email" required>
        </div>
        <div class="form-group">
            <label for="input-username">Nom d'utilisateur *</label>
            <input type="text" class="form-control" id="input-username" required>
        </div>
        <div class="form-group">
            <label for="input-password">Mot de passe *</label>
            <input type="password" class="form-control" id="input-password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$" required>
            <small class="form-text text-muted">Minimum 8 caractères, une majuscule, une minuscule et un chiffre.</small>
        </div>
        <div class="form-group">
            <label for="input-password-verif">Mot de passe (vérification) *</label>
            <input type="password" class="form-control" id="input-password-verif" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$" required>
            <small class="form-text text-muted">Minimum 8 caractères, une majuscule, une minuscule et un chiffre.</small>
        </div>
        <p>Déjà un compte ? <a href="?page=login">Se connecter</a></p>
        <small class="form-text mb-3">* Champ obligatoire</small>
        <button type="submit" class="btn btn-primary">Créer le compte</button>
    </form>
</div>
