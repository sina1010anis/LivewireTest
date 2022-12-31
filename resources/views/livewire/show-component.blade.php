<div>
    <div class="border rounded-3 p-2 bg-secondary my-2 ">
        <button class="btn btn-info" wire:click="$emit('ChangeShowJs')">ChangeShow Js</button>
        <br>
        <br>
        <button class="btn btn-info" wire:click="$emit('ChangeShow')">ChangeShow</button>
    </div>
    <div class="border rounded-3 p-2 bg-secondary my-2 ">
        {{ $countItem }}
        <br>
        <br>
        <button class="btn btn-warning shadow-lg" wire:click="testComponent(20)">testComponent Btn (number item) =>{{ $numberItem }}</button>
        <br>
        <br>
        <input type="text" wire:model="inputItem">
    </div>
    <div class="border rounded-3 p-2 bg-secondary my-2 ">
        <form wire:submit.prevent="fileUpload" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="formFile" class="form-label">Default file input example</label>
                <input class="form-control" name="image" wire:model="image" type="file" id="formFile" multiple>
            </div>
            <div wire:loading wire:target="image">
                <div class="spinner-grow text-primary" role="status">
                    <span class="visually-hidden">Loading...</span>
                  </div>
            </div>
            @error('image')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
            </div>
        </form>
    </div>
    <div class="border rounded-3 p-2 bg-secondary my-2 ">
        <button class="btn btn-danger" wire:click="export">
            Download File
        </button>
    </div>
    <div class="border rounded-3 p-2 bg-secondary my-2 ">
        @foreach ($users as $user)
            <span class="badge text-bg-primary">{{ $user->name }}</span>
        @endforeach
        {{ $users->links() }}
    </div>

    <div class="border rounded-3 p-2 bg-secondary my-2 ">
        <div wire:loading wire:target="testComponent(20)">
            <div class="text-center">
                <div class="spinner-border" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        </div>
    </div>
</div>
