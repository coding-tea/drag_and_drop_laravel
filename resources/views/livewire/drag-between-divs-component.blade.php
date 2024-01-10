<div>

    {{-- if you have any thing else --}}
    {{-- drop it here --}}

    {{-- for drag and drop --}}
    <div class="row row-cols-lg-2 mt-5">

        <div class="col">

            <div class="card card-bordered">

                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">{{ $box1 }}</h3>
                    </div>
                </div>


                <div class="card-body">

                    <div style="display: flow" class="scroll h-500px px-5 row row-cols-1 g-10 min-h-200px">

                        @isset($Sourceitems)
                            @foreach ($Sourceitems->toArray() as $item)
                                <div class="col" tabindex="0" wire:key="target-{{ $item['id'] }}">
                                    <div class="card bg-light-warning">
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h3 class="card-label">{{ $item[$SourceitemsShowsColumn] }}</h3>
                                            </div>
                                            <div class="card-toolbar">
                                                <button wire:click="moveToTarget({{ $item['id'] }})"
                                                    style="cursor: pointer;" style="font-size: 20px"
                                                    class="btn btn-icon btn-hover-light-primary">
                                                    &rarr;
                                                </button>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            @endforeach
                        @endisset

                    </div>

                </div>

            </div>

        </div>

        <div class="col">

            <div class="card card-bordered">

                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">{{ $box2 }}</h3>
                    </div>
                </div>


                <div class="card-body">

                    <div style="display: flow" class="scroll  h-500px row row-cols-1 g-10 min-h-200px">
                        @isset($targetItems)
                            @foreach ($targetItems->toArray() as $item)
                                <div wire:key="target-{{ $item['id'] }}" class="col">
                                    <div class="card bg-light-warning">
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h3 class="card-label">{{ $item[$targetItemsShowsColumn] }}</h3>
                                            </div>
                                            <div class="card-toolbar">
                                                <button wire:click="moveToSource({{ $item['id'] }})"
                                                    style="cursor: pointer;" style="font-size: 20px"
                                                    class="btn btn-icon btn-hover-light-primary">
                                                    &larr;
                                                </button>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            @endforeach
                        @endisset
                    </div>

                </div>

            </div>

        </div>
    </div>

</div>
