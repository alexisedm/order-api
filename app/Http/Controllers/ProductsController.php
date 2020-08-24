<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       
    }

    //crud functions
    public function index() {
        return ['platano', 'fresa', 'piña'];
    }

    public function show($id) {
        $result =  ['platano', 'fresa', 'piña'];
        return $result[$id];
    }

    public function store(Request $request) {
    
        return response($request->all(), 201);
    }
    
    public function update($id, Request $request) {
       
        return response(null, 204);
    }

    public function destroy($id) {
       
        return response("null", 204);
    }
    
}
