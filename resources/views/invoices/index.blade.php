@extends('layouts.app')
@section('content')
        <!-- Portfolio Section-->
        <section class="masthead page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Invoices</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>

                 <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Invoice No</th>
      <th scope="col">Date</th>
      <th scope="col">Amount</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($invoices as $invoice)
          <tr>
            <th scope="row">{{ $invoice->id }}</th>
            <td>{{ $invoice->number }}</td>
            <td>{{ $invoice->date }}</td>
            <td>{{ $invoice->total }}</td>
          </tr>  
      @endforeach
       
  </tbody>
</table> 

            </div>
        </section>
@endsection      
    