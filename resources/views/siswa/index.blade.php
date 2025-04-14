<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Siswa</title>
    <style>
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ccc; padding: 8px; }
    </style>
</head>
<body>
    <h1 style="text-align: center; margin-bottom: 3rem;">Data Siswa SMK Taruna Bhakti 2025</h1>

    <button><a href="{{ route('siswa.export') }}">Download Excel Format</a></button>

    <table style="margin-top: 20px;">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIS</th>
                <th>Tanggal Lahir</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th>Alamat</th>
                <th>Kota Asal</th>
                <th>Nomor Handphone</th>
            </tr>
        </thead>
        <tbody>
            @foreach($siswas as $index => $siswa)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $siswa->nama }}</td>
                <td>{{ $siswa->nis }}</td>
                <td>{{ $siswa->tanggal_lahir }}</td>
                <td>{{ $siswa->kelas }}</td>
                <td>{{ $siswa->jurusan }}</td>
                <td>{{ $siswa->alamat }}</td>
                <td>{{ $siswa->kota_asal }}</td>
                <td>{{ $siswa->no_hp }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>