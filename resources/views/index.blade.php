<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <!-- <link href="bootstrap.min.css" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    @if (count($auteurs)>0)
    <div class="row w-75 m-auto">
    <table class="table table-dark">
        <thead>
            <tr class="text-center">
                <th>ID</th>
                <th>Nom</th>
                <th>Date de naissance</th>
                <th>titre des livres</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($auteurs as $auteur )
            <tr class="text-center">
                <td>{{  $auteur->id }}</td>
                <td>{{  $auteur->nom }}</td>
                <td>{{  $auteur->date_naissance }}</td>
               
               
               
               
               
</tr>
            @endforeach
        </tbody>
    </table>

@else
    <p class="text-center">There's No Article</p>
@endif
</body>
</html>

   