@extends('layouts.app')

@section('content')
<h3>Daftar Tim</h3>
@if ($errors->any())
    <div style="color:red">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('register') }}">
    @csrf

    <input name="team_name" placeholder="Nama Tim"><br>
    <input name="team_leader" placeholder="Ketua Tim"><br>
    <input name="team_member_1" placeholder="Anggota 1"><br>
    <input name="team_member_2" placeholder="Anggota 2"><br>
    <input name="university" placeholder="Universitas"><br>
    <input name="contact_number" placeholder="No HP"><br>

    <select name="competition_id">
        @foreach ($competitions as $c)
            <option value="{{ $c->id }}">{{ $c->name }}</option>
        @endforeach
    </select><br>
    <input 
    type="url" 
    name="link_drive_payment" 
    placeholder="Link Google Drive Bukti Pembayaran"
    required
><br>

    <input type="email" name="email" placeholder="Email"><br>
    <input type="password" name="password" placeholder="Password"><br>
    <input type="password" name="password_confirmation" placeholder="Ulangi Password"><br>


    <button>Daftar</button>
</form>
@endsection
