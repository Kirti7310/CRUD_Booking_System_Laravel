<?php


namespace App\Http\Controllers;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $bookings = Booking::all();
        return view('bookings.index',compact('bookings'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bookings.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'customer_name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'booking_date'=>'required|date',
            'notes'=>'required'
        ]);


        Booking::create($request->all());
        return redirect()->route('bookings.index')->with('success','Bookings Registered!');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('bookings.show',comapct('bookings'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
            return view('bookings.edit', compact('booking'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'customer_name'=>'required',
            'email'=>'required|unique',
            'phone'=>'required',
            'booking_date'=>'required|date',
            'notes'=>'required'
        ]);

        Booking::update($request->all());
        return redirect()->route('bookings.index')->with('success','Bookings Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Bookings::delete();
        return redirect()->route('bookings.index')->with('success','Bookings Deleted Successfully!');
    }
}
