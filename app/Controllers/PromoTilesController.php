<?php

namespace App\Controllers;
use App\Models\PromoTile;

class PromoTilesController extends BaseController
{

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
        $validationRules = $this->validatePromoTilesFields();

        if (!$this->validate($validationRules)) 
            return redirect()->back()->withInput()->with('error', $this->validator->getErrors());
        
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
        if ($promoTile) 
            return view('promo_tiles/edit', ['promoTile' => $promoTile]);
        else
            return redirect()->to('/promo_tiles')->with('error', 'The promo tile  with id: "'. $id . '" does not exist.');
    }

    public function update($id)
    {
        $promoTileModel = new PromoTile();
        $promoTile = $promoTileModel->find($id);

        if ($promoTile) {
            $validationRules = $this->validatePromoTilesFields();

            if (!$this->validate($validationRules)) 
                return redirect()->to('/promo_tiles/edit/'.$id)->withInput()->with('error', $this->validator->getErrors());
            
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

    public function delete($id)
    {
        $promoTileModel = new PromoTile();
        $promoTile = $promoTileModel->find($id);
        if ($promoTile) 
            $promoTileModel->delete($id);
        else 
            return redirect('/promo_tiles')->with('error', 'The promo tile  with id: "'. $id . '" does not exist.');

        return redirect()->to('/promo_tiles')->with('success', 'The promo tile has been successfully deleted.');
    }

    private function validatePromoTilesFields() {
        $validationRules = [
            'title' => 'required|max_length[100]',
            'description' => 'required|min_length[10]|max_length[255]',
            'image_url' => 'required|max_length[255]|valid_url',
        ];
        return $validationRules;
    }

}
