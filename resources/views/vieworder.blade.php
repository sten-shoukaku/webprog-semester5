@extends('layout.master_member')

<link rel="stylesheet" href="{{asset('css/detailpemesanan.css')}}">
<link rel="stylesheet" href="{{asset('css/vieworder.css')}}">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Andika" />

@section('title', 'View Order')

@section('content')
<div class="d-flex align-items-center justify-content-center" style="width: 100vw;">
    <div class="d-flex flex-wrap align-items-center justify-content-center" style="margin: 3rem 2rem;">
        <div class="d-flex flex-wrap flex-column bg-white" style="margin: 5rem 1rem;  padding: 0.2rem 20rem 3rem 2rem; height: 37rem">
            <div class="section-title">
                <h3>Riwayat Pemesanan</h3>
            </div>
            <div class="d-flex flex-wrap flex-column section-content">
                @foreach ($transaction as $data)
                    <p style="font-size: 0.7rem; color: rgb(85, 83, 83); margin-top: 0.5rem; margin-left: 1.2rem">Order ID: {{ $data->id }}</p>
                    <div class="d-flex" style="max-width: 35rem; border-bottom: 0.1rem solid; padding-bottom: 1rem; margin-bottom: 1rem">
                        <img src="{{asset('/images/concert2.jpg')}}" alt="Concert Picture" style="max-height: 5rem; margin: 0.1rem 1rem">
                        <div class="d-flex flex-column">
                            <h5 style="margin: 0.1rem 1rem; font-weight:bold">{{ $data->eventName }}</h5>
                            <p style="font-size: 01rem; color: black; font-weight: lighter; margin: 0.1rem 1rem">{{ $data->location }}</p>
                            <p style="font-size: 01rem; color: black; font-weight: lighter; margin: 0.1rem 1rem">{{ $data->date }}</p>
                        </div>
                    </div>
                    <div class="d-flex flex-row justify-content-between" style="max-width: 35rem; border-bottom: 0.1rem solid; padding-bottom: 1rem; margin-bottom: 1rem">
                        <div class="class d-flex flex-column align-items-start justify-content-center" style="margin: 0rem 1rem">
                            <h4 >{{ $data->sectionName }}</h4>
                            <div class="d-flex">
                                <p>Jumlah Ticket:</p>
                                <p style="margin-left: 2rem">{{ $data->quantity }}</p>
                            </div>
                        </div>
                        <div class="d-flex flex-column align-items-end justify-content-center" style="margin: 0rem 1rem">
                            <p style="color: rgb(85, 83, 83); text-align: right">Total</p>
                            <h3 style="min-width: 14rem; font-weight: bold; text-align: right">@currency( $data->total_price )</h3>
          @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
