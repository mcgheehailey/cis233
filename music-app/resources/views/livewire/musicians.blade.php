
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    {{-- <h1>LiveWire</h1>
    <h1>Count is: {{$count}}</h1>
    <button wire:click="increment">+</button>

    {{$message}}

    <input wire:model="message" type="text" /> --}}

@section('title')
    Musicians
@endsection
<div>
    {{ $musicians->links() }}


    <label for="paginate" >Choose Pagination Amount:</label>

    <select wire:model="paginateAmount" wire:change="changePagintaion(e.target.value)" name="paginateAmount" id="paginateAmount">
      <option value="10">10</option>
      <option value="25">25</option>
      <option value="50">50</option>
      <option value="{{strlen($musicians)}}">All</option>
    </select>
    <input wire:model="search" type="text" placeholder="Search Musicians" size="50" />
    <table class=" table table-striped table-hover">
        <thead>
            <tr>
                <th><a href="#" wire:click="doSort('first_name', 'asc')">&uarr;</a> Name <a href="#" wire:click="doSort('first_name', 'desc')">&darr;</a></th>
                <th><a href="#" wire:click="doSort('last_name', 'asc')">&uarr;</a> Last Name <a href="#" wire:click="doSort('last_name', 'desc')">&darr;</a></th>
                <th><a href="#" wire:click="doSort('instrument', 'asc')">&uarr;</a> Instrument <a href="#" wire:click="doSort('instrument', 'desc')">&darr;</a></th>
                <th>Website</th>
                <th></th>
            </tr>
        </thead>
            
        <tbody>
            @foreach ($musicians as $musician)
            <tr>
                <td>{{$musician->first_name}}</td>
                <td>{{$musician->last_name}}</td>
                <td>{{$musician->instrument}}</td>
                <td><a href="{{$musician->website}}" >{{substr(($musician->website), 0, 100)}}</a></td>
                <td><button wire:click="deleteMusican({{$musician->id}})" class="btn btn-error">Delete</button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $musicians->links() }}

</div>
