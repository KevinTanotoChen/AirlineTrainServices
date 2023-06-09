<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lang = session('lang', 'en');
        App::setlocale(session('lang'));
        return view('/promo/index', [
            "title" => "Events",
            "promotions" => Promotion::all()
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
        $promo = Promotion::where('code', $request->promo_code)->first();
        // dd($promo);

        if (!$promo) {
            return redirect()->route('transaction-details-redirect')->with('error_code', 'invalid code');
            // return redirect()->route('transaction-details-redirect')->withErrors(['msg' => 'invalid code']);
        }

        session()->put('promo', [
            'code' => $promo->code,
            'discount' => $promo->discount_price,
            'promo_id' => $promo->id
        ]);

        return redirect()->route('transaction-details-redirect')->with('success_message', 'Promo is applied');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Promotion  $promotion
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $promotion = Promotion::findOrFail($id);

        return view('promo/promo', [
            "title" => "Promo",
            "promo" => $promotion
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Promotion  $promotion
     * @return \Illuminate\Http\Response
     */
    public function edit(Promotion $promotion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Promotion  $promotion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Promotion $promotion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Promotion  $promotion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Promotion $promotion)
    {
        session()->forget('promo');
        return redirect()->route('transaction-details-redirect')->with('success_message', 'Promo is removed');
    }
}
