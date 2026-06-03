@extends('layouts.master')
@section('title', 'Portofolio')
@section('content')
    @include('layouts.navbar')

    <h1>This is Portofolio</h1>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <table class="col-md-4 table table-bordered">
                    <tr class="table-primary">
                        <th>ID</th>
                        <th>Ticker</th>
                        <th>Average</th>
                    </tr>
            
                    @foreach ($stocks as $stock)
                        <tr class="table-secondary">
                            <td>{{$stock['id']}}</td>
                            <td>{{$stock['ticker']}}</td>
                            <td>{{$stock['average']}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>


        </div>
    </div>

    <br><br>
