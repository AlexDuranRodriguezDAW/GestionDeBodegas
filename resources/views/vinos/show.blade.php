<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Vino</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Detalles del Vino</h1>
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" value="{{ $vino->nombre }}" readonly>
        </div>
        <div class="mb-3">
            <label for="tipo" class="form-label">Tipo</label>
            <input type="text" class="form-control" id="tipo" value="{{ $vino->tipo }}" readonly>
        </div>
        <div class="mb-3">
            <label for="anio" class="form-label">Año</label>
            <input type="text" class="form-control" id="anio" value="{{ $vino->anio }}" readonly>
        </div>
        <div class="mb-3">
            <label for="precio" class="form-label">Precio</label>
            <input type="text" class="form-control" id="precio" value="{{ $vino->precio }}" readonly>
        </div>
        <form action="{{ route('vinos.destroy', $vino->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este vino?')">Eliminar Vino</button>
        </form>
        <a href="{{ route('vinos.show', $vino->id) }}" class="btn btn-primary">Volver</a>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
