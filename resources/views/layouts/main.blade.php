<main>
    <div class="cards-container">
        <h2>Le lunghe</h2>
        <section class="pasta">
        @foreach ($paste as $pasta)
            @if($pasta['tipo'] == 'lunga')
            <div class="card">
                <div class="items">
                    <div class="hover">
                        <h5>{{ $pasta['titolo'] }}</h5>
                        <img src="img/icon.svg" alt="">
                    </div>
                    <img src= " {{ $pasta['src'] }} " alt="">
                </div>
            </div>
            @endif
        @endforeach
        </section>
        <h2>Le corte</h2>
        <section class="pasta">
        @foreach ($paste as $pasta)
            @if($pasta['tipo'] == 'corta')
            <div class="card">
                <div class="items">
                    <div class="hover">
                        <h5>{{ $pasta['titolo'] }}</h5>
                        <img src="img/icon.svg" alt="">
                    </div>
                    <img src= " {{ $pasta['src'] }} " alt="">
                </div>
            </div>
            @endif
        @endforeach
        </section>
        <h2>Le cortissime</h2>
        <section class="pasta">
        @foreach ($paste as $pasta)
            @if($pasta['tipo'] == 'cortissima')
            <div class="card">
                <div class="items">
                    <div class="hover">
                        <h5>{{ $pasta['titolo'] }}</h5>
                        <img src="img/icon.svg" alt="">
                    </div>
                    <img src= " {{ $pasta['src'] }} " alt="">
                </div>
            </div>
            @endif
        @endforeach
        </section>
    </div>
</main>