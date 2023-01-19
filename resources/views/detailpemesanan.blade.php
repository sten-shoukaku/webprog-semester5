@extends('layout.master_member')

<link rel="stylesheet" href="{{asset('css/detailpemesanan.css')}}">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Andika" />

@section('title', 'Detail Pemesanan')

@section('content')
<div class="d-flex align-items-center justify-content-center" style="width: 100vw;">
    <div class="d-flex flex-wrap align-items-center justify-content-center" style="margin: 3rem 2rem;">
        <form class="d-flex flex-wrap align-items-center justify-content-center" action="#" method="POST" style="margin: 5rem 0rem">
            @csrf
            <div class="d-flex flex-wrap flex-column bg-white" style="margin: 0rem 1rem;  padding: 0.2rem 2rem 3rem 2rem; height: 45rem">
                <div class="form-title">
                    <h3>Detail Pengunjung</h3>
                </div>
                <div class="d-flex flex-wrap flex-column form-content">
                    <div class="d-flex flex-wrap flex-column justify-content-start input-container">
                        <label class="input-label" for="nama_lengkap">Nama Lengkap</label>
                        <input class="input-field" type="text" name="nama_lengkap" id="nama_lengkap">
                    </div>

                    <div class="d-flex flex-wrap flex-column justify-content-start input-container">
                        <label class="input-label" for="email">Email</label>
                        <input class="input-field" type="text" name="email" id="email">
                        <p style="font-size: 0.6rem; color: rgb(85, 83, 83); margin-left: 0.2rem">E-ticket akan dikirim ke email ini</p>
                    </div>

                    <div class="d-flex flex-wrap flex-column justify-content-start input-container">
                        <label class="input-label" for="nomor_ponsel">Nomor Ponsel</label>
                        <input class="input-field" type="text" name="nomor_ponsel" id="nomor_ponsel">
                    </div>

                    <div class="d-flex flex-wrap flex-column justify-content-start input-container">
                        <label class="input-label" for="nomor_ktp">Nomor KTP</label>
                        <input class="input-field" type="text" name="nomor_ktp" id="nomor_ktp">
                    </div>
                </div>
            </div>

            <div class="d-flex flex-wrap flex-column bg-white" style="margin: 0rem 1rem;  padding: 0.2rem 2rem 3rem 2rem; height: 45rem">
                <div class="form-title">
                    <h3>Detail Pemesanan</h3>
                </div>

                <div class="d-flex flex-wrap flex-column form-content">
                    <div class="d-flex" style="max-width: 25rem; border-bottom: 0.1rem solid; padding-bottom: 1rem; margin-bottom: 1rem">
                        <img src="{{asset('/images/concert2.jpg')}}" alt="Concert Picture" style="max-height: 5rem; margin: 0.1rem 1rem">
                        <h5 style="margin: 0rem 0.5rem; font-weight:bold">Itzy The 1st World Tour (CHECKMATE in JAKARTA (General Sales)</h5>
                    </div>
                    <div class="d-flex flex-column" style="max-width: 25rem; border-bottom: 0.1rem solid; padding-bottom: 1rem; margin-bottom: 1rem">
                        <h4 style="margin: 0rem 1rem">Blue A</h4>
                        <div class="d-flex" style="margin: 0rem 1rem">
                            <p>Jumlah Ticket:</p>
                            <p style="margin-left: 2rem">1</p>
                        </div>
                    </div>
                    <div class="d-flex flex-column align-items-end" style="max-width: 25rem; margin-bottom: 0.5rem">
                        <p style="color: rgb(85, 83, 83)">Total</p>
                        <h3 style="font-weight: bold">IDR 2.915.000</h3>
                    </div>

                    <button class="checkout-btn" type="submit" style="border-radius: 2rem; padding: 0.3rem 0rem">CHECKOUT</button>
                    <p class="text-center" style="font-size: 0.7rem; color: rgb(150, 149, 149); margin-top: 0.5rem">Dengan menekan “Checkout” anda menyetujui peraturan yang berlaku.</p>
                </div>
            </div>


        </form>
    </div>
</div>
@endsection
