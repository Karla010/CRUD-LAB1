<?php include 'includes/header.php'; include 'config/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $anio = $_POST['anio'];
    $genero = $_POST['genero'];

    $stmt = $pdo->prepare("INSERT INTO libros (titulo, autor, anio_publicacion, genero) VALUES (?, ?, ?, ?)");
    $stmt->execute([$titulo, $autor, $anio, $genero]);
    header("Location: read.php");
}
?>
<a href="index.php" class="btn btn-secondary mb-3">Volver</a>

<form method="post">
    <div class="mb-3">
        <label class="form-label">Título</label>
        <input type="text" name="titulo" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Autor</label>
        <input type="text" name="autor" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Año de Publicación</label>
        <input type="number" name="anio" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Género</label>
        <input type="text" name="genero" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="index.php" class="btn btn-secondary">Cancelar</a>
</form>

<?php include 'includes/footer.php'; ?>
