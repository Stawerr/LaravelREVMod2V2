@extends('master.main')

@section('content')

    @component('components.table_brands.brand-form-create', [
                       'brands' =>$brands,
                   ])
    @endcomponent

@endsection
