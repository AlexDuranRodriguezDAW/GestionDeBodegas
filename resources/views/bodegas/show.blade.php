<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de Bodega</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Detalles de Bodega</h1>
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" value="{{ $bodega->nombre }}" readonly>
        </div>
        <div class="mb-3">
            <label for="direccion" class="form-label">Dirección</label>
            <input type="text" class="form-control" id="direccion" value="{{ $bodega->direccion }}" readonly>
        </div>
        <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono</label>
            <input type="text" class="form-control" id="telefono" value="{{ $bodega->telefono }}" readonly>
        </div>
        <h2>Vinos de la Bodega</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bodega->vinos as $vino)
                <tr>
                    <td>{{ $vino->nombre }}</td>
                    <td>{{ $vino->precio }}</td>
                    <td>
                        <a href="{{ route('vinos.show', $vino->id) }}" class="btn btn-primary">Detalles</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('bodegas.index') }}" class="btn btn-primary">Volver</a>
        <a href="{{ route('bodegas.vinos.add', $bodega->id) }}" class="btn btn-success">Añadir Vinos</a>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
