<div class="main-container">

    <div class="left-container">
        <h2>OFFERS AVAILABLE</h2>
        @forelse($offers as $offer)
            <div class="sub-container" wire:key="{{ $offer->id }}">
                <h3 class="fields-offers"><i class="fas fa-home"></i>
                    <span>{{ strtoupper($offer->company->company_name) }}</span>
                </h3>
                <h3 class="fields-offers"><i class="fas fa-briefcase"></i>
                    <span>{{ strtoupper($offer->occupation->occupation_name) }}</span>
                </h3>
                <h3 class="fields-offers"><i class="fas fa-map-pin"></i>
                    <span>{{ strtoupper($offer->ubication->municipality_name) }}</span>
                </h3>
                <button class="show-button" wire:click.prevent="selectOffer({{ $offer->id }})">
                    <i class="fas fa-eye"></i> SHOW
                </button>
            </div>
        @empty
            <h2>NO OFFERS AVAILABLE</h2>
        @endforelse
    </div>

    <div class="right-container">
        <h2>OFFER DETAILS</h2>
        <div class="sub-container-2">
            @if ($selectedOffer)
                <h3 class="fields-offers-2"><i class="fas fa-home"></i> <span></span>EMPRESA:</h3>
                <p class="info">{{ $selectedOffer->company->company_name }}</p>

                <h3 class="fields-offers-2"><i class="fas fa-briefcase"></i> <span></span> CARGO:</h3>
                <p class="info">{{ $selectedOffer->occupation->occupation_name }}</p>

                <h3 class="fields-offers-2"><i class="fas fa-book-open"></i> <span></span>HABILIDAD:</h3>
                <p class="info">{{ $selectedOffer->skill->skill_name }}</p>

                <h3 class="fields-offers-2"><i class="fas fa-calendar"></i> <span></span>EXPERIENCIA:</h3>
                <p class="info">{{ $selectedOffer->months_experience }} MESES</p>

                <h3 class="fields-offers-2"><i class="fas fa-clock"></i> <span></span>JORNADA:</h3>
                <p class="info">{{ $selectedOffer->workday->workday }}</p>

                <h3 class="fields-offers-2"><i class="fas fa-handshake"></i> <span></span>TIPO DE CONTRATO:</h3>
                <p class="info">{{ $selectedOffer->contract_type->contract_type }}</p>

                <h3 class="fields-offers-2"><i class="fas fa-dollar-sign"></i> <span></span>SALARIO:</h3>
                <p class="info">{{ $selectedOffer->salary->salary_range }}</p>

                <h3 class="fields-offers-2"><i class="fas fa-award"></i> <span></span>NIVEL ACADÉMICO:</h3>
                <p class="info">{{ $selectedOffer->academic_level->academic_level }}</p>

                <h3 class="fields-offers-2"><i class="fas fa-map-pin"></i> <span></span>UBICACIÓN:</h3>
                <p class="info">{{ $selectedOffer->ubication->municipality_name }}</p>

                <h3 class="fields-offers-2"><i class="fas fa-calendar"></i> <span></span>FECHA DE INICIO:</h3>
                <p class="info">{{ $selectedOffer->start_date }}</p>

                <h3 class="fields-offers-2"><i class="fas fa-calendar"></i> <span></span>FECHA DE CIERRE:</h3>
                <p class="info">{{ $selectedOffer->closing_date }}</p>

                <div class="buttons">
                    <form wire:submit.prevent="postulate">
                        @csrf
                        <button type="submit" class="btn-postulation">
                            <i class="fas fa-check-circle"></i> POSTULARME
                        </button>
                    </form>
                    {{-- <button class="back-btn"><i class="fas fa-arrow-left"></i> ATRÁS</button> --}}
                </div>

                @if ($postulationSuccess)
                    <script>
                        alert('Te has postulado exitosamente.');
                        window.location.href = "{{ route('dashboard') }}";
                    </script>
                @endif
                
            @else
                <p>No se ha seleccionado ninguna oferta.</p>
            @endif
        </div>
    </div>
</div>
