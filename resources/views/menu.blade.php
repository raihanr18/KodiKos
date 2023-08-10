{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('KodiKos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kodikos</title>
  <link rel="stylesheet" href="{{url('css/styleHalUtama.css')}}">
</head>
<body>
  <nav class="navbar">
    <div class="navbar-content">
      <div class="logo">Kodi<span>Kos</span></div>
      <ul class="nav-links">
        <li><a href="/dashboard">Home</a></li>
        <li><a href="/dashboard/materi">Materi</a></li>
        @if (auth()->user()->status_premium)
          <li><a href="/chatify">Chat</a></li>
        @endif
      </ul>
    </div>
      <div class="navbar-right">
        <button class="profile-button"><a href="{{route('profile.edit')}}" class="profile-icon"></a></button>
      </div>
    </div>
  </nav>

  <div class="jumbotron">
    <div class="jumbotron-content">
      <div class="jumbotron-images">
    <img src="{{url('img/vector.png')}}" alt="Vector Image" width="481" height="448" class="vector-image">
        <img src="{{url('img/Team_Coding.png')}}" alt="Team Coding Image" width="342" height="342" class="team-coding-image">
      </div>
      <br><br>
      <h1>Kodikos</h1>
      <p>Wawasan Gratis, Harga Terjangkau! Pendidikan <br>Berkualitas Tanpa Batas bagi Anak Kos.</p>
      <div class="jumbotron-buttons">
        <a href="/dashboard/ubah-premium/{{auth()->user()->id}}" class="jumbotron-button premium-button">Join Premium</a>
      </div>
    </div>
  </div>

  <div class="content-container">
    <div class="category-text">
      <p style="color: #CAA1A1; font-size: 14px; font-weight: bold;">KATERGORI</p>
      <p style="font-size: 20px; font-weight: bold;">Mau belajar apa hari ini?</p>
      <p style="font-size: 14px;">Temukan materi berdasarkan minatmu.</p>
    </div>

    <div class="card-container">
      @foreach ($menu as $card)
      <div class="card">
        <h2>{{$card->kategori}}</h2>
        <p>{{$card->deskripsi}}</p>
        <a href="/dashboard/materi/{{$card->id_kategori}}" class="card-button">Buka</a>
      </div>
      @endforeach
  </div>
  <footer class="footer">
    <p>&copy; 2023 KodiKos.Team</p>
  </footer>
</body>
</html>