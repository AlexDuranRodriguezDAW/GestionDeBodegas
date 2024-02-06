<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Bodegas</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Listado de Bodegas</h1>
        <div class="mb-3">
            <a href="{{ route('bodegas.create') }}" class="btn btn-primary">Crear Bodega</a>
            <a href="{{ route('vinos.create') }}" class="btn btn-success">Añadir Vino</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bodegas as $bodega)
                <tr>
                    <td>{{ $bodega->nombre }}</td>
                    <td>{{ $bodega->direccion }}</td>
                    <td>{{ $bodega->telefono }}</td>
                    <td>
                        <a href="{{ route('bodegas.show', $bodega->id) }}" class="btn btn-primary">Ver Bodega</a>
                        <form action="{{ route('bodegas.destroy', $bodega->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro?')">Borrar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
