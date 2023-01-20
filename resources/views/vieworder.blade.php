@extends('layout.master_member')

<link rel="stylesheet" href="{{asset('css/detailpemesanan.css')}}">
<link rel="stylesheet" href="{{asset('css/vieworder.css')}}">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Andika" />

@section('title', 'View Order')

@section('content')
<div class="d-flex align-items-center justify-content-center" style="width: 100vw;">
    <div class="d-flex flex-wrap align-items-center justify-content-center" style="margin: 3rem 2rem;">
        <div class="d-flex flex-wrap flex-column bg-white" style="margin: 5rem 1rem;  padding: 0.2rem 2rem 3rem 2rem; height: 37rem; width: 70rem">
            <div class="section-title">
                <h3>Riwayat Pemesanan</h3>
            </div>

            <div class="d-flex flex-wrap flex-column section-content">
                <p style="font-size: 0.7rem; color: rgb(85, 83, 83); margin-top: 0.5rem; margin-left: 1.2rem">Order ID: 111222333</p>
                <div class="d-flex" style="max-width: 35rem; border-bottom: 0.1rem solid; padding-bottom: 1rem; margin-bottom: 1rem">
                    <img src="{{asset('/images/concert2.jpg')}}" alt="Concert Picture" style="max-height: 5rem; margin: 0.1rem 1rem">
                    <div class="d-flex flex-column">
                        <h5 style="margin: 0.1rem 1rem; font-weight:bold">Itzy The 1st World Tour (CHECKMATE in JAKARTA (General Sales)</h5>
                        <p style="font-size: 01rem; color: black; font-weight: lighter; margin: 0.1rem 1rem">Jakarta Pusat</p>
                        <p style="font-size: 01rem; color: black; font-weight: lighter; margin: 0.1rem 1rem">04 February 2023</p>
                    </div>
                </div>
                <div class="d-flex flex-row justify-content-between" style="max-width: 35rem; border-bottom: 0.1rem solid; padding-bottom: 1rem; margin-bottom: 1rem">
                    <div class="class d-flex flex-column align-items-start" style="margin: 0rem 1rem">
                        <h4 >Blue A</h4>
                        <div class="d-flex">
                            <p>Jumlah Ticket:</p>
                            <p style="margin-left: 2rem">1</p>
                        </div>
                    </div>
                    <div class="d-flex flex-column align-items-end" style="margin: 0rem 1rem">
                        <p style="color: rgb(85, 83, 83)">Total</p>
                        <h3 style="font-weight: bold">IDR 2.915.000</h3>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
@endsection
