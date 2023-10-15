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
    <table class="table table-striped">
            @foreach($currencies as $currency)
                <tr>
                    <td>{{$currency->name}}</td>
                    <td>{{$currency->rate}}</td>
                    <td><button class="btn btn-danger" wire:click="deleteConfirm({{$currency->id}})">Delete</button></td>
                </tr>
            @endforeach
    </table>
</div>
