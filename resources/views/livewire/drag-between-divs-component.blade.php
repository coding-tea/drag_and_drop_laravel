<div>
    <h1>Drag and Drop</h1>

    <div>
        <h3>Source</h3>
        <ul>
            @foreach ($items as $index => $item)
                <li
                    wire:key="source-{{ $index }}"
                    wire:click="moveToTarget({{ $index }})"
                    style="cursor: pointer;"
                >
                    {{ $item }}
                </li>
            @endforeach
        </ul>
    </div>

    <div>
        <h3>Target</h3>
        <ul>
            @foreach ($targetItems as $index => $item)
                <li 
                    wire:key="target-{{ $index }}"
                    wire:click="moveToSource({{ $index }})"
                    style="cursor: pointer;"
                >
                    {{ $item }}
                </li>
            @endforeach
        </ul>
    </div>
</div>