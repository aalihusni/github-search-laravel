<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div class="border-gray-300 border-b pb-4">
    	<select wire:model="type" wire:change="">
	    	@foreach($types as $key => $value)
	    		<option value="{{ $key }}">{{ $value }}</option>
	    	@endforeach
	    </select>
	    <input wire:model="term" type="text" wire:keydown.enter="search">
    </div>
    
    @include('partials.gh.'.$type, ['responses' => $responses])
</div>
