<div class="container my-5">
    <div class="row">
        <div class="col-md-8">
            <h2>Currencies:</h2>
        </div>
        <div class="col-md-4">
            <input wire:model.live="search" type="text" class="form-control" placeholder="Type here to search name">
        </div>

    </div>
    <hr>
    <table wire:init="somethingLoading" class="table table-striped">
        @if($loading)
            <div>Loading...</div>
        @else
            @foreach($currencies as $curency)
                <tr>
                    <td>{{$curency->name}}</td>
                    <td>{{$curency->rate}}</td>
                </tr>
            @endforeach
        @endif
    </table>
</div>
