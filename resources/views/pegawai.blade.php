<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pegawai</title>
</head>
<body>
    <h1>Profil Pegawai</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Keterangan</th>
                <th>Detail</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Nama</td>
                <td>{{ $name }}</td>
            </tr>
            <tr>
                <td>Umur</td>
                <td>{{ $my_age }} tahun</td>
            </tr>
            <tr>
                <td>Hobi</td>
                <td>
                    @foreach($hobbies as $hobi)
                        {{ $hobi }}@if(!$loop->last), @endif
                    @endforeach
                </td>
            </tr>
            <tr>
                <td>Tanggal Harus Wisuda</td>
                <td>{{ $tgl_harus_wisuda }}</td>
            </tr>
            <tr>
                <td>Waktu tersisa</td>
                <td>{{ $time_to_study_left }} hari</td>
            </tr>
            <tr>
                <td>Semester Saat Ini</td>
                <td>{{ $current_semester }}</td>
            </tr>
            <tr>
                <td>Keterangan Semester</td>
                <td>{{ $status_semester }}</td>
            </tr>
            <tr>
                <td>Cita-cita</td>
                <td>{{ $future_goal }}</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
