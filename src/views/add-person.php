<!DOCTYPE html>
<html>
<head>
    <title>Adicionar Pessoa</title>
</head>
<body>
    <h1>Adicionar Pessoa</h1>
    <form action="/api/add" method="post">
        <label for="name">Nome:</label>
        <input type="text" name="name" id="name" required>
        <label for="age">Idade:</label>
        <input type="number" name="age" id="age" required>
        <button type="submit">Adicionar Pessoa</button>
    </form>
    <a href="/api/list">De Volta a Lista</a>
</body>
</html>
