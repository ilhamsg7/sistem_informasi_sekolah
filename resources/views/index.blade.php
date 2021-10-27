@extends('fitur.navbar')

@section('content')
    <div class="row text-center py-5 mt-5">
        <h3 class="text-light text-center">Selamat Datang di Website <b>Seirin High School<b></h3>
            <p class="font-weight-light text-light mt-3" style="font-weight: 250">
                    Future of Us merupakan slogan yang kami anut
            </p>
        <div class="d-flex gap-2 justify-content-center mt-4">
            <a class="btn btn-primary primer text-center" href="#" style="margin-top: auto; margin-bottom: auto">Ayo Bergabung!!</a>
            <a class="btn btn-secondary seken text-center" href="#" style="margin-top: auto; margin-bottom: auto">Tentang Kami</a>
        </div>
    </div>
@endsection

@section('content_2')
    <div class="container main py-4">
        <h4 class="fw-bold text-center mb-4">Keunggulan Kami</h4>
        <div class="row mb-3">
            <div class="col-md-6">
                <img src="{{ asset('images/school-1.png') }}" alt="school 1" class="img-fluid gambar mb-5">
            </div>
            <div class="col-md-6">
                <h3>Diskusi</h3>
                <p class="mt-2" style="font-weight: 250">Sekolah kami mengedepankan aspek bertukar pikiran dalam rangka mengasah kemampuan berpendapat dan berpikir kritis</p>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <img src="{{ asset('images/school-2.png') }}" alt="school 2" class="img-fluid gambar mb-5">
            </div>
            <div class="col-md-6">
                <h3>Future Counseling</h3>
                <p class="mt-2" style="font-weight: 250">Kami mengharapkan lulusan dari sekolah bisa berguna dalam membangun negeri</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('images/school-3.png') }}" alt="school 3" class="img-fluid gambar mb-5">
            </div>
            <div class="col-md-6">
                <h3>Manajemen Waktu</h3>
                <p class="mt-2" style="font-weight: 250">Pemanfaatan waktu secara efektif agar kegiatan belajar berjalan maksimal</p>
            </div>
        </div>
    </div>
@endsection

@section('about')
    <div id="about">
        <h2 class="text-center" style="font-weight: 1000; font-size: 30px">TENTANG <span style="color:#7D7B72;">KAMI<span></h2>
        <center><div class="garis text-center mb-2"></div>
        <img class="img-fluid text-center mt-4" src="{{ asset('images/School-Logo.png') }}" alt="" style="height: 80px;"></center>
    </div>
@endsection

@section('pinned')
    <section class="section" id="contact-us" style="background-image: linear-gradient(rgba(0, 0, 0, 0.7),rgba(0, 0, 0, 0.7)),url({{ asset('images/school-field.jpg') }})">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div id="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6860.311194226015!2d112.3642059113739!3d-8.14574148444637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7896596cf250e3%3A0x7c7f87186e592687!2sSMA%20Negeri%201%20Kesamben!5e1!3m2!1sid!2sid!4v1635253283906!5m2!1sid!2sid" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="contact-form">
                        <form id="contact" action="" method="post">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <input name="name" type="text" id="name" placeholder="Your Name*" required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email*" required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="subject" type="text" id="subject" placeholder="Subject">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" rows="6" id="message" placeholder="Message" required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="main-button" style="background-color: #7D7B72;">Send Message</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
