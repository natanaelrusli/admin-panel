<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use DB;

class productsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = DB::table('products')->get();
        return view('displayProducts', ['title' => 'Products'], ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addProduct', ['title' => 'Add Products']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
		// 	'product_name' => 'required',
        //     'product_logo' => 'required',
        //     'product_image' => 'required',
        //     'description' => 'required',
		// ]);
        $logo = $request->file('product_logo');
        $image = $request->file('product_image');

        try {

            $tujuan_upload = 'data_file';
            $logo->move($tujuan_upload,$logo->getClientOriginalName());
            $image->move($tujuan_upload,$image->getClientOriginalName());

            Product::create([
                'product_name' => $request->input('product_name'),
                'product_logo' => '/' . $tujuan_upload . '/' . ($request->file('product_logo')->getClientOriginalName()),
                'product_image' => '/' . $tujuan_upload . '/' . ($request->file('product_image')->getClientOriginalName()),
                'description' => $request->input('description'),
                'product_status' => $request->input('product_status'),
            ]);
    
            return redirect('/products');
        } catch (\Throwable $e) {
            
            echo($e);
        }
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
        $products = DB::table('products')->where('id',$id)->get();

        return view('editProduct', ['title' => 'Edit'], ['products' => $products]);
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
        $logo = $request->file('product_logo');
        $image = $request->file('product_image');
        $tujuan_upload = 'data_file';

        try {
            
            if ($request -> file('product_logo') !== null) {
                $logo->move($tujuan_upload, $logo->getClientOriginalName());
                DB::table('products')->where('id',$request->id)->update([
                    'product_logo' => '/' . $tujuan_upload . '/' . ($request->file('product_logo')->getClientOriginalName()),
                    ]);
                }
                
            if ($request -> file('product_image') !== null) {
                $image->move($tujuan_upload, $image->getClientOriginalName());
                DB::table('products')->where('id',$request->id)->update([
                    'product_logo' => '/' . $tujuan_upload . '/' . ($request->file('product_image')->getClientOriginalName()),
                ]);
            }
            
            DB::table('products')->where('id',$request->id)->update([
                'product_name' => $request->input('product_name'),
                'description' => $request->input('description'),
                'product_status' => $request->input('product_status')
            ]);

            return redirect('/products');
        } catch (\Throwable $e) {
            echo($e);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('products')->where('id',$id)->delete();
		
        // alihkan halaman ke halaman pegawai
        return redirect('/products');
    }
}
