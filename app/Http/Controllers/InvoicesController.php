<?php

namespace App\Http\Controllers;
use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoicesController extends Controller
{
   public function index()
   {
     $invoices = Invoice::all();
     return view('invoices.index', ['invoices' => $invoices]);
   }

   public function create()
   {
     return view('invoices.create');
   }

   public function edit($id)
   {

    $invoice = Invoice::find($id); //wyszukiwanie faktury w bazie
    return view('invoices.edit', ['invoice' => $invoice]);  //pobiera fakture z bazy
   }

   public function store(Request $request)
   {
     //dd($request);
     $invoice = new Invoice();

     $invoice->number = $request->number;
     $invoice->date = $request->date;
     $invoice->total = $request->total;

     $invoice->save();

     return redirect()->route('invoices.index')-> with('message', 'Invoice Added Successfully');
     
   }

   public function update($id, Request $request)
   {
     //dd($request);
     $invoice = Invoice::find($id);

     $invoice->number = $request->number;
     $invoice->date = $request->date;
     $invoice->total = $request->total;

     $invoice->save();

     return redirect()->route('invoices.index')-> with('message', 'Invoice updated Successfully');
     
   }

   public function delete($id)
   {

      Invoice::destroy($id);

      return redirect()->route('invoices.index')-> with('message', 'Invoice delated Successfully');


}

}
