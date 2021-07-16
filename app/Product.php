<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = array('name', 'description', 'id_category', 'price', 'show');

    public function categoryName(){
        $name = "none";
        $number = $this->id_category;

        if($number != null ){

            switch ($number) {
                case 1:
                    $name = "Entradas";
                    break;
                case 2:
                    $name = "Ensaladas";
                    break;
                case 3:
                    $name = "Platos Principales";
                    break;
                case 4:
                    $name = "Picadas de Mariscos";
                    break;
                case 5:
                    $name = "Pescados";
                    break;
                case 6:
                    $name = "Pollos/Lomos";
                    break;
                case 7:
                    $name = "Tortillas";
                    break;
                case 8:
                    $name = "Postres";
                    break;
                case 9:
                    $name = "Vinos Tintos";
                    break;
                case 10:
                    $name = "Vinos Blancos";
                    break;
                case 10:
                    $name = "Cervezas";
                    break;
                case 10:
                    $name = "Agua / Gaseosa";
                    break;
            }
        }
        return $name;
    }
}
