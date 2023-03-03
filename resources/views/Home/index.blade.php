{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Ini home</h1>
    <table>
        <tr>
            <td>NO</td>
            <td>Buah</td>
        </tr>
        @foreach ($buah as $a)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $a }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html> --}}

@extends('Layouts.table')
