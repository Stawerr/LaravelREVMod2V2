@extends('master.main')

@section('content')

    @component('components.table_cars.carsList', [
                       'cars' =>$cars,
                   ])
    @endcomponent

@endsection
