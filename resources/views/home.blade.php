@extends('layouts.app')

@section('content')
    <search-form endpoint="{{ route('query.store') }}" last_query="{{ $last_query }}"/>
@endsection
