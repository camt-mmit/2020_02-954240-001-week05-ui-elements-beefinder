@extends('layouts.main')

@section('title','Example-01: Form')

@section('content')
   <form action="{{ route('example-01-result') }}" method="post">
    @csrf 
    <label>Price <input type="number" name="price" step="2.5" /></label>
    <br />
    <label>Discount (%) <input type="number" name="discount" step="0.01" /></label>
    <br />
    <button type="submit">Submit</bumton>
   </form>
@endsection