<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1> Productes</h1>
    @foreach ( $products as $p)
    <ul class="list-group">
        <li class="list-group-item list-group-item-primary">name : {{$p->name}}</li>
        <li class="list-group-item list-group-item-secondary">price : {{$p->price}}</li>
        <li class="list-group-item list-group-item-warning">categorieId : {{$p->categorie_id}}</li>

    </ul>

        @endforeach

        <h1>price entre 50 et 100</h1>

        @foreach ( $productCondition as $pC)
 <ul>
     <li>name : {{$pC->name}}</li>
     <li>price : {{$pC->price}}</li>
     <li>categorieId : {{$pC->categorie_id}}</li>
 </ul>
     @endforeach
     <h1> 10 premier</h1>
@foreach ( $dixpre as $dix)
<ul>
    <li>name : {{$dix->name}}</li>
    <li>price : {{$dix->price}}</li>
    <li>categorieId : {{$dix->categorie_id}}</li>
</ul>
    @endforeach

    <h1> categorie id</h1>
@foreach ( $categorieId as $c)
<ul>
    <li>name : {{$c->name}}</li>
    <li>price : {{$c->price}}</li>
    <li>categorieId : {{$c->categorie_id}}</li>
</ul>
    @endforeach

    <h1> count</h1>

    <p>le nombre de produit {{$numtotal}}</p>

</body>
</html>