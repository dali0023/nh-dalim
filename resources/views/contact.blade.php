@extends('Layouts.master')
@section('content')
    <section class="contact">
        <h2>
            Contact
        </h2>
        @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif
        <div>
            <div class="row contact-info-wrapper">
                <div class="col-12">
                    <div class="contact-info">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="item mobile">
                                    <i class="icon fa fa-mobile"></i>
                                    <span class="info">
                                        <strong>Mobile:<br></strong>
                                        236-808-1662
                                    </span>
                                </div>
                                <div class="item email">
                                    <i class="icon fa fa-envelope-o"></i>
                                    <span class="info">
                                        <strong>E-mail:<br></strong>
                                        <a href="#" data-name="dali0023" data-domain="algonquinlive.com"
                                            class="mail-hash"></a>
                                    </span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="item address">
                                    <i class="icon fa fa-map-marker"></i>
                                    <span class="info">
                                        <strong>Address:<br></strong>
                                        Toronto, Canada
                                    </span>
                                </div>
                                <div class="item website">
                                    <i class="icon fa fa-globe"></i>
                                    <span class="info">
                                        <strong>Website:<br></strong>
                                        <a href="https://nh-dalim.com/" target="_blank">www.nh-dalim.com</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">                    
                    <form action="{{ route('contact.store') }}" id="contact-form" class="contact-form" method="post">
                        @csrf
                        <div class="row">
                            <div class="column col-md-6">
                                <!-- Name input -->
                                <div class="form-group">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" placeholder="Your name" required value="{{ old('name') }}">
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>
                            <div class="column col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" placeholder="Your email" required value="{{ old('email') }}">
                                    @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>


                            <div class="column col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control @error('subject') is-invalid @enderror"
                                        name="subject" placeholder="Your subject" required value="{{ old('subject') }}">
                                    @error('subject')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="column col-md-12">
                                <div class="form-group">
                                    <textarea name="content" id="InputMessage" class="form-control @error('content') is-invalid @enderror" rows="4"
                                        placeholder="Your message here..." required="required" data-error="Message is required.">{{ old('content') }}</textarea>
                                    @error('content')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <button type="submit" id="submit" class="btn btn-default">Send
                            Message</button>

                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
