<!DOCTYPE html>
<html>

<head>

    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.9.4/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Lista de Inscritos</title>
</head>

<body>
    <h1 style="font-size: 40px">Lista de Inscritos</h1>
    <div class="overflow-x-auto">
        <table class="table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Idade</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($people as $person): ?>
                    <tr class="hover">
                        <td>
                            <?php echo $person['name']; ?>
                        </td>
                        <td>
                            <?php echo $person['age']; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <ul>


    </ul>
    <a href="/api/add">Adicionar Pessoa</a>
</body>

</html>