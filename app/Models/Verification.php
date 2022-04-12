<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Verification extends Model
{
    use HasFactory;

    public function menus(): array
    {
        //slug, name report_type, fee, discount, type
        return [
            [
                'slug' => 'NIP',
                'name' => 'Nigeria International Passport',
                'report_type' => 'passport',
                'fee'=>1000,
                'discount'=>NULL,
                'type'=>NULL
             ]
        ];
    }

    /**
     * This is used to populate Ghana Banks to banks database
     */
    public function Verification(){
        $Menus = $this->menus();

        foreach ($Menus as $menu){
            $Rec = new self();
            $Rec->slug = $menu['slug'];
            $Rec->name = $menu['name'];
            $Rec->report_type = $menu['report_type'];
            $Rec->fee = $menu['fee'];
            $Rec->discount = $menu['discount'];
            $Rec->type = $menu['type'];
            $Rec->save();
        }
    }
}
