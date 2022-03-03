<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <title>Contacts</title>
</head>
<body>
<div class="container w-25 border p-4 mt-4">
    <form action="{{route('contacts')}}" method="POST">

        @csrf

        @if (session('success'))

        <h6 class="alert alert-success">{{ session('success') }}</h6>

        @endif

        @error('nombre')

        <h6 class="alert alert-danger">{{ $message }}</h6>

        @enderror


        @error('tel')

        <h6 class="alert alert-danger">{{ $message }}</h6>

        @enderror


        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre">
        </div>
        <div class="mb-3">
            <label for="tel" class="form-label">Tel</label>
            <input type="text" class="form-control" name="tel">
        </div>
        <div class="mb-3">
            <label for="num_libros" class="form-label">Num. Libros</label>
            <input type="text" class="form-control" name="num_lirbos">
        </div>
        <button type="submit" class="btn btn-primary">Guardar contacto</button>
    </form>
</div>

</body>
</html>