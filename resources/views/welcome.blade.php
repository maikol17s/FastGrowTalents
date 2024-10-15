@extends('layouts.app')

@section('content')
    <main class="content">
        <div>
            @guest
                <h1 class="title-home">¡ENCUENTRA TU PRÓXIMO EMPLEO HOY!</h1>
                <p class="subtitle-home">PUBLICA TUS OFERTAS EN EL PORTAL DE EMPLEO CON MAYOR AUDIENCIA DEL PAÍS</p>
                <button onclick="window.location.href='{{ route('profile.create') }}'" class="buttons-home">
                    <span class="span-home"></span>Subir CV
                </button>
                <button onclick="window.location.href='{{ route('dashboard') }}'" class="buttons-home">
                    <span class="span-home"></span>Ver Mas...
                </button>
            @endguest
        </div>
    </main>
@endsection
