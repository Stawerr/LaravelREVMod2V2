@extends('master.main')

@section('content')

    @component('components.table_cars.oneCar', [
                       'car' =>$car,
                   ])
    @endcomponent

@endsection
