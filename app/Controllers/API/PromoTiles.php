<?php namespace App\Controllers\API;

use App\Models\PromoTile;
use CodeIgniter\RESTful\ResourceController;

class PromoTiles extends ResourceController {


    public function __construct()
    {
        $this->model = $this->setModel(new PromoTile());
    }

    public function index() 
    {
        $promo_tiles = $this->model->findAll();
        return $this->respond($promo_tiles);
    }

}