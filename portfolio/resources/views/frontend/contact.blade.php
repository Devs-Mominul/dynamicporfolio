@extends('frontend.master')
@section('frontend')
<div class="col-12 col-md-12 col-lg-10">
    <div class="box box-content">
        <div class="pb-2">
            <h1 class="title title--h1 first-title title__separate">Contact</h1>
        </div>

        <!-- Contact -->
        <div class="map" id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29002.77640422553!2d89.93129223783696!3d24.680593840644846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fd88e58bb6a739%3A0xb296f7a43d24cbe5!2z4Kan4Kao4Kas4Ka-4Kah4Ka84KeA!5e0!3m2!1sbn!2sbd!4v1705370170247!5m2!1sbn!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <h2 class="title title--h3">Contact Form</h2>

        <form    action="{{ route('contact.store') }}" method="POST" >
            @csrf
            <div class="row">
                <div class="form-group col-12 col-md-6">
                    <input type="text" class="form-control" name="name" placeholder="Full name" >

                </div>
                <div class="form-group col-12 col-md-6">
                    <input type="email" class="form-control"  name="email" placeholder="Email address"  >

                </div>
                <div class="form-group col-12 col-md-6">
                    <input type="text" class="form-control" name="phone" placeholder="Enter your phone number" >

                </div>
                <div class="form-group col-12 col-md-6">
                    <input type="text" class="form-control" name="address" placeholder="Enter Your address" >

                </div>
                <div class="form-group col-12 col-md-12">
                    <textarea class="textarea form-control"  name="message" placeholder="Your Message"  rows="4" ></textarea>

                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 order-2 order-md-1 text-center text-md-left">
                    <div id="validator-contact" class="hidden"></div>
                </div>
                <div class="col-12 col-md-6 order-1 order-md-2 text-right">
                    <button type="submit" class="btn"><i class="font-icon icon-send"></i> Send Message</button>
                </div>
            </div>
            {{--  <div class="col-12 col-md-6 order-1 order-md-2 text-right">
                <button type="submit" class="btn"><i class="font-icon icon-send"></i> Send Message</button>
            </div>  --}}
        </form>
    </div>

    <!-- Footer -->
    <footer class="footer">© 2024 MominulHaque</footer>
</div>

@endsection
