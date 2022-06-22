@extends('master.main')

@section('content')

    @component('components.table_brands.edit-brand', [
                       'brand' =>$brand,
                   ])
    @endcomponent

@endsection
