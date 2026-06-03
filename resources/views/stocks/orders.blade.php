@extends('layouts.master')
@section('title', 'Orders')
@section('content')
    @include('layouts.navbar')
    <h1>This is orders</h1>

    {{-- form isinya label, input --}}
    <div class="container">
        <div class="row">
            <div class="col-8" class="">
                <form action="{{route('stocks.store')}}" method="POST">
                    @csrf 
                    
                    <div class="col-md-4">
                        <label>Ticker</label>
                        <input type="text" name="ticker" placeholder="Input ticker">
                    </div>

                    <div class="col-md-4">
                        <label>Price</label>
                        <input type="text" name="price" placeholder="Input price">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                    
                </form>
            </div>
        </div>
    </div>