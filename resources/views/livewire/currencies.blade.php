<div>
    <h2>Currencies: <button wire:click.prefetch="reloadCurrencies">Reload</button></h2>
    <hr>
    @foreach($currencies as $key => $curency)
    {{$key}}: {{$curency}} <br>
@endforeach
</div>
