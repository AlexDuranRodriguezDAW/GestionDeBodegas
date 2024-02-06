<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Vinos a Bodega</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"></head>
</head>
<body>
    <div class="container">
        <h1>Añadir Vinos a Bodega</h1>
        <form action="{{ route('bodegas.vinos.store', $bodega->id) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="vinos" class="form-label">Seleccione los vinos:</label>
                <select class="form-select" id="vinos" name="vinos[]" multiple>
                    @foreach ($vinosDisponibles as $vino)
                        <option value="{{ $vino->id }}">{{ $vino->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Añadir Vinos</button>
        </form>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script></body>
</body>
</html>
