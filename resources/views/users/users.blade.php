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
<h2>Liste des utilisateurs :</h2>
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

<ul>
    @foreach($users as $user)
        <li>
            <a href="/users/{{$user->id}}">{{$user->name}}</a>
            <form action="{{route('users.destroy', $user)}}" class="btn-delete">
                <button>Delete</button>
                </form>

        </li>
    @endforeach
</ul>

<form action="{{route('users.create')}}">
    <button type="submit">Ajouter</button>
</form>
<style>
ul {
list-style-type: none;
padding: 0;
margin: 0;
}

li {
display: flex;
align-items: center;
padding: 10px;
margin-bottom: 10px;
background-color: #f2f2f2;
border-radius: 5px;
}

li:nth-child(even) {
background-color: #e6e6e6;
}
button{
    background-color: #ef4444;
}

</style>
</body>
</html>
