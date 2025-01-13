@extends('visitor.layouts.app')
@section('title', 'Contact us')
@section('content')
<div class="breadcrumb">
    <h3>Contact us</h3>
</div>
<div class="container">
    <div class="row py-5">
        <div class="col-md-5">
            <p>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3679.941730472231!2d71.62444027530519!3d22.730407079379553!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959418fd76eccc1%3A0xd48553a8e44d7d92!2sflipcodesolutions!5e0!3m2!1sen!2sin!4v1722508445620!5m2!1sen!2sin"
                    width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </p>
        </div>
        <div class="col-md-7">
            <form>
                <h2>Write to us</h2>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Subject</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Message</label>
                    <textarea class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></textarea>
                </div>
                <button type="submit" class="btn btn-danger">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
