<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kodikos</title>
  <link rel="stylesheet" href="{{url('css/styleHalIsiMateri.css')}}">
</head>
<body>
  <nav class="navbar">
    <div class="navbar-content">
      <div class="logo">KodiKos</div>
      <ul class="nav-links">
        <li><a href="/dashboard">Home</a></li>
        <li><a href="/dashboard/materi">Materi</a></li>
      </ul>
      <div class="navbar-right">
        <button class="profile-button"><a href="#" class="profile-icon"></a></button>
      </div>
    </div>
  </nav>

  <div class="materi-container">
    <div class="materi-box">
        <div class="materi-text-container">
            <h1>{{$materi->judul}}</h1>
            <hr>
            {!! $materi->konten !!}
    </div>

    <div class="info-pembuat">
        <p>Informasi Pembuat Materi:</p>
        <p>Nama: {{$mentor->name}}</p>
        <p>Email: {{$mentor->email}}</p>
      </div>
  </div>

  </body>
  </html>