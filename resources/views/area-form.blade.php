@extends('layouts.main')

@section('title','Area Form')

@section('content')
  <form action="{{ route('area-result') }}" method="post">
    @csrf 
    <label>
    <table class="white_table">
    <tr> 
      <td class="point"> Type <span>::</span> </td>
      <td><input type="radio" name="type" value="1" />Rectangular
          <input type="radio" name="type" value="0.5" />Triangle</label>
      </td>
    </tr>
    <tr>
      <td class="point">Width <span>::</span> </td>
      <td><input type="number" name="width" step="any" class="area_input" />
      </td>
    </tr>
    <tr>
      <td class="point">Height <span>::</span> </td>
      <td><input type="number" name="height" step="any" class="area_input" />
      </td>
    </tr>
    </table>
    <br />
    <button type="submit">Submit</button>
    </label>
  </form>
@endsection