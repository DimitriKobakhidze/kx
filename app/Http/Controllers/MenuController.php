<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function homePage(){
        $data=Menu::orderBy('groupId','asc')->get()->groupBy('group')->map(function($item){
            return $item->take(3);
        });

        return view('menu.home',['data'=>$data]);
    }
    public function groupPage($group){
        $data = Menu::orderBy('groupId','asc')->get()->where('group','=',$group);

        return view('menu.group',['data'=>$data]);
    }
    public function adminPage(){
        $data = Menu::orderBy('groupId','asc')->get()->groupBy('group');

        return view('menu.admin',['data'=>$data]);
    }
    public function editOrCreate(Menu $item,Request $request){
        if($request->input('name')){
            //tu icvleba misi groupId
            $idItem = Menu::get()->where('id','=',$request->input('groupId'))->first();
            $idItem->update(['groupId' => $item->id]);

            $item->fill($request->all())->save();
            return redirect()->route('admin');
        }

        return view('menu.edit',['item'=>$item]);
    }
    public function deleteItem(Menu $item){
        $item->delete();
        return redirect()->route('admin');
    }
    public function test(Menu $item){
        // $second = Menu 2;
        return redirect()->route('admin');
    }
}
