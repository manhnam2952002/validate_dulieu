<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.products.index', ['list'=> Product::paginate(6)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request){
        $request->validate(
            [
                'eventName' => 'required|min:20',
                'bandNames' => 'required',
                'startDate' => 'required',
                'endDate' => 'required',
                'ticketPrice' => 'required',
                'status' => 'required'
            ],
            [
                'eventName.required' => 'Vui lòng nhập tên.',
                'eventName.min' => 'Tên phải 20 ký tự trở lên.',
                'bandNames.required' => 'Vui lòng nhập tên ban nhạc.',
                'startDate.required' => 'Vui lòng nhập ngày bắt đầu.',
                'endDate.required' => 'Vui lòng nhập ngày kết thúc.',
                'ticketPrice.required' => 'nhập giá vé phải lớn hơn 0.',
                'status.required' => 'vui lòng nhập có giá trị là 0, 1, 2, 3'
            ]
        );
        $request->validate();
        return 'Hii';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
