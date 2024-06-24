<?php

namespace App\Controllers;
use App\Models\PromoTile;

class PromoTilesController extends BaseController
{
        
    public function __construct()
    {   

    }
    
    public function index(): string
    {   
        $promoTileModel = new PromoTile();
        $promoTiles = $promoTileModel->findAll();
        
        return view('promo_tiles/index', ['promoTiles' => $promoTiles]);
    }

    public function create(): string
    {   
        return view('promo_tiles/create');
    }

    public function store()
    {
        //TODO: validate data
        $promoTileModel = new PromoTile();
        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'image_url' => $this->request->getPost('image_url'),
            'created_at' => date('Y-m-d H:i:s'), 
            'updated_at' => date('Y-m-d H:i:s'), 
        ];

        $promoTileModel->insert($data);

        return redirect()->to('/promo_tiles')->with('success', 'Promo Tile created successfully.');
    }

    public function edit($id)
    {
        $promoTileModel = new PromoTile();
        $promoTile = $promoTileModel->find($id);
        //TODO: validate data
        
        return view('promo_tiles/edit', ['promoTile' => $promoTile]);
    }

    public function update($id)
    {
        $validationRules = [
            'title' => 'required',
            'description' => 'required',
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
        
        $promoTileModel = new PromoTile();
        $promoTile = $promoTileModel->find($id);
        if ($promoTile) {
            $data = [
                'title' => $this->request->getPost('title'),
                'description' => $this->request->getPost('description'),
                'image_url' => $this->request->getPost('image_url'),
                'updated_at' => date('Y-m-d H:i:s'), 
            ];
            $promoTileModel->update($id, $data);
        }
        else 
            return redirect('/promo_tiles')->with('error', 'The promo tile  with id: "'. $id . '" does not exist.');

        return redirect()->to('/promo_tiles')->with('success', 'The promo tile has been successfully updated.');
    }

}
