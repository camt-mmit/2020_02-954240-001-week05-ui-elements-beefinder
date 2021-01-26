@extends('layouts.main')

@section('title','Area Result')

@section('content')
   <table class="white_table">
      <tr> 
        <td class="point">Type <span>::</span></td> 
        <td class="area_input">{{ $type }}<td>
      </tr>
      <tr>
        <td class="point">Widht <span>::</span></td> 
        <td class="area_input">{{ $width }}</td>
      </tr>
      <tr>
        <td class="point">Height <span>::</span></td> 
        <td class="area_input">{{ $height }}</td>
      </tr>
      <tr>
        <td class="point">Area <span>::</span></td> 
        <td class="area_input">{{ $area }}</td>
      </tr>
   </table>
@endsection