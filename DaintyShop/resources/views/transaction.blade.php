@extends('navbar')
@section('title', 'History')

@section('content')
    @php
        $price = 0;
    @endphp

    <div class="input-group">
        @foreach ($transaction as $t)
            @if($t->user_id == $users->id)
            @php
                $totalPrice = 0;
                $totalQty = 0;
            @endphp
            <table class="table table-striped table-hover">
                <thead>
                    <tr class="table" style="background-color:#292A5E; color:white;">
                        <th scope="col">Transaction Date: {{$t->created_at}}</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col"></th>
                        <th scope="col">Qty</th>
                        <th scope="col">Sub Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transactionDetail as $td)
                        @if($td->user_id == $users->id && $t->id == $td->transaction_id)
                        <tr>
                            <td colspan="2">{{$td->name}}</td>
                            <td>{{$td->quantity}}</td>
                            <td>{{$price = $td->quantity * $td->price}}</td>
                                @php
                                    $totalPrice = $totalPrice + $price;
                                    $totalQty = $totalQty + $td->quantity;
                                @endphp
                        </tr>
                        @endif
                    @endforeach
                        <td class="font-weight-bold" colspan="2">Total</td>
                        <td class="font-weight-bold">{{$totalQty}} item(s)</td>
                        <td class="font-weight-bold">IDR {{$totalPrice}}</td>
                </tbody>
            </table>
            @endif
        @endforeach
    </div>
@endsection
