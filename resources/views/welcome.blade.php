@extends('layout.head')
@section('title', 'Home')
@section('content')
    <div class="container">
        <h1>Hitung Huruf Vokal</h1>
        <hr>
        <br>
        <form action="/hasil" method="POST">
            @csrf
            <div>
                <label>Masukkan Nama</label>
                <input name="kata" id="kata" placeholder="Masukkan kata atau kalimat"/>
                <input class="submit" type="submit" value="Hasil" />
            </div>
        </form>
    </div>
@endsection
