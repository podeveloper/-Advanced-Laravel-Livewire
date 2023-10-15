<div>
    <form>
        <label for="">Currency Name</label><br>
        <input type="text" wire:model="name"><br>
        <br>

        <label for="">Currency Rate</label><br>
        <input type="text" wire:model="rate"><br>
        <br>

        <button wire:click="submit">Save</button>
    </form>
    @livewire('currencies')
</div>
