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

}