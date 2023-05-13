<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\StoreTransactionRequest;
use App\Models\Ticket;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('/transaction/index',[
            "title" => "Transaction",
            
            // "transactions" =>Transaction::all()
        ]);
    }

    public function details(Request $request)
    {

        $discount = session()->get('promo')['discount'] ?? 0;

        $train_id = $request->train_id;
        $departure_time = $request->departure_time;
        $arrival_time = $request->arrival_time;
        $total_seat = $request->total_seat;
        $price = $request->price;
        $seat_order = $request->seat_order;
        $date = $request->date;
        $origin_station = $request->origin_station;
        $destination_station = $request->destination_station;

        Session::put('train_id', $train_id);
        Session::put('departure_time', $departure_time);
        Session::put('arrival_time', $arrival_time);
        Session::put('total_seat', $total_seat);
        Session::put('price', $price);
        Session::put('seat_order', $seat_order);
        Session::put('date', $date);
        Session::put('origin_station', $origin_station);
        Session::put('destination_station', $destination_station);

        return view('/transaction/index',[
            "title" => "Transaction",
            "train_id" => $train_id,
            "departure_time" => $departure_time,
            "arrival_time" => $arrival_time,
            "total_seat" => $total_seat,
            "price" => $price,
            "seat_order" => $seat_order,
            "date" => $date,
            "discount" => $discount,
            "origin_station" => $origin_station,
            "destination_station" => $destination_station,

        ]);
    }

    public function details_redirect(Request $request)
    {

        $train_id = Session::get('train_id');
        $departure_time = Session::get('departure_time');
        $arrival_time = Session::get('arrival_time');
        $total_seat = Session::get('total_seat');
        $price = Session::get('price');
        $seat_order = Session::get('seat_order');
        $date = Session::get('date');
        $origin_station = Session::get('origin_station');
        $destination_station = Session::get('destination_station');

        $discount = session()->get('promo')['discount'] ?? 0;


        return view('/transaction/index',[
            "title" => "Transaction",
            "train_id" => $train_id,
            "departure_time" => $departure_time,
            "arrival_time" => $arrival_time,
            "total_seat" => $total_seat,
            "price" => $price,
            "seat_order" => $seat_order,
            "date" => $date,
            "discount" => $discount,
            "origin_station" => $origin_station,
            "destination_station" => $destination_station,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'payment_type' => 'required',
        ]);

        // Create Ticket entry
        $ticket = new Ticket();
        $ticket->origin_station_id = $request->origin_station;
        $ticket->destination_station_id = $request->destination_station;
        $ticket->save();

        $transaction = new Transaction();
        $transaction->price = $request->price;
        $transaction->user_id = $request->user_id;

        if($request->has('promotion_id')){
            $transaction->promotion_id = $request->promotion_id;
        }

        $transaction->payment_type = $validatedData['payment_type'];
        $transaction->ticket_id = $ticket->id;
        
        $transaction->save();

        
        return redirect('/')->with('success', 'Transaction Successful!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
