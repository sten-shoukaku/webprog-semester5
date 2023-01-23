@extends('layout.master_admin')

<link rel="stylesheet" href="{{URL::asset('css/homepage.css')}}">

@section('title', 'Add Event')

@section('content')

<div class="d-flex flex-wrap justify-content-center align-items-center" id="home-banner" style="height: 110vh">
    <img src="{{URL::asset('./images/homepage_banner.jpg')}}" alt="" style="width: 100vw; opacity: 0;">
    <div class="card d-flex position-absolute justify-content-center" style="top: 15vh; max-width: 60vw">
        <div class="card-body text-start d-block align-items-center justify-content-center px-5">
            <div class="pt-4">
                <h3 class="fw-normal" style="border-left: solid 8px #26549280; padding-left: 12px">Tambahkan Event</h3>
                <form action="/admin/event/add/event/" method="POST" enctype="multipart/form-data" class="text-start pt-3">
                    @csrf
                    <div class="pb-1">
                        <label for="banner" class="pb-2">Add Event Banner</label> <br>
                        <input type="file" name="banner" class="form-field px-3" id="banner" value="">
                    </div>
                    <div class="pb-1">
                        <label for="event-name" class="pb-2">Event Name</label> <br>
                        <input type="text" name="eventName" class="form-field px-3" id="event-name" value="" style="border: solid 1.5px #181818; width: 50vw; border-radius: 3px">
                    </div>
                    <div class="pb-1">
                        <label for="event-name" class="pb-2">Location</label> <br>
                        <input type="text" name="eventLoc" class="form-field px-3" id="event-loc" value="" style="border: solid 1.5px #181818; width: 50vw; border-radius: 3px">
                    </div>
                    <div class="pb-1">
                        <label for="event-name" class="pb-2">Date</label> <br>
                        <input type="date" name="eventDate" class="form-field px-3" id="event-date" value="" style="border: solid 1.5px #181818; width: 50vw; border-radius: 3px">
                    </div>
                    <div class="pb-1">
                        <label for="event-desc" class="pb-2">Add Description</label> <br>
                        <textarea name="eventDesc" cols="100" rows="5" style="border: solid 1.5px #181818; width: 50vw; border-radius: 3px"></textarea>
                    </div>
                    <div class="pb-1">
                        <label for="op-hour" class="pb-2">Opening Hours</label> <br>
                        <textarea name="opHour" cols="100" rows="5" style="border: solid 1.5px #181818; width: 50vw; border-radius: 3px"></textarea>
                    </div>
                    <div class="pb-1">
                        <label for="section" class="pb-2">Add Section</label> <br>
                        <input type="text" name="section" class="form-field px-3" id="section" value="" style="border: solid 1.5px #181818; width: 50vw; border-radius: 3px">
                    </div>
                    <div class="pb-1">
                        <label for="price" class="pb-2">Price</label> <br>
                        <input type="number" name="price" class="form-field px-3" id="price" value="" style="border: solid 1.5px #181818; width: 50vw; border-radius: 3px">
                    </div>
                    <div class="pb-1">
                        <label for="ticket-qty" class="pb-2">Ticket Quantity</label> <br>
                        <input type="number" name="ticketQty" class="form-field px-3" id="ticket-qty" value="" style="border: solid 1.5px #181818; width: 50vw; border-radius: 3px">
                    </div>

                    <div class="button-field pb-2 pt-5">
                        <button class="btn" type="submit" id="submit-text" name="submit" style="background-color: #DF3599; border-radius: 50px; color: #fff; width: 175px; height: 35px; font-size: smaller">ADD EVENT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection