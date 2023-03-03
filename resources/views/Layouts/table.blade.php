@extends('Layouts.main')

@section('content')
    <div class="container ">
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
    </div>
@endsection
