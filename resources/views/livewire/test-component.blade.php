<div>
    <div class="border rounded-3 p-2 bg-secondary my-2 ">
        <button wire:click="updateNumber">+</button>
        <p>Component Livewire => Count => ({{ $count }})</p>
    </div>

    <br>
    <div class="border rounded-3 p-2 bg-secondary my-2 ">
        <button wire:click="setData">Set</button>
        {{ $data }}
    </div>

    <div class="border rounded-3 p-2 bg-secondary  my-2">
        <button class="btn btn-info" @click="MTMTest">Btn vue</button>
    </div>

    <div class="border rounded-3 p-2 bg-secondary  my-2">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">@</span>
            <input type="text" wire:model='inputText' wire:keydown.enter="pushArray" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        @foreach ($inputArray as $item)
            <span class="badge text-bg-primary">{{ $item }}</span>
        @endforeach
    </div>

    <div class="border rounded-3 p-2 bg-secondary  my-2">
        <input type="radio" name="radioTest" value="test" wire:model="radioItem">
    </div>

    <div class="border rounded-3 p-2 bg-secondary  my-2">
        {{--  @foreach ($posts as $post)
            <span class="badge text-bg-primary">{{ $post }}</span>
        @endforeach  --}}
    </div>

    <div class="border rounded-3 p-2 bg-secondary  my-2">
        <p>Get Database</p>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">{{ $iconStatus }}</span>
            <input type="text" wire:model='title' name="title" wire:keydown.enter="{{ ($statusEdit == 0) ? 'pushTaskArray' : 'editTaskItem'}}" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        @error('title')
            <div class="alert alert-danger" role="alert">
                {{ $message }}
            </div>
        @enderror
        @if($error != '')
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
        @enderror

        @foreach ($Tasks as $task)
            <span id="{{ $task->id }}" class="badge py-3 {{ ($task->id == $statusEdit) ? 'text-bg-info' : 'text-bg-primary' }} ">{{ $task->title }}
                <br>
                <p wire:click="deleteTask({{ $task->id }})" class="pt-3" style="cursor: pointer;color:blue">*****</p>
                <p wire:click="editTask({{ $task->id }})" class="pt-3" style="cursor: pointer;color:red">edit</p>
            </span>

        @endforeach
    </div>

    <div class="border rounded-3 p-2 bg-secondary  my-2">
        <div class="alert {{ ($status) ? 'alert-success' : 'alert-danger' }} d-flex align-items-center" role="alert">
            <div>
              An example danger alert with an icon
            </div>
        </div>
        <br>
        <button type="button" wire:click="$toggle('status')" class="btn btn-danger">Danger</button>
        <br>
    </div>

    <div class="border rounded-3 p-2 bg-secondary  my-2">
        <input type="radio" wire:model="setChangeInputFundtion" name="itemOne" checked value="1" id="">
        <br>
        <input type="radio" wire:model="setChangeInputFundtion" name="itemOne" value="2" id="">
        <br>
        <input type="radio" wire:model="setChangeInputFundtion" name="itemOne" value="3" id="">
    </div>

    <div class="border rounded-3 p-2 bg-secondary  my-2">
        <br>
        <button type="button" wire:click="$refresh()" class="btn btn-info">Info Magic Actions</button>
        <br>
    </div>

    <div class="border rounded-3 p-2 bg-secondary  my-2">
        @if($isShow)
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>
</div>
