<?php

namespace App\Models;
use CodeIgniter\Model;

class PromoTile extends Model 
{
    protected $table = 'promo_tiles';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'description', 'image_url', 'created_at', 'updated_at'];

    /**
     * Called during initialization. Appends
     * our custom field to the module's model.
     */
    protected function initialize()
    {
        $this->allowedFields[] = 'middlename';
    }

    
    public function __construct() {
        parent::__construct();
    }

    //TODO: remove methods, unnecesary
    public function getAllPromoTiles() {
        $promo_tiles = $this->db->query('SELECT * FROM promo_tiles'); 
        return $promo_tiles->getResult(); 
    }

    public function getPromoTileById($id) {
        $promo_tile = $this->db->query('SELECT * FROM promo_tiles WHERE id = ?', [$id]);
        return $promo_tile->getRow(); 
    }

    public function createTile($data) {
        return $this->db->insert('promo_tiles', $data);
    }

    public function delete_tile($id) {
        return $this->db->delete('promo_tiles', array('id' => $id));
    }

}