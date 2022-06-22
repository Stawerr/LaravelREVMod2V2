@extends('master.main')

@section('content')

    @component('components.table_cars.edit-car', [
                       'car' =>$car,
                       'brands' =>$brands,
                       'owners' =>$owners,
                   ])
    @endcomponent

@endsection
