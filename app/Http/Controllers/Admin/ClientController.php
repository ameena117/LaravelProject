<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function index()
    {
    $clients=Client::orderBy('id','asc')->get();
    return view('admin.clients',compact('clients'));
    }

    /*public function edit($id){
        $client=Client::where('id',$id)->first();
            if($client == null){
                abort(404);
            }
        return view('admin.client_edit',compact('client'));
    }*/

    public function delete($id){
        try {
            
            Client::where('id',$id)->delete();
            return back()->with(['message_success'=> 'client deleted successfully!']);
        } catch (\Throwable $th) {
            //throw $th;
            return back()->with(['message_error'=> 'somthing wrong !']);

        }
    }
}