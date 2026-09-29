<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <h2>Ajouter</h2>
    <form action="/ajouter" method="post">
        @csrf
        <label for="title">titre</label><br>
        <input type="text" id="title"><br>

        <label for="description">description</label><br>
        <input type="text" id="description"><br>

        <label for="event_date">date</label><br>
        <input type="text" id="event_date"><br>

        <label for="location">lieu</label><br>
        <input type="text" id="location"><br>

        <input type="submit" value="Valider">
    </form>
</body>
</html>