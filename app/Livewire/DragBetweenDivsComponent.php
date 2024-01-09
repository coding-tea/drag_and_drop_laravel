<?php

namespace App\Livewire;

use App\Models\Test;
use Livewire\Component;

class DragBetweenDivsComponent extends Component
{

    //for title
    public $box1;
    public $box2;

    //form models
    public $Sourceitems;
    public $SourceitemsShowsColumn;

    //for columns
    public $targetItems;
    public $targetItemsShowsColumn;

    public function render()
    {
        //boxes titles
        $this->box1 = "box 1";
        $this->box2 = "box 2";

        //intiale modles
        $this->Sourceitems = Test::where('is_drop', false)->get();
        $this->targetItems = Test::where('is_drop', true)->get();

        //the column name that showed on component
        $this->SourceitemsShowsColumn = "name";
        $this->targetItemsShowsColumn = "name";

        return view('livewire.drag-between-divs-component');
    }

    //the action when item get from box1
    public function moveForward($item) //$item here is the ID
    {
        Test::find($item)->update([
            "is_drop" => true
        ]);
    }

    //the action when item get from box2
    public function moveBack($item) //$item here is the ID
    {
        Test::find($item)->update([
            "is_drop" => false
        ]);
    }

    public function moveToTarget($index)
    {
        $this->moveForward($index); // Call the same logic as dragItem
    }

    public function moveToSource($index)
    {
        $this->moveBack($index); // Call the same logic as dragItem
    }
}
