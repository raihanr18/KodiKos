<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kodikos</title>
  <link rel="stylesheet" href="{{url('css/styleHalMateri.css')}}">
</head>
  <!-- Your existing body content here -->
  <body>
    <nav class="navbar">
      <div class="navbar-content">
        <div class="logo">Kodi<span>Kos</span></div>
        <ul class="nav-links">
            <li><a href="/dashboard">Home</a></li>
            <li><a href="/dashboard/materi">Materi</a></li>
        </ul>
        <div class="navbar-right">
          <button class="profile-button"><a href="#" class="profile-icon"></a></button>
        </div>
      </div>
    </nav>
  <!-- Material Cards -->
  <div class="content-container">
    <div class="category-text">
      <!-- Your existing category-text content here -->
    </div>
    <h2 class="pilih-materi">{{$kategori->kategori}}</h2>

    @foreach ($materiKategori as $materi)
    <div class="card-container">
      <!-- Material Cards -->
      <a href="/dashboard/materi/buka-materi/{{$materi->id_materi}}" style="text-decoration: none">
      <div class="material-card">
        <img src="{{url('storage/'. $materi->cover)}}" alt="Material">   
        <div class="material-card-content">
            <h3>{{$materi->judul}}</h3>
            <p>{{$materi->deskripsi}}</p>
            <hr>
        </div>
      </div>
      </a>
    </div>
    @endforeach
    </div>
    </div>
  </div>

  <!-- Your existing footer content here -->
</body>
</html>
