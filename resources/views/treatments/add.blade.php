<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">


    <title>Tedavi Listesi</title>
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <h1>Tedavi Ekle</h1>
        </div>
    </div>
    <form action="{{ route('store.treatment') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlSelect1">Doktor</label>
            <select class="form-control" id="exampleFormControlSelect1" name="doctor_id">
                <option value="">Seçiniz</option>
                @foreach($doctors as $doctor)
                <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mt-3">
            <label for="exampleFormControlInput1">Tedavi Adı</label>
            <input type="text" name="name" class="form-control" placeholder="Branşı">
        </div>
        <div class="form-group mt-3">
            <label for="exampleFormControlInput1">Fiyatı</label>
            <input type="text" name="price" class="form-control" placeholder="Branşı">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Kaydet</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>
</html>
