<!doctype html>
<html lang=fr>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$user->name}}</title>
</head>
<body>
<h1>Espace utilisateur</h1>
<h2>Bonjour {{$user->name}}</h2>

<p>Date de naissance : {{$user->birthdate->translatedFormat('d F Y')}} ({{now()->DiffInYears($user->birthdate)}} ans) </p>
<p>Email : {{$user->email}}</p>
<p>Mot de passe : {{$user->password}}</p>
<p>Crée le : {{$user->created_at}} </p>

<form action="{{route('users.destroy',$user)}}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit">Supprimer</button>
</form>
<form action="{{route('users.edit',$user)}}">
    <button type="submit">Edit</button>
</form>
</body>
</html>

