@extends('layouts.master')
@section('title', 'Main Home')
@section('content')
    @include('layouts.navbar')

    <h1>
        This is home
    </h1>

    <br><br>

    <div class="row">
        <div class="col-md-6">
            <a href="{{route('stocks.index')}}" class="btn btn-primary w-100">Go to Stocks Index</a>
        </div>
    </div>