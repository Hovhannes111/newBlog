@extends('layouts.app')
@section('content')
<main>
    <section class="contact-section fix">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <form action="{{ url('/registration') }}" class="row" method="post">
                        @csrf
                        <div class="input-group-icon mt-10 col-lg-6">
                            <div class="icon"><i class="fa fa-user" aria-hidden="true"></i></div>
                            <input type="text" name="first_name" placeholder="Contact First Name"
                                   onfocus="this.placeholder = ''" onblur="this.placeholder = 'Contact First Name'"
                                   required
                                   class="single-input">
                        </div>
                        <div class="mt-10 col-lg-6">
                            <input type="text" name="last_name" placeholder="Contact Last Name"
                                   onfocus="this.placeholder = ''" onblur="this.placeholder = 'Contact Last Name'"
                                   required
                                   class="single-input">
                        </div>
                        <div class="mt-10 col-lg-6">
                            <input type="text" name="contact_title" placeholder="Contact Title"
                                   onfocus="this.placeholder = ''" onblur="this.placeholder = 'Contact Title'" required
                                   class="single-input">
                        </div>
                        <div class="mt-10 col-lg-6">
                            <input type="text" name="contact_mobile" placeholder="Contact Mobile"
                                   onfocus="this.placeholder = ''" onblur="this.placeholder = 'Contact Mobile'" required
                                   class="single-input">
                        </div>

                        <div class="mt-10 col-lg-6">
                            <input type="email" name="EMAIL" placeholder="Contact eMail"
                                   onfocus="this.placeholder = ''" onblur="this.placeholder = 'Contact eMail'" required
                                   class="single-input">
                        </div>
                        <div class="mt-10 col-lg-6">
                            <input type="text" name="company_name" placeholder="Company Name"
                                   onfocus="this.placeholder = ''" onblur="this.placeholder = 'Contact Mobile'" required
                                   class="single-input">
                        </div>
                        <div class="mt-10 col-lg-6">
                            <input type="text" name="department" placeholder="Department"
                                   onfocus="this.placeholder = ''" onblur="this.placeholder = 'Department'" required
                                   class="single-input">
                        </div>
                        <div class="input-group-icon mt-10 col-lg-6">
                            <div class="icon"><i class="fa fa-home" aria-hidden="true"></i></div>
                            <div class="form-select" id="">
                                <select>
                                    <option value=" 1">Academics</option>
                                    <option value="1">Automotive</option>
                                    <option value="1">Government</option>
                                    <option value="1">Electronics</option>
                                    <option value="1">Industrial IOT</option>
                                    <option value=" 1">Manufacturing</option>
                                    <option value="1">Semiconductor</option>
                                    <option value="1">Wireless communication</option>
                                    <option value="1">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="mt-10 col-lg-6">
                            <input type="text" name="country" placeholder="Country"
                                   onfocus="this.placeholder = ''" onblur="this.placeholder = 'Country'" required
                                   class="single-input">
                        </div>
                        <div class=" mt-10 col-lg-6">

                        </div>
                        <div class="mt-10 col-lg-6">
                            <p class="pera-dtails">Will Participate in:</p>
                            <div class="switch-wrap d-flex justify-content-between">
                                <label>Industrial IOT Sessions</label>
                                <div class="confirm-checkbox">
                                    <input type="checkbox" id="industry">
                                    <label for="industry"></label>
                                </div>

                            </div>
                            <div class="switch-wrap d-flex justify-content-between">
                                <label>Keynotes and Industry Panel</label>
                                <div class="confirm-checkbox">
                                    <input type="checkbox" id="automotive_sessions">
                                    <label for="automotive_sessions"></label>
                                </div>

                            </div>
                            <div class="switch-wrap d-flex justify-content-between">
                                <label>Automotive Sessions</label>
                                <div class="confirm-checkbox">
                                    <input type="checkbox" id="semiconductor_sessions">
                                    <label for="semiconductor_sessions"></label>
                                </div>

                            </div>
                            <div class="switch-wrap d-flex justify-content-between">
                                <label>Semiconductor Sessions</label>
                                <div class="confirm-checkbox">
                                    <input type="checkbox" id="wireless">
                                    <label for="wireless"></label>
                                </div>

                            </div>
                            <div class="switch-wrap d-flex justify-content-between">
                                <label>Wireless Communication & RF Systems Sessions</label>
                                <div class="confirm-checkbox">
                                    <input type="checkbox" id="iot">
                                    <label for="iot"></label>
                                </div>
                            </div>
                        </div>
                        <div class="mt-10 col-lg-6">
                            <p class="pera-dtails">Transportation to Vanadzor </p>
                            <div class="switch-wrap d-flex justify-content-between">
                                <label>From Yerevan to Vanadzor</label>
                                <div class="confirm-checkbox">
                                    <input type="checkbox" id="y-t">
                                    <label for="industry"></label>
                                </div>

                            </div>
                            <div class="switch-wrap d-flex justify-content-between">
                                <label>From Vanadzor to Yerevan</label>
                                <div class="confirm-checkbox">
                                    <input type="checkbox" id="v-e">
                                    <label for="industry"></label>
                                </div>

                            </div>
                            <div class="switch-wrap d-flex justify-content-between">
                                <label>From Gyumri to Vanadzor</label>
                                <div class="confirm-checkbox">
                                    <input type="checkbox" id="g-v">
                                    <label for="industry"></label>
                                </div>

                            </div>
                            <div class="switch-wrap d-flex justify-content-between">
                                <label>From Vanadzor to Gyumri</label>
                                <div class="confirm-checkbox">
                                    <input type="checkbox" id="v-g">
                                    <label for="industry"></label>
                                </div>

                            </div>
                            <div class="switch-wrap d-flex justify-content-between">
                                <label>None</label>
                                <div class="confirm-checkbox">
                                    <input type="checkbox" id="none">
                                    <label for="industry"></label>
                                </div>

                            </div>

                        </div>
                        <div class="switch-wrap mt-3 justify-content-between">
                            <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <div class="partners-area fix">

        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-md-12">
                    <div class="partners-active owl-carousel">
                        <div class="partners-img">
                            <a href="#"><img src="{{ asset('/img/our_blog/pmi.png') }}" alt=""></a>
                        </div>
                        <div class="partners-img">
                            <a href="#"><img src="{{ asset('/img/our_blog/GTC.png') }}" alt=""></a>
                        </div>
                        <div class="partners-img">
                            <a href="#"><img src="{{ asset('/img/our_blog/unnamed.png') }}" alt=""></a>
                        </div>
                        <div class="partners-img">
                            <a href="#"><img src="{{ asset('/img/our_blog/unnamed.png') }}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>
@endsection
