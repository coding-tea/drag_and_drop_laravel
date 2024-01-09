<?php

namespace App\Livewire;

use Livewire\Component;

class DragBetweenDivsComponent extends Component
{
    public $items = ['Item 1', 'Item 2', 'Item 3'];
    public $targetItems = [];

    public function render()
    {
        return view('livewire.drag-between-divs-component');
    }

    public function moveForward($index)
    {
        $forwardItem = $this->items[$index];
        unset($this->items[$index]);
        $this->items = array_values($this->items);
        $this->targetItems[] = $forwardItem;
    }

    public function moveBack($index){
        $backItem = $this->targetItems[$index];
        unset($this->targetItems[$index]);
        $this->targetItems = array_values($this->targetItems);
        $this->items[] = $backItem;
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
