<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Modifier vos informations</h1>
<form action="{{route('users.update', $user)}}" method="POST">
    @csrf
    @method('PUT')
    <p>
            <label>Nom :
            <input type="text" name="name" value="{{$user->name}}"></label>
    </p>
    <p>
        <label>Email :
            <input type="email" name="email" value="{{$user->email}}"></label>
    </p>
    <p>
        <label>Date de naissance:
            <input type="date" name="birthdate" value="{{$user->birthdate}}"></label>
    </p>
    <p>
        <label>Mot de passe :
            <input type="text" name="password" value="{{$user->password}}"></label>
    </p>
    <p>
        <label>Confirmer mot de passe :
            <input type="text" name="password_confirmation" value="" placeholder="Confirmer le mot de passe" class="@error('name') is-invalid @enderror"></label>
        @error('password_confirmation')
        <span class="alert alert-danger">{{ 'Mot de passe incorrecte' }}</span>
        @enderror
    </p>
    <button type="submit">Valider</button>
</form>

</body>
</html>
