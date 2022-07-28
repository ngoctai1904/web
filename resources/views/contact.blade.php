@extends('base')
@section('title')
    <title>Contacts</title>
@endsection
@section('content')
    <!-- Contact -->
    <div class="Contact">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    @if(Session::get('message_sent'))
                    <div class ="alert alert-success" role ="alert">
                        {{Session::get('message_sent')}}
                    </div>
                    @endif
                    <form method="POST action="{{route('contact.send')}} enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <input class="form-control" placeholder="Name" name="name" type="text">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <input class="form-control" placeholder="Email" name="email" type="Email">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <input class="form-control" placeholder="Phone Number" name="phone_nu" type="text">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <input class="form-control" placeholder="Subject" name="subject" type="text">
                            </div>
                            <div class="col-sm-12">
                                <textarea class="textarea" name="message" placeholder="Message">Message</textarea>
                            </div>
                        </div>
                    </form>
                </div>
                <button class="send-btn">Send</button>
            </div>
        </div>
    </div>
@endsection
