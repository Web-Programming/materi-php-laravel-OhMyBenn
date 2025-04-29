<div>
    <h1>Hasil Perhitungan</h1>
    {{ $bil }} + {{ bil2 }} + {{ $bil3 }} = {{ total }}
    <br/>
    <br/>
    @if ($bil3 == 0)
        Bilangan ke 3 tidak diisi
    @endif
</div>