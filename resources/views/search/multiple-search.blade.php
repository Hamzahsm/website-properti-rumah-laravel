hasil akan tampil disini
<p>menampilkan hasil pencarian : <span style="color: red;">{{ request('keyword') }}</span> </p>
<form action="{{ route('search.multiple') }}" method="get">
    <input type="text" name="keyword" required placeholder="Cari Iklan Biasa & Premium">
    <button type="submit">Cari</button>
</form>

@if (count($results))
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Judul Properti</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($results as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->judul_properti }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else 
    <p>Oooppss, pencarian : {{ request('keyword') }} tidak ditemukan</p>
@endif