<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Components\menuRecusive;
use App\Menu;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;


class MenuController extends Controller
{
    private  $menuRecusive;
    private  $menu;
    public function __construct(menuRecusive $menuRecusive,Menu $menu)
    {
        $this->menuRecusive = $menuRecusive;
        $this->menu = $menu;
    }
    
    public function index(){
        $menus = $this->menu->paginate(7);
        return view('admin.menus.index',compact('menus'));
    }

    public function create(){
        $optionSelect =$this->menuRecusive->menuRecusiveAdd();
        return view('admin.menus.add',compact('optionSelect'));
    }

    public function store(Request $request)
    {
        $this->menu->create([
            'name' => $request->name,
            'parent_id' => $request->parent_id,
            'slug' => Str::slug($request->name,'-')
        ]);

        return Redirect()->route('menus.index');
    }

    public function edit($id,Request $request)
    {
        $menuEdit = $this->menu->find($id);
        $optionSelect =$this->menuRecusive->menuRecusiveEdit($menuEdit->parent_id);

        return view('admin.menus.edit',compact('optionSelect','menuEdit'));
    }

    public function update($id,Request $request)
    {
        $this->menu->find($id)->update([
            'name' => $request->name,
            'parent_id' => $request->parent_id,
            'slug' =>Str::slug($request->name,'-')
        ]);
        return Redirect()->route('menus.index');
    }

    public function destroy($id)
    {
        $this->menu->find($id)->delete();
        return Redirect()->route('menus.index');
    }
}
