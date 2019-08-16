@extends('layouts.app')

@section('content')
    <search-form endpoint="{{ route('query.store') }}"/>

    @if (!empty($hits))
        data
    @else
        no data
    @endif
@endsection
