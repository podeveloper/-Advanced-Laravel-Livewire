<div>
    <h2>Currencies:</h2>
    <hr>
    <ul>
        @foreach($currencies as $curency)
            <li>{{$curency->name}}: {{$curency->rate}}</li>
        @endforeach
    </ul>
</div>
