@extends('layouts.app')

@section('content')
    <search-form endpoint="{{ route('query.store') }}"/>
@endsection
