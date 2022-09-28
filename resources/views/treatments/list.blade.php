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
                <h1>Tedavi Listesi</h1>
            </div>
            <div class="col-sm">
                <a href="{{ route('add.treatment') }}"><button type="button" class="btn btn-primary">TEDAVİ EKLE</button></a>
            </div>
            <div class="col-sm">
                <a href="{{ route('list.doctor') }}"><button type="button" class="btn btn-info">Tüm Doktorlar</button></a>
            </div>
        </div>
        @if(session()->has('status'))
            <div class="alert alert-success">
                {{ session()->get('status') }}
            </div>
        @endif
    <table class="table mt-3">
        <thead>
        <tr>
            <th scope="col">Doktor Adı</th>
            <th scope="col">Tedavi Adı</th>
            <th scope="col">Tedavi Fiyatı</th>
            <th scope="col">#</th>
        </tr>
        </thead>
        <tbody>
        @forelse($treatments as $treatment)
            <tr>
                <td>{{ $treatment->doctors->name }}</td>
                <td>{{ $treatment->name }}</td>
                <td>{{ $treatment->price }}₺</td>
                <td>
                    <a href="{{ route('delete.treatment', $treatment->id) }}">
                        <button type="button" class="btn btn-danger ms-1">Sil</button>
                    </a>
                </td>
            </tr>
        @empty
            <td>Herhangi bir kayıt bulunamadı.</td>
        @endforelse
        </tbody>
    </table>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>
</html>
