<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;

class PromotionDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $promotions = Promotion::paginate(6, ['*'], 'page', $request->query('page', 1));
        return view('dashboard.promotion', ['promotions' => $promotions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.promotionCreate');
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
            'title' => 'required',
            'code' => 'required',
            'content' => 'required',
            'discount_price' => ['required', 'numeric', 'regex:/^\d+(\.\d{1,2})?$/'],
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $promotion = new Promotion();
        $promotion->title = $validatedData['title'];
        $promotion->code = $validatedData['code'];
        $promotion->content = $validatedData['content'];
        $promotion->discount_price = $validatedData['discount_price'];
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/promotion-images'), $imageName);
            $promotion->image = '/promotion-images/' . $imageName;
        }
        $promotion->save();

        return redirect('/dashboard/promotion')->with('Success', 'Successfully updated!');
        dd();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Promotion  $promotion
     * @return \Illuminate\Http\Response
     */
    public function show(Promotion $promotion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Promotion  $promotion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $promotion = Promotion::find($id);
        return view('dashboard.promotionUpdate', ['promotion' => $promotion]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Promotion  $promotion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'code' => 'required',
            'content' => 'required',
            'discount_price' => ['required', 'numeric', 'regex:/^\d+(\.\d{1,2})?$/'],
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $promotion = Promotion::find($id);
        $promotion->title = $validatedData['title'];
        $promotion->code = $validatedData['code'];
        $promotion->content = $validatedData['content'];
        $promotion->discount_price = $validatedData['discount_price'];
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/promotion-images'), $imageName);
            $promotion->image = '/promotion-images/' . $imageName;
        }
        $promotion->save();

        return redirect('/dashboard/promotion')->with('Success', 'Successfully updated!');
        dd();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Promotion  $promotion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $promotion = Promotion::find($id);
        $promotion->delete();

        return redirect('/dashboard/promotion')->with('Success', 'Successfully deleted!');
    }
}
