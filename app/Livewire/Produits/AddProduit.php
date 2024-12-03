<?php

namespace App\Livewire\Produits;

use App\Models\{produits, Category, Marque, Sous_category};
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Http\Request;

class AddProduit extends Component
{
    use WithFileUploads;

    public $nom,$tags, $prix, $category_id,$sous_category_id,$photo, $photos, $prix_achat, $photo2, $photos2, $produit, $reference, $description,$marque_id ,
    $taille,$valable1,  $cmd,  $vo1,  $livrable1, $bonne_affaire, $tailles, $cmd01, $vble; 

//public $free_shipping;
public $bonne_affaires; 


public $free_shipping ;
public $valable = true ;
public $livrable;
public $cmd0 ;
public $vo;



public $type_taille;
public $type_poids;
public $type_piece;


public $poids;
public $piece;



public $sous_categories = array();
    public function mount($produit = null)
    {
        if ($produit) {
          $this->produit = produits::find($produit);
            $this->produit = $produit;
            $this->nom = $produit->nom;
            $this->tags = $produit->tags;
            $this->category_id = $produit->category_id;
            $this->sous_category_id = $produit->sous_category_id;
           // $this->marque_id = $produit->marque_id;
            $this->reference = $produit->reference;
            $this->prix = $produit->prix;
            $this->prix_achat = $produit->prix_achat;
            $this->photo2 = $produit->photo;
            $this->photos2 = $produit->photos;
            $this->description = $produit->description;
            $this->free_shipping = $produit->free_shipping;
          //  $this->bonne_affaires = $produit->bonne_affaires ?? 0;
         //   $this->type_taille = $produit->type_taille ?? 0;
         ////   $this->type_poids = $produit->type_poids ?? 0;
         //   $this->type_piece = $produit->type_piece?? 0;
         $this->free_shipping = $this->produit->free_shipping;
         $this->valable = $this->produit->valable;
         $this->livrable = $this->produit->livrable;
         $this->cmd0 = $this->produit->cmd0;
         $this->vo = $this->produit->vo;

            $this->taille = $produit->taille;
            $this->valable = $produit->valable;
            $this->piece = $produit->piece;
            $this->poids = $produit->poids;
            $this->type_poids = $produit->type_poids;
            $this->type_taille = $produit->type_taille;
            $this->type_piece = $produit->type_piece;
         
           $this->vo = $produit->vo ?? false;
            $this->livrable = $produit->livrable;
          //  $this->bonne_affaire = $produit->bonne_affaire;
            $this->tailles = $produit->tailles;
            $this->cmd0 = $produit->cmd0;
          //  $this->vble = $produit->vble;
          //  $this->vo = $produit->vo;


            $this->sous_categories = Sous_category::where('categorie_id', $this->category_id)->get();
        
           // $this->top = $produit->top;
         //   $this->tags = $produit->tags;

        }
    }





    public function render()
    {
     
        $categories = Category::all();
        $sous_categories = Sous_category::all();
        $marques = Marque::all();
        return view('livewire.produits.add-produit', compact('categories','marques' ,'sous_categories'));
    }



    public function loadSubCategories()
    {
        // Réinitialiser la sous-catégorie sélectionnée
        $this->sous_category_id = null;
    
        // Charger les sous-catégories correspondantes à la catégorie sélectionnée
        $this->sous_categories = Sous_category::where('categorie_id', $this->category_id)->get();
    }
    


    //validation
    public function create()
    {
        $data =  $this->validate([
            'nom' => 'required|string',
            'description' => 'required|string|max:5000060',
         //   'tags' => 'nullable|string|max:260',
            'reference' => 'required|string|unique:produits,reference',
            'prix' => 'required|numeric|gt:prix_achat',
            'prix_achat' => 'required|numeric',
            'photo' =>  'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'photos.*' => 'nullable|image|mimes:jpg,jpeg,png,webp',
            'category_id' => 'nullable|integer|exists:categories,id',
            'sous_category_id' => 'nullable|integer|exists:sous_categories,id',
            
            'free_shipping' => 'nullable|boolean',
            'cmd0' => 'nullable|boolean',
            'vo' => 'nullable|boolean',
            'livrable' => 'nullable|boolean',
            'valable' => 'nullable|boolean',
            'bonne_affaires' => 'nullable',
          //  'marque_id' => 'nullable|integer|exists:marques,id',
         //  'marque_id' => 'nullable|integer|exists:marques,id',
        ]);
        ;[
            'reference.required' => ' La reference',
            'nom.required' => 'Veuillez entrer votre nom',
           'prix.required' => 'Veuillez entrer  le prix',
            //'adresse.required' => 'Veuillez entrer votre addresse',
      
          ];


        $categories = Category::findOrFail($data[('category_id')]);
        $sous_categories = Sous_category::findOrFail($data[('sous_category_id')]);

        $produit = new produits();
        $produit->nom = $this->nom;

     //   $produit->tags = $this->tags;
      $produit->description = $this->description;
        $produit->reference = $this->reference;
        $produit->free_shipping = $this->free_shipping;
        $produit->bonne_affaires = $this->bonne_affaires ?? false;
        $produit->type_poids = $this->type_poids ?? false;
        $produit->type_taille = $this->type_taille ?? false;
        $produit->type_piece = $this->type_piece ?? false;
      
        $produit->taille = $this->taille;
        $produit->valable = $this->valable ?? false;

        $produit->piece = $this->piece;
        $produit->poids = $this->poids;

        //$produit->cmd = $this->cmd;
        //$produit->vble = $this->vble;
        $produit->vo = $this->vo ?? false;
        $produit->livrable = $this->livrable ?? false;
     //   $produit->bonne_affaire = $this->bonne_affaire;
      //  $produit->tailles = $this->tailles;
        $produit->cmd0 = $this->cmd0 ?? false;

      // $produit->top = $this->top;
        // $produit->category = $this->category;

        $produit->category_id = $this->category_id;
        $produit->sous_category_id = $this->sous_category_id;
      //  $produit->marque_id = $this->marque_id;



        $produit->prix = $this->prix;
        $produit->prix_achat = $this->prix_achat;
        $produit->photo = $this->photo->store('produits', 'public');
        if ($this->photos) {
            $photosPaths = [];
            foreach ($this->photos as $photo) {
                $photosPaths[] = $photo->store('produits', 'public');
            }
            $produit->photos = json_encode($photosPaths);
        }
        // $produit->save();

        $categories->produits()->save($produit);

        //reset input
        $this->reset();

        //flash message
        session()->flash('success', 'Produit ajouté avec succès');
    }


    public function update_produit()
    {
        if ($this->produit) {
            $this->validate([
                'nom' => 'required|string',
                'prix' => 'required|numeric|gt:prix_achat',
               
                'prix_achat' => 'required|numeric',
                'photo' => 'nullable|image|mimes:jpg,jpeg,png,webp',
                'photos.*' => 'nullable|image|mimes:jpg,jpeg,png,webp',
             //  'marque_id' => 'nullable|integer|exists:marques,id',
                'category_id' => 'nullable|integer|exists:categories,id',
                'sous_category_id' => 'nullable|integer|exists:sous_categories,id',
                'free_shipping' => 'nullable|boolean',
                'bonne_affaires' => 'nullable',
                'valable' => 'nullable|boolean',
                'cmd0' => 'nullable|boolean',
               // 'vble' => 'nullable|boolean',
                'vo' => 'nullable|boolean',
                'livrable' => 'nullable|boolean',
               // 'bonne_affaire' => 'nullable',
            ]);



            $this->produit->nom = $this->nom;
            $this->produit->description = $this->description;
        
            $this->produit->prix = $this->prix;
            $this->produit->prix_achat = $this->prix_achat;
           // $this->produit->marque_id = $this->marque_id;
            $this->produit->category_id = $this->category_id;
            $this->produit->sous_category_id = $this->sous_category_id;
            $this->produit->free_shipping = $this->free_shipping;
            $this->produit->bonne_affaires = $this->bonne_affaires ?? false;
            $this->produit->taille = $this->taille;
            $this->produit->valable = $this->valable ?? false;
            $this->produit->piece = $this->piece;
            $this->produit->poids = $this->poids;

            $this->produit->type_poids = $this->type_poids ?? false;
            $this->produit->type_taille = $this->type_taille ?? false;
            $this->produit->type_piece = $this->type_piece ?? false;
          
          //  $this->produit->cmd = $this->cmd;
         //   $this->produit->vble = $this->vble;
            $this->produit->vo = $this->vo ?? false;
            $this->produit->livrable = $this->livrable;
         //   $this->produit->bonne_affaire = $this->bonne_affaire;
            $this->produit->tailles = $this->tailles;
            $this->produit->cmd0 = $this->cmd0 ?? false;
            //$this->produit->top = $this->top;
          //  $produit->category_id = $this->category_id;

            if ($this->photo) {
                //delete old photo
                if ($this->produit->photo) {
                    Storage::disk('public')->delete($this->produit->photo);
                }
                $this->produit->photo = $this->photo->store('produits', 'public');
            }

            if ($this->photos) {
                $photosPaths = [];
                foreach ($this->photos as $photo) {
                    $photosPaths[] = $photo->store('produits', 'public');
                }
                $this->produit->photos = json_encode($photosPaths);
            }
            $this->produit->save();


            $this->resetInput();

            return redirect()->route('produits')->with('success', "Produit modifié avec succès");
        }
    }

    public function resetInput()
    {
        $this->nom = '';
        $this->tags = '';
        $this->prix = '';
        $this->photo = '';
        $this->photos = '';
        $this->description = '';
        
    }
}
