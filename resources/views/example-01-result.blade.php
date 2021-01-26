@extends('layouts.main')

@section('title','Example-01: Result')

@section('content')
   <p>
      <b>Price ::</b> {{ $price }}
      <br />
      <b>Discount ::</b> {{ $discount }}
      <br />
      <b>Discount cost ::</b> {{ $discountCost }}
      <br />
      <b>Net price ::</b> {{ $netPrice }}
      <br />
   </p>
@endsection