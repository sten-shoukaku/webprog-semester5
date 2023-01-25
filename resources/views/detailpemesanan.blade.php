@extends('layout.master_member')

<link rel="stylesheet" href="{{asset('css/detailpemesanan.css')}}">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Andika" />

@section('title', 'Detail Pemesanan')

@section('content')
<div class="d-flex align-items-center justify-content-center" style="width: 100vw;">
    <div class="d-flex flex-wrap align-items-center justify-content-center" style="margin: 3rem 2rem;">
        <form class="d-flex flex-wrap align-items-center justify-content-center" action="/orderDetail" method="POST" style="margin: 5rem 0rem">
            @csrf
            <div class="d-flex flex-wrap flex-column bg-white" style="margin: 0rem 1rem;  padding: 0.2rem 2rem 3rem 2rem; height: 45rem">
                <div class="form-title">
                    <h3>Detail Pengunjung</h3>
                </div>
                <div class="d-flex flex-wrap flex-column form-content">
                    <div class="d-flex flex-wrap flex-column justify-content-start input-container">
                        <label class="input-label" for="namaLengkap">Nama Lengkap</label>
                        <input class="input-field @error('namaLengkap') is-invalid @enderror" type="text"
                        name="namaLengkap" id="namaLengkap" required value="{{ old('namaLengkap')}}">
                        @error('namaLengkap')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="d-flex flex-wrap flex-column justify-content-start input-container">
                        <label class="input-label" for="email">Email</label>
                        <input class="input-field @error('email') is-invalid @enderror" type="text"
                        name="email" id="email" required value="{{ old('email')}}">
                        <p style="font-size: 0.6rem; color: rgb(85, 83, 83); margin-left: 0.2rem">E-ticket akan dikirim ke email ini</p>
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="d-flex flex-wrap flex-column justify-content-start input-container">
                        <label class="input-label" for="nomorPonsel">Nomor Ponsel</label>
                        <input class="input-field @error('nomorPonsel') is-invalid @enderror" type="text"
                        name="nomorPonsel" id="nomorPonsel" required value="{{ old('nomorPonsel')}}">
                        @error('nomorPonsel')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="d-flex flex-wrap flex-column justify-content-start input-container">
                        <label class="input-label" for="nomorKTP">Nomor KTP</label>
                        <input class="input-field @error('nomorKTP') @enderror" type="text"
                        name="nomorKTP" id="nomorKTP" required value="{{ old('nomorKTP')}}">
                        @error('nomorKTP')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    {{-- @if($errors->any())
                        <p class="text-danger text-left mt-3">{{ $errors->first() }}</p>
                    @endif --}}
                </div>
            </div>

            <div class="d-flex flex-wrap flex-column bg-white" style="margin: 0rem 1rem;  padding: 0.2rem 2rem 3rem 2rem; height: 45rem">
                <div class="form-title">
                    <h3>Detail Pemesanan</h3>
                </div>

                <div class="d-flex flex-wrap flex-column form-content">
                    <div class="d-flex" style="max-width: 25rem; border-bottom: 0.1rem solid; padding-bottom: 1rem; margin-bottom: 1rem">
                        <img src="{{URL::asset('./images/'.$event->image)}}" alt="Concert Picture" style="max-height: 5rem; margin: 0.1rem 1rem">
                        <h5 style="margin: 0rem 0.5rem; font-weight:bold">{{ $event->name }}</h5>
                    </div>
                    <div class="d-flex flex-column" style="max-width: 25rem; border-bottom: 0.1rem solid; padding-bottom: 1rem; margin-bottom: 1rem">
                        <h4 style="margin: 0rem 1rem">{{ $section->name }}</h4>
                        <div class="d-flex" style="margin: 0rem 1rem">
                            <p>Jumlah Ticket:</p>
                            <p style="margin-left: 2rem">{{ $quantity }}</p>
                        </div>
                    </div>
                    <div class="d-flex flex-column align-items-end" style="max-width: 25rem; margin-bottom: 0.5rem">
                        <p style="color: rgb(85, 83, 83)">Total</p>
                        <h3 style="font-weight: bold">@currency( $total_price )</h3>
                    </div>

                    @php
                        $eventId = $event->id;
                        $sectionId = $section->id;
                    @endphp

                    <input
                        type="hidden"
                        name="eventId"
                        value={{$eventId}}>
                    <input
                        type="hidden"
                        name="sectionId"
                        value={{$sectionId}}>
                    <input
                        type="hidden"
                        name="quantity"
                        value={{$quantity}}>
                    <input
                        type="hidden"
                        name="totalPrice"
                        value={{$total_price}}>

                    <button class="checkout-btn" type="submit" style="border-radius: 2rem; padding: 0.3rem 0rem">CHECKOUT</button>
                    <p class="text-center" style="font-size: 0.7rem; color: rgb(150, 149, 149); margin-top: 0.5rem">Dengan menekan “Checkout” anda menyetujui peraturan yang berlaku.</p>
                </div>
            </div>


        </form>
    </div>
</div>
@endsection
