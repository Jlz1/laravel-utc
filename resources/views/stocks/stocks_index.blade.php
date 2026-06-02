@extends('layouts.master')
@section('title', 'Stocks Index Page')
@section('content')
    @include('layouts.navbar')

    <div class="row">
        <div class="col-md-4">
            <button type="button" class="btn btn-primary w-100">Primary</button>
        </div>

        <div class="col-md-1">
            <a href="{{route('stocks.orders')}}" class="btn btn-secondary w-100">Orders</a>
        </div>

        <div class="col-md-7">
            <a href="{{route('stocks.portofolio')}}" class="btn btn-success w-100">Portofolio</a>
        </div>
    </div>