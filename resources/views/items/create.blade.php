@extends('layout.master')
@section('title')
    Create Items
@endsection

@section('content')
    Create a new Item
    <form method="POST" action="/item">
    {{csrf_field()}}
    <p><label>Name: </label><input type="text" name="name"></p>
    <p><label>Price: </label><input type="text" name="price"></p>
    <p><label>Type: </label><input type="text" name="type"></p>
    <p><label>Description: </label><input type="text" name="description"></p>
    <p><select name="manufacturer">
        @foreach ($manufacturers as $manufacturer)
        <option value="{{$manufacturer->id}}">{{$manufacturer->name}}</option>
        @endforeach
    </select></p>
    <input type="submit" value="Create"> </form>
@endsection