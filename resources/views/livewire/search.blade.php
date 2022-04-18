<div>
    <input wire:model="search" name="search" list="mylist" class="search-input" type="text">

    @if (!empty($query))
        <datalist id="mylist">
            @foreach ($dataList as $rs)
                <option value="{{ $rs->title }}">{{ $rs->category->title }} </option>
            @endforeach
        </datalist>
    @endif
</div>
