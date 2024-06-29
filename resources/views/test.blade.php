<!DOCTYPE html>
<html >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

     
    </head>
    <body>
        <h1>TEST</h1>
<table width="100%" border="1">
    <tr>
    <th>NOM</th><th>PRENOM</th><th>EMAIL</th><th>AGE</th><th>ADRESSE</th>
    </tr>
    @foreach($personnes as $p){
        <tr>
            <td>{{$p->nom}}</td><td>{{$p->prenom}}</td><td>{{$p->email}}</td><td>{{$p->age}}</td><td>{{$p->adresse}}</td> 
            </tr>
        }
    @endforeach
</table>

        
    </body>
</html>
