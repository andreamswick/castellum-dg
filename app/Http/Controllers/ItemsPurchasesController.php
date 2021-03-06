<?php

namespace App\Http\Controllers;

use App\Item;
use App\Purchase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ItemsPurchasesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Item $item
     * @return \Illuminate\Http\Response
     */
    public function create(Item $item)
    {
        return view('purchases.create', compact('item'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Item $item
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Item $item)
    {
        $this->validate($request, [
            'quantity' => 'required',
        ]);

        $purchase = Purchase::where('user_id', Auth::user()->id)->where('item_id', $item->id)->first();

        if (is_null($purchase)) {
            $purchase = new Purchase([
                'quantity' => $request->quantity,
                'notes'    => $request->notes,
                'user_id'  => Auth::user()->id,
            ]);

            $item->purchases()->save($purchase);
        } else {
            $purchase->quantity = $purchase->quantity + $request->quantity;
            $purchase->notes .= $request->notes;
            $purchase->save();
        }

        flash('You purchased ' . $purchase->quantity . ' ' . $item->title, 'success');

        return redirect('/items');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Purchase $purchase
     * @return \Illuminate\Http\Response
     */
    public function edit(Purchase $purchase)
    {
        return view('purchases.edit', [
            'purchase' => $purchase,
            'item' => $purchase->item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param $purchase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Purchase $purchase)
    {
        $this->validate($request, [
            'quantity' => 'required',
        ]);

        $purchase->quantity = $request->quantity;
        $purchase->notes .= $request->notes;
        $purchase->save();

        flash('You purchased ' . $purchase->quantity . ' ' . $purchase->item->title, 'success');

        return redirect('/items');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Purchase $purchase
     * @return \Illuminate\Http\Response
     */
    public function destroy(Purchase $purchase)
    {
        $purchase->delete();

        flash('You deleted your purchase for ' . $purchase->item->title, 'success');

        return redirect('/items');
    }
}
