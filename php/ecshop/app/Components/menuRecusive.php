<?php

namespace App\Components;

use App\Menu;

class menuRecusive {
    private $html;
    public function __construct() {
        $this->html = '';
    }
    
    public function menuRecusiveAdd($parentID = 0, $subMark = '') {
        $data = Menu::where('parent_id',$parentID)->get();

        foreach ($data as $dataItem) {
            $this->html .= '<option value="'.$dataItem->id. '">' .$subMark .$dataItem->name. '</option>';
            $this->menuRecusiveAdd($dataItem->id,$subMark . '--');
        }
        return $this->html;
    }

    public function menuRecusiveEdit($parentEdit,$parentID = 0, $subMark = '') {
        $data = Menu::where('parent_id',$parentID)->get();
        foreach ($data as $dataItem) {
            if($parentEdit == $dataItem->id) {
                $this->html .= '<option selected value="'.$dataItem->id. '">' .$subMark .$dataItem->name. '</option>';
            } else {
                $this->html .= '<option value="'.$dataItem->id. '">' .$subMark .$dataItem->name. '</option>';
            }
            
            $this->menuRecusiveEdit($parentEdit,$dataItem->id,$subMark . '--');
        }
        return $this->html;
    }
}