@extends('master.main')

@section('content')

    @component('components.table_brands.brandsList', [
                       'brands' =>$brands,
                   ])
    @endcomponent

@endsection
