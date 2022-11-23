<!DOCTYPE html>
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <p>View / Edit Weights</p>
    <form>
        @csrf
        <table class="styled-table">
            <thead>
                <tr>
                    <th><label for="id">ID</label></th>
                    <th><label for="type">Type</label></th>
                    <th><label for="value">Value</label></th>
                    <th><label for="weight">Weight</label></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                    <tr class="item_{{ $item->id }}">
                        <th><input type="text" name="id" value="{{ $item->id }}" style="width:6ch;" disabled></input></th>
                        <td><input type="text" name="item_type" value="{{ $item->item_type }}" disabled></input></td>
                        <td><input type="text" name="value" value="{{ $item->value }}" disabled></input></td>
                        <td><input type="text" name="weight" value="{{ $item->weight }}"></input></td> 
                    </tr>
                @endforeach
            </tbody>
        </table> 
        <button type="Submit" id="update-weights-btn">Save</button>
    </form>

    <p>Last 10 Spins</p>
    <table class="styled-table">
        <thead>
            <tr>
                <th><label for="id">ID</label></th>
                <th><label for="result">Result</label></th>
                <th><label for="Created At">Created At</label></th>
            </tr>
        </thead>
        <tbody>
            @foreach($spins as $spin)
            <tr>
                <th>{{$spin->id}}</th>
                <td>{{$spin->result}}</td>
                <td>{{$spin->created_at}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
</html>

<script src="{{ asset('js/app.js') }}"></script>