

@extends('Layouts/layout')
@section('content')

<h1>Customers</h1>


<ul>
@foreach ($customers_arr as $customers)
<li>{{$customers}}</li>
@endforeach

</ul>
@endsection