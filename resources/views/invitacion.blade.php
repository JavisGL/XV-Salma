<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, viewport-fit=cover">
    <title>Invitación | XV Salma</title>

    <!-- (opcional) Bootstrap; no es obligatorio para este hero -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <!-- Tipografía elegante -->
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600&display=swap"
        rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">


    <!-- Tu CSS (el que pegaste en el mensaje) -->
    <!-- dentro de <head> -->
<link rel="stylesheet" href="/css/invitacion.css">

</head>
@php
    use Carbon\Carbon;
    // Fecha objetivo del contador (desde el controlador)
    $fechaEvento = Carbon::parse($evento['fecha']);
    $fechaIso    = $fechaEvento->toIso8601String();       // para JS
    $fechaUi     = $fechaEvento->format('d.m.y');          // 30.05.26
@endphp
<body>

    <!-- HERO -->
    <section class="hero" style="background-image: url('/images/Salma (2).png')">
        <div class="hero-overlay"></div>

        <!-- Caja central con borde, ramita, nombres y sublínea -->
        <div class="hero-center">
                <h4 class="hero-names1">MIS XV AÑOS</h4>
       
                <h1 class="hero-names">SALMA NICOLE GEA LÓPEZ</h1>

            </div>
       
        <!-- Contador -->
        <div class="hero-countdown" id="countdown" data-target="{{ $fechaIso }}">
            <div class="box">
                <span id="d">--</span>
                <small>DÍAS</small>
            </div>
            <div class="box">
                <span id="h">--</span>
                <small>HORAS</small>
            </div>
            <div class="box">
                <span id="m">--</span>
                <small>MINUTOS</small>
            </div>
            <div class="box">
                <span id="s">--</span>
                <small>SEGUNDOS</small>
            </div>
        </div>
    </section>

    <!-- ===== SECCIÓN: NOS CASAMOS / PAPÁS Y PADRINOS ===== -->
<section class="section-light" id="familia">
  <div class="container-narrow">

    <!-- ramita decorativa superior -->
    <div class="leaf-divider" aria-hidden="true">
       <img src="/images/Corona.png" alt="flor" width="50" height="70" loading="lazy" class="flower">
    </div>

    <h1 class="title-sans">MIS XV AÑOS</h1><br>

    <p class="lead-center">
      Con la bendición de Dios y en compañía de mis padres, hermanos y padrinos.
    </p><br>

    <div class="families">

      <div class="group">
        <h2>Mis Padres</h2>
        <p class="names">
         María Magdalena López Gress<br>
         Víctor Manuel Gea Hernández
        </p>
      </div>

<div class="group">
        <h2>Mis Hermanos</h2>
        <p class="names">
          Juan Carlos Gea López <br>
         Anaid Monserrat Gea López
        </p>
      </div>
      
      <div class="group">
        <h2>Mis Padrinos</h2>
        <p class="names"> 
          Juan Carlos Gea López <br>
          Kenia Carolina Ramírez Camacho        
        </p>
      </div>

      

       <p class="lead-center">
      Nos complace invitarte a ser parte de este gran día.
    </p>


    </div>
  </div>
</section>

<section class="section-where" id="donde">
  <div class="container-narrow">
    <!-- Ramita -->
    <!-- ramita decorativa superior -->
    <div class="leaf-divider" aria-hidden="true">
       <img src="/images/Flor1.png" alt="flor" width="50" height="70" loading="lazy" class="flower">
    </div>

    <h1 class="title-sans">¿DÓNDE &amp; CUÁNDO?</h1>

    <article class="venue-card">
      <div class="venue-photo">
        <img src="/images/Parroquia.png" alt="Capilla de la Sagrada Familia" loading="lazy">
      </div>

      <div class="venue-body">
        <h3 class="venue-tag">Ceremonia religiosa</h3>

        <p class="venue-datetime">
          17 OCTUBRE 2025 &nbsp; | &nbsp; 5:00 PM
        </p>

        <h4 class="venue-name">Parroquia La Divina Providencia</h4>

        <p class="venue-address">
          Sta. Cecilia, La Providencia, <br>
          42186 Pachuca de Soto, <br>
          Hidalgo.
        </p>

        <a class="btn-map"
           href="https://maps.app.goo.gl/w2KPahTD7KuJEbcT7"
           target="_blank" rel="noopener">
          Ver en el mapa
        </a>
      </div>
    </article>

    <article class="venue-card">
      <div class="venue-photo">
        <img src="/images/Condesa.webp" alt="Salón Hacienda Santa Cecilia" loading="lazy">
      </div>

      <div class="venue-body">
        <h3 class="venue-tag">Recepción</h3>

        <p class="venue-datetime">
          17 OCTUBRE 2025 &nbsp; | &nbsp; 7:30 PM
        </p>

        <h4 class="venue-name">Salón Condesa</h4>

        <p class="venue-address">
          Av Ferrocarril Central 2101, <br>
          42080 Pachuca de Soto, <br>
          Hidalgo.
        </p>

        <a class="btn-map"
           href="https://maps.app.goo.gl/yN3MYax9gsRfcYKR7?g_st=aw"
           target="_blank" rel="noopener">
          Ver en el mapa
        </a>
      </div>
    </article>

    <!-- Si luego quieres otra tarjeta (recepción), duplica <article class="venue-card"> y cambia los datos -->
  </div>
</section>


<!-- ===== SECCIÓN: CÓDIGO DE VESTIMENTA ===== -->
<section id="dresscode" class="section-light section-dress">
<div class="dresscode-image">
    <img src="/images/IMG3.png" alt="Dress Code" loading="lazy">
  </div> <br>
  <div class="container-narrow">

    <!-- Ramita -->
    <!-- ramita decorativa superior -->
    <div class="leaf-divider" aria-hidden="true">
         <img src="/images/Flor1.png" alt="flor" width="50" height="70" loading="lazy" class="flower">
    </div>

    <h1 class="title-sans">Código de Vestimenta</h1>

    <div class="lead-center">
  <b class="formal">Formal / Etiqueta</b>
</div>
    <p class="lead-center">
      ✨ Recomendamos prendas con brillos ✨ <br>Dejamos algunas sugerencias:
    </p>

    <div class="dress-icons">
      <!-- Reemplaza las rutas si ya tienes tus propios íconos -->
      <figure>
        <!-- Vestido: terracota, rosa antiguo, malva, salvia, champagne -->
<svg viewBox="0 0 260 60" width="220" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
  <circle cx="30"  cy="30" r="22" fill="#E3B6B3" /> <!-- terracota -->
  <circle cx="80"  cy="30" r="22" fill="#F7E7CE" /> <!-- rosa antiguo -->
  <circle cx="130" cy="30" r="22" fill="#FFFFF0" /> <!-- malva -->
  <circle cx="180" cy="30" r="22" fill="#C0C0C0" /> <!-- salvia -->
  <circle cx="230" cy="30" r="22" fill="#0B6E4F" stroke="#133229ff" stroke-width="1"/> <!-- champagne -->
</svg>


        <figcaption>Mujeres</figcaption>
      </figure>
<figure>
        <!-- Vestido: terracota, rosa antiguo, malva, salvia, champagne -->
<svg viewBox="0 0 260 60" width="220" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
  <circle cx="30"  cy="30" r="22" fill="#1C1C1C" /> <!-- terracota -->
  <circle cx="80"  cy="30" r="22" fill="#707070" /> <!-- rosa antiguo -->
  <circle cx="130" cy="30" r="22" fill="#F5F5F5" /> <!-- malva -->
  <circle cx="180" cy="30" r="22" fill="#C5A572" /> <!-- salvia -->
  <circle cx="230" cy="30" r="22" fill="#6A1E1E" stroke="#133229ff" stroke-width="1"/> <!-- champagne -->
</svg>


        <figcaption>Hombres</figcaption>
      </figure>


    <p class="note-center">
      Se solicita cordialmente evitar el uso del color <U class= "azul"><strong>azul</strong></U> en todas sus tonalidades.
    </p>
  </div>
</section>

<!-- ===== SECCIÓN: CONFIRMA TU ASISTENCIA ===== -->
<section id="rsvp" class="section-light section-rsvp">
  <div class="container-narrow">

    <!-- ramita decorativa superior -->
    <div class="leaf-divider" aria-hidden="true">
         <img src="/images/Flor1.png" alt="flor" width="50" height="70" loading="lazy" class="flower">
    </div>

    <h2 class="title-sans">Confirma tu asistencia</h2>

    <div class="rsvp-card">
      <!-- Mensajes -->
      @if (session('ok'))
        <div class="rsvp-alert ok">{{ session('ok') }}</div>
      @endif

      @if ($errors->any())
        <div class="rsvp-alert error">
          <ul class="mb-0">
            @foreach ($errors->all() as $e)
              <li>{{ $e }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <form class="rsvp-form" action="{{ route('rsvp.store') }}" method="POST" novalidate>
        @csrf
        <div class="form-row">
          <input type="text" name="nombre" placeholder="Nombre(s)" required>
        </div>

        <div class="form-row">
          <input type="text" name="apellido" placeholder="Apellido(s)">
        </div>

        <div class="form-row">
          <input type="tel" name="telefono" placeholder="Número telefónico" required>
        </div>

        <button type="submit" class="rsvp-btn">Confirmar asistencia</button>
      </form>
    </div>
  </div>
</section>

<!-- ===== SECCIÓN: MESA DE REGALOS ===== -->
<section id="gifts" class="section-light section-gifts">
  <div class="container-narrow">

    <!-- ramita decorativa superior -->
    <div class="leaf-divider" aria-hidden="true">
         <img src="/images/Flor1.png" alt="flor" width="50" height="70" loading="lazy" class="flower">
    </div>

    <h2 class="title-sans">Mesa de Regalos</h2>

    <p class="lead-center">
      El regalo es opcional, la asistencia obligatoria pero si quieres tener un detalle conmigo te doy algunas ideas.
    </p>

    <div class="gift-list">
      <!-- Tarjeta: Liverpool -->
      <article class="gift-card">
        <img class="gift-logo" src="/images/liverpool.webp" alt="Liverpool" loading="lazy">
        <p class="gift-event">
          <span>No. de evento:</span>
          <strong class="gift-number" data-number="51747204">51747204</strong>
        </p>
        <a class="gift-btn"
           href="http://mesaderegalos.liverpool.com.mx/milistaderegalos/51747204"
           target="_blank" rel="noopener">
          Ver mesa de regalos
        </a>
      </article>

    </div>
  </div>
</section>

<!-- ===== SECCIÓN: GALERÍA ===== -->
<section id="gallery" class="section-light section-gallery">
  <div class="container-narrow">

    <!-- ramita decorativa superior -->
    <div class="leaf-divider" aria-hidden="true">
       <img src="/images/Flor1.png" alt="flor" width="50" height="70" loading="lazy" class="flower">
    </div>

    <h2 class="title-sans">Recuerdos Inolvidables</h2>

    <div class="gallery-slider">
      <div class="gallery-track">
        <img src="/images/IMG1.png" alt="Foto 1">
        <img src="/images/IMG2.png" alt="Foto 2">
        <img src="/images/IMG3.png" alt="Foto 4">
      </div>
    </div>
  </div>
</section>

<section id="share-photos" class="section-light section-share">
  <div class="container-narrow">

    <!-- ramita decorativa superior -->
    <div class="leaf-divider" aria-hidden="true">
       <img src="/images/cor1.png" alt="flor" width="50" height="70" loading="lazy" class="flower">
    </div>

    <h2 class="title-sans">Comparte tus Recuerdos</h2>

    <p class="share-text">
      Me encantaría que compartieras aquí las fotos y videos que tomaste durante la fiesta. ¡Serán un gran recuerdo para mí!
    </p>

    <a class="share-btn" href="https://drive.google.com/drive/folders/1yAaFtBJ_jOzTM_SHg-FzGLZX-Z4fM6Um" target="_blank" rel="noopener">
      📂 Ver carpeta en Google Drive
    </a>

  </div>
</section>


<!-- Música de fondo -->
<audio id="bg-music" src="/audio/cancion.mp3" preload="auto" loop></audio>

<!-- Botón flotante de música -->
<button id="music-toggle" class="music-btn" aria-label="Reproducir música" aria-pressed="false">
  <span class="eq">
    <i></i><i></i><i></i>
  </span>
</button>

    <!-- JS del contador -->
    <script>
        (function () {
            const wrap = document.getElementById('countdown');
            const targetIso = wrap.getAttribute('data-target'); // ISO desde Blade
            const target = new Date(targetIso).getTime();

            const $ = id => document.getElementById(id);

            function tick() {
                const now = Date.now();
                const diff = target - now;

                if (diff <= 0) {
                    wrap.innerHTML = '¡Ha llegado el gran día!';
                    clearInterval(timer);
                    return;
                }

                const d = Math.floor(diff / (1000 * 60 * 60 * 24));
                const h = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const m = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
                const s = Math.floor((diff % (1000 * 60)) / 1000);

                $('d').textContent = d.toString().padStart(2, '0');
                $('h').textContent = h.toString().padStart(2, '0');
                $('m').textContent = m.toString().padStart(2, '0');
                $('s').textContent = s.toString().padStart(2, '0');
            }

            const timer = setInterval(tick, 1000);
            tick();
        })();
    </script>

    <script>
document.addEventListener('DOMContentLoaded', function(){
  const track = document.querySelector('.gallery-track');
  const slides = document.querySelectorAll('.gallery-track img');
  let index = 0;

  function showNext(){
    index = (index + 1) % slides.length;
    track.style.transform = `translateX(-${index * 100}%)`;
  }

  setInterval(showNext, 3000); // cambia cada 3 segundos
});
</script>

<script>
(function(){
  const audio = document.getElementById('bg-music');
  const btn   = document.getElementById('music-toggle');

  function syncUI(){
    const playing = !audio.paused && !audio.ended;
    btn.classList.toggle('playing', playing);
    btn.setAttribute('aria-pressed', playing ? 'true' : 'false');
  }

  btn.addEventListener('click', async () => {
    try{
      if(audio.paused){ await audio.play(); localStorage.setItem('bgMusic','on'); }
      else{ audio.pause(); localStorage.setItem('bgMusic','off'); }
      syncUI();
    }catch(e){
      // Autoplay bloqueado: el usuario deberá tocar otra vez
      console.log('No se pudo reproducir aún:', e);
    }
  });

  // Si el usuario ya lo había dejado "ON", reproduce tras el primer toque en la página
  const wantedOn = localStorage.getItem('bgMusic') === 'on';
  if (wantedOn){
    const tryStart = async () => {
      try{ await audio.play(); syncUI(); }
      catch(e){ /* ignorar */ }
      window.removeEventListener('pointerdown', tryStart);
    };
    window.addEventListener('pointerdown', tryStart, { once:true });
  }

  // Mantén UI sincronizada si se pausa por eventos del sistema
  audio.addEventListener('play',  syncUI);
  audio.addEventListener('pause', syncUI);
})();
</script>


</body>x
</html>
