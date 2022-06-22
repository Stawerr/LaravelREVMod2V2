@extends('master.main')

@section('content')

    @component('components.table_brands.oneBrand', [
                       'brand' =>$brand,
                   ])
    @endcomponent

@endsection
