<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/app.css">
</head>
<body>
<h1>Ajouter un utilisateur</h1>
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<form action="{{route('users.store')}}" method="post">
    @csrf
    <p>
        <label>Nom :
            <input type="text" name="name" value="" placeholder="Entrer Nom + Prenom"></label>
    @error('name')
        <span class="alert alert-danger">{{ $message }}</span>
    @enderror
    </p>

    <p>
        <label>Email :
            <input type="email" name="email" value="" placeholder="Entrer votre adresse mail"></label>
        @error('email')
        <span class="alert alert-danger">{{ $message }}</span>
        @enderror
    </p>
    <p>
        <label>Date de naissance:
            <input type="date" name="birthdate" value=""></label>
        @error('birthdate')
        <span class="alert alert-danger">{{ $message }}</span>
        @enderror
    </p>
    <p>
        <label>Mot de passe :
            <input type="text" name="password" value="" placeholder="Minimum 8 caractères"></label>
        @error('password')
        <span class="alert alert-danger">{{ $message }}</span>
        @enderror
    </p>
    <p>
        <label>Confirmer mot de passe :
            <input type="text" name="password_confirmation" value="" placeholder="Confirmer le mot de passe"></label>
    </p>

    <button type="submit">Ajouter</button>
</form>
<style>
    h1{
        text-align: center;
    }
    form {
        background-color: #f2f2f2;
        padding: 20px;
        border-radius: 10px;
        max-width: 500px;
        margin: 0 auto;
    }

    input[type="text"], input[type="email"], select, textarea {
        padding: 10px;
        margin: 10px 0;
        width: 80%;
        border-radius: 5px;
        border: none;
        background-color: #fff;
        box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.2);
    }

    button[type="submit"] {
        background-color: #4CAF50;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }

    button[type="submit"]:hover {
        background-color: #2E8B57;
    }

    label {
        font-weight: bold;
        display: block;
        margin-bottom: 10px;
    }
</style>
</body>
</html>
