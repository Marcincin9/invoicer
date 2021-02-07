@extends('layouts.app')
@section('content')
         <!-- Contact Section-->
        <section class="masthead page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Edit Invoice {{ $invoice->id }}</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
                        <form action="{{ route('invoices.update', ['id' => $invoice->id]) }}" method="POST" id="contactForm" name="sentMessage" novalidate="novalidate">

                        {{ csrf_field() }} <!-- bezpieczenstwo -->
                        
                                
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Invoice No</label>
                                    <input value="{{$invoice->number}}" class="form-control" id="number" name="number" type="text" placeholder="Invoice No" required="required" data-validation-required-message="Please enter Invoice number." />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Date</label>
                                    <input value="{{$invoice->date}}" class="form-control" id="date" name="date" type="text" placeholder="Date" required="required" data-validation-required-message="Please enter Invoice date." />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Amount</label>
                                    <input value="{{$invoice->total}}" class="form-control" id="total" name="total" type="text" placeholder="Amount" required="required" data-validation-required-message="Please enter Invoice amount." />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <br />
                            <div id="success"></div>
                            <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit">Save Invoice</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
@endsection