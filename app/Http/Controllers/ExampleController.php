<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\IExampleRepository;



class ExampleController extends Controller
{

    //private IExampleRepository = $exampleRepository;

    public function __construct(IExampleRepository $exampleRepository)
    {
        $this->exampleRepository = $exampleRepository;
       
    }

    //crud functions
    public function index() {

        return $this->exampleRepository->getAll();
        // return ['platano', 'fresa', 'piña'];
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
