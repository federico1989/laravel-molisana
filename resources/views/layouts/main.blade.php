<main>
    <h2>Le lunghe</h2>
    <section class="paste">
    @foreach ($paste as $pasta)
        @if($pasta['tipo'] == 'lunga')
        <div class="pasta">
            <img src= " {{ $pasta['src'] }} " alt="">
        </div>
        @endif
    @endforeach
    <h2>Le corte</h2>
    <section class="paste">
    @foreach ($paste as $pasta)
        @if($pasta['tipo'] == 'corta')
        <div class="pasta">
            <img src= " {{ $pasta['src'] }} " alt="">
        </div>
        @endif
    @endforeach
    <h2>Le cortissime</h2>
    <section class="paste">
    @foreach ($paste as $pasta)
        @if($pasta['tipo'] == 'cortissima')
        <div class="pasta">
            <img src= " {{ $pasta['src'] }} " alt="">
        </div>
        @endif
    @endforeach
    </section>
</main>