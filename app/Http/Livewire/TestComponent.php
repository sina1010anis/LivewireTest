<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;
use Database\Factories\UserFactory;

class TestComponent extends Component
{

    public $count =0;
    public $data = "";
    public $status = false;
    public $inputText;
    public $radioItem;
    public $title;
    public $Tasks;
    public $taskCount;
    public $changeInput ='';
    public Array $inputArray = [];
    public Array $posts;
    public $error = '';
    public $statusEdit = 0;
    public $iconStatus = '+';
    public $setChangeInputFundtion;
    public $isShow = true;
    protected $listeners = [
        'ChangeShow'
    ];
    protected $rules =[
        'title' => 'required|unique:tasks'
    ];

    public function ChangeShow(){
        ($this->isShow) ? $this->isShow = false : $this->isShow = true;
    }

    public function __construct()
    {
        $this->setNewTask();
    }

    public function editTask($idTask)
    {
        $task = Task::find($idTask);
        $this->title = ($idTask == $this->statusEdit) ? $this->reset('title') : $task->title;
        $this->iconStatus = ($idTask == $this->statusEdit) ? '+' : 'U+021BA';
        $this->statusEdit = ($idTask == $this->statusEdit) ? 0 : $task->id;

        // $this->title = ($idTask == $this->statusEdit) ? $this->reset('title') : 'title_test';
        // $this->iconStatus = ($idTask == $this->statusEdit) ? '+' : 'U+021BA';
        // $this->statusEdit = ($idTask == $this->statusEdit) ? 0 : '1';
    }

    public function editTaskItem()
    {
        $this->validate();
        Task::whereId($this->statusEdit)->update(['title' => $this->title]);
        $this->setNewTask()->reset(['title' , 'statusEdit']);
    }

    public function deleteTask($idTask)
    {
        Task::whereId($idTask)->delete();
        $this->setNewTask();
    }

    public function mount( $data)
    {
        $this->data = $data["name"];
    }
    public function setNewTask()
    {
        $this->Tasks = Task::all();
        return $this;
    }
    public function pushTaskArray()
    {
        $this->validate();
        $this->createDatabaseTask($this->title)->setNewTask()->reset(['error' , 'title']);
    }

    public function createDatabaseTask($title)
    {
        Task::create(['title' => $title]);
        return $this;
    }

    public function FindDatabaseTaskCount($title , $save = true)
    {
        $count = Task::whereTitle($title)->count();
        return ($save) ? $this->taskCount = $count : $count;
    }
    public function updateNumber()
    {
        $this->count++;
    }
    public function render()
    {
        //return view('livewire.test-component', ['posts' => ['item-1','item-2','item-3']]);
        return view('livewire.test-component');
    }

    public function pushArray()
    {
        array_push($this->inputArray , $this->inputText);
        $this->inputText = '';
    }

    public function setData()
    {
        $this->data = ($this->data == 'sina') ?'name-2' : 'sina';
    }

    public function setError($error)
    {
        $this->error = $error;
        return $this;
    }
}
