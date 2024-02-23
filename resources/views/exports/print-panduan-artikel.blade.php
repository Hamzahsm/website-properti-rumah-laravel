<!-- make sure to make new html template, it just avoid an error -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Download PDF</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h3 class="text-center">Tabel Iklan Properti Disewakan</h3>
    <p>Jumlah Data : {{ $data->count() }}</p>
    <div class="table">
        <table class="table table-bordered table-responsive" border="1" cellspacing="0" cellpadding="5">
            <thead>
                <tr>
                    <th class="p-3" scope="col">No</th>
                    <th class="p-3" scope="col">Judul</th>
                    <th class="p-3" scope="col">Penulis</th>
                    <th class="p-3" scope="col">Deskripsi</th>
                    <th class="p-3" scope="col">Dibuat</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <th class="p-3">{{ $loop->iteration }}</th>
                        <th class="p-3">{{ $item->title }}</th>
                        <th class="p-3">{{ $item->user->name }}</th>
                        <th class="p-3">{!! $item->deskripsi !!}</th>
                        <th class="p-3">{{ $item->created_at }}</th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>