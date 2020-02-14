<h1>lista prodotti</h1>
@foreach ($vestiti as $vestito)
    <div class="card">
        <p>Nome: {{ $vestito->name }} </p>
        <p>Prezzo: {{$vestito->prezzo}} </p>
        <hr>
    </div>

@endforeach
