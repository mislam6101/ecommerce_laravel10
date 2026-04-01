<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Coupon::all();
        return view('backend.coupon.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.coupon.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|unique:coupons,code',
            'type' => 'required|in:flat,percent',
            'value' => 'required|numeric',
            'max_discount' => 'nullable|numeric',
            'expiry_date' => 'nullable|date'
        ]);

        Coupon::create([
            'code' => $request->code,
            'type' => $request->type,
            'value' => $request->value,
            'max_discount' => $request->type == 'percent' ? $request->max_discount : null,
            'expiry_date' => $request->expiry_date
        ]);

        return back()->with('success', 'Coupon Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
