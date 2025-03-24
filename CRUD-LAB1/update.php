<?php include 'includes/header.php'; include 'config/db.php';

$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM libros WHERE id = ?");
$stmt->execute([$id]);
$libro = $stmt->fetch();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $anio = $_POST['anio'];
    $genero = $_POST['genero'];

    $stmt = $pdo->prepare("UPDATE libros SET titulo=?, autor=?, anio_publicacion=?, genero=? WHERE id=?");
    $stmt->execute([$titulo, $autor, $anio, $genero, $id]);
    header("Location: read.php");
}
?>

<form method="post">
    <div class="mb-3">
        <label class="form-label">Título</label>
        <input type="text" name="titulo" class="form-control" value="<?= $libro['titulo'] ?>" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Autor</label>
        <input type="text" name="autor" class="form-control" value="<?= $libro['autor'] ?>" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Año</label>
        <input type="number" name="anio" class="form-control" value="<?= $libro['anio_publicacion'] ?>" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Género</label>
        <input type="text" name="genero" class="form-control" value="<?= $libro['genero'] ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Actualizar</button>
    <a href="read.php" class="btn btn-secondary">Cancelar</a>
</form>

<?php include 'includes/footer.php'; ?>
