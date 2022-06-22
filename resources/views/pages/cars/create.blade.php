@extends('master.main')

@section('content')

    @component('components.table_cars.car-form-create', [
                       'brands' =>$brands,
                       'owners' =>$owners,
                   ])
    @endcomponent

@endsection
