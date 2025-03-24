<?php include 'includes/header.php'; include 'config/db.php';

$stmt = $pdo->query("SELECT * FROM libros");
$libros = $stmt->fetchAll();
?>

<a href="index.php" class="btn btn-secondary mb-3">Volver</a>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Título</th><th>Autor</th><th>Año</th><th>Género</th><th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($libros as $libro): ?>
        <tr>
            <td><?= htmlspecialchars($libro['titulo']) ?></td>
            <td><?= htmlspecialchars($libro['autor']) ?></td>
            <td><?= $libro['anio_publicacion'] ?></td>
            <td><?= htmlspecialchars($libro['genero']) ?></td>
            <td>
                <a href="update.php?id=<?= $libro['id'] ?>" class="btn btn-warning btn-sm">Editar</a>
                <a href="delete.php?id=<?= $libro['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro?')">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php include 'includes/footer.php'; ?>
