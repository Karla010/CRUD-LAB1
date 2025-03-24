<?php include './includes/header.php'; ?>

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm border-0 mb-4">
            <div class="card-body text-center">
                <h3 class="card-title mb-4">Bienvenido al CRUD de Libros</h3>
                <p class="card-text mb-4">Gestione tus libros facilmente</p>
                
                <div class="d-grid gap-2 col-6 mx-auto">
                    <a href="create.php" class="btn btn-success btn-lg">➕ Agregar Nuevo Libro</a>
                    <a href="read.php" class="btn btn-primary btn-lg">📚 Ver Todos los Libros</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include './includes/footer.php'; ?>
