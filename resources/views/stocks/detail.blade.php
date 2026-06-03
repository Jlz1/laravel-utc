@extends('layouts.master')
@section('title', 'Stock Detail')
@section('content')
    @include('layouts.navbar')

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <table class="table table-bordered">
                    <tr>
                        <th>Ticker</th>
                        <th>Average</th>
                        <th>Price Now</th>
                        <th>P/L</th>
                    </tr>

                    <tr>
                        <td>{{$stock['ticker']}}</td>
                        <td>{{$stock['average']}}</td>
                        <td>{{$stock['price']}}</td>
                        <td>
                            {{($stock['price'] - $stock['average'])/$stock['average'] * 100}}%
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
