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
</div>
