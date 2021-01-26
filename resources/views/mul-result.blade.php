@extends('layouts.main')

@section('title','Multiplication Table Result')

@section('content')
    <table class="mul_table">
    @for ($i=1;$i<=12;$i++) 
    <tr>
        @for ($j=2;$j<=$root_number;$j++) 
        <td  class="mul_table">{{ $i*$j }}</td>
        @endfor
        </tr>
    @endfor
    </table>
@endsection


