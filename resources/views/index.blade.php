<!DOCTYPE html>
<html>

<head>
    <title>CRUD Pada Laravel </title>
</head>

<body>

    <h2>Tugas Praktikum</h2>
    <h3>Data Buku</h3>

    <a href="/buku/tambah"> + Tambah buku Baru</a>

    <br />
    <br />

    <table border="1">
        <tr>
            <th>Nomor</th>
            <th>Judul</th>
            <th>Tahun Terbit</th>
        </tr>
        $no = 0;
        @foreach($buku as $p)
        $no++;
        <tr>
            <td>{{ $no }}</td>
            <td>{{ $p->judul }}</td>
            <td>{{ $p->tahun_terbit }}</td>
            <td>
                <a href="/buku/edit/{{ $p->id }}">Edit</a>
                |
                <a href="/buku/hapus/{{ $p->id }}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>


</body>

</html>