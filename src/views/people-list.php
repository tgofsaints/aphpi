<!DOCTYPE html>
<html>
<head>
    <title>Lista de Inscritos</title>
</head>
<body>
    <h1>Lista de Inscritos</h1>
    <ul>
        <?php foreach ($people as $person): ?>
            <li><?php echo $person['name'] . ', ' . $person['age']; ?></li>
        <?php endforeach; ?>
    </ul>
    <form action="/api/add" method="post">
        <!--
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
        <label for="age">Age:</label>
        <input type="number" name="age" id="age" required>
        <button type="submit">Add Person</button>
    </form> -->
    <a href="/api/add">Adicionar Pessoa</a>
</body>
</html>
