<?php

namespace App\Http\Controllers;

use App\Models\IncomingProduct;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ShopController extends Controller
{

    public function index()
    {
        $shops=Shop::paginate(30);
        return view('admin.shop.index',['shops'=>$shops]);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        if ($request->img) {
            $uuid = Str::uuid()->toString();
            $fileName = $uuid . '-' . time() . '.' . $request->img->getExtension();
            $request->img->move(public_path('../public/storage/galereya/'), $fileName);
//            'name','phone','address_name','inn','lat','lang','open_time','close_time','img','info','balans'
            Shop::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'img' => $fileName,
                'address_name' => $request->address_name,
                'inn' => $request->inn,
                'lat' => $request->lat,
                'lang' => $request->lang,
                'open_time' => $request->open_time,
                'close_time' => $request->close_time,
                'info' => $request->info,
                'balans' => $request->balans
            ]);
        }else{

        Shop::create($request->all());}
        return redirect()->back();
    }


    public function show(Shop $shop)
    {
$users=User::where('shop_id',$shop->id)->get();
return view('admin.shop.view',['users'=>$users,'shop'=>$shop]);
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy(Shop $shop)
    {
        $shop->delete();
        return redirect()->back();
    }
}
