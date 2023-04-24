<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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

        Session::put('train_id', $train_id);
        Session::put('departure_time', $departure_time);
        Session::put('arrival_time', $arrival_time);
        Session::put('total_seat', $total_seat);
        Session::put('price', $price);
        Session::put('seat_order', $seat_order);
        Session::put('date', $date);

        return view('/transaction/index',[
            "title" => "Transaction",
            "train_id" => $train_id,
            "departure_time" => $departure_time,
            "arrival_time" => $arrival_time,
            "total_seat" => $total_seat,
            "price" => $price,
            "seat_order" => $seat_order,
            "date" => $date,
            "discount" => $discount
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
            "discount" => $discount
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
        //
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
