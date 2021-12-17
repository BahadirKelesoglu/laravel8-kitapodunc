
<div class="form-group col-md-1 col-lg-6">
    <input wire:model="search" name="search" type="text" class="input search-input form-group col-md-9 form-control my-2 my-lg-1" list="mylist" placeholder="What are you looking for..">
    @if(!empty($query))
        <datalist id="mylist">
            @foreach($datalist as $rs)
                <option value="{{$rs->title}}">{{$rs->category->title}}</option>
            @endforeach
        </datalist>
    @endif
</div>

