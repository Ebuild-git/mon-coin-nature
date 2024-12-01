<?php

namespace App\Livewire\SousCategories;

use Livewire\Component;
use App\Models\Category;
use App\Models\Sous_category;
use Illuminate\Support\Facades\Storage;

use Livewire\WithFileUploads;

class AddSousCategories extends Component
{

    use WithFileUploads;

    public $posts, $title, $body, $post_id;
    public $updateMode = false;

    
    public $titre, $image,$image2,$sous_category,$description,$categorie_id;


    public function mount($sous_category){
        if($sous_category){
            $this->sous_category = $sous_category;
            $this->categorie_id = $sous_category->categorie_id;
            $this->titre = $sous_category->titre;
            $this->description = $sous_category->description;
           
            $this->image2 = $sous_category->image;
           
        }
    }

    private function resetInputFields(){
        $this->titre = '';
        $this->description = '';
        $this->image = '';
    }

    

  
    public function create()
    {
    $data=    $this->validate([
            'titre' => 'required|string',
            'description' => 'nullable|string|Max:5000000',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp',
            'categorie_id' => 'required|integer|exists:categories,id',


        ]);
        ;[
            'description.required' => 'La description doit avoir moins de 5000 caractères',
            'titre.required' => 'Veuillez entrer le titre ',
           'image.required' => 'Veuillez  mettre une image',
      
      
          ];

          $categories = Category::findOrFail($data[('categorie_id')]);

        $sous_category = new Sous_category();
        $sous_category->titre = $this->titre;
        $sous_category->description = $this->description;
        $sous_category->categorie_id = $this->categorie_id;
        
        $sous_category->image = $this->image->store('categories', 'public');
  
        $categories->sous_categories()->save($sous_category);

     
       $this->resetInputFields();


        session()->flash('success', 'sous_category ajoutée avec succès');
    }


    public function update_sous_category(){
        if($this->sous_category){
            $this->validate([
                'titre' => 'required|string',
                'description' => 'nullable|string|Max:5000000',
                'categorie_id' => 'required|integer|exists:categories,id',
              
              
                'image' => 'nullable|image|mimes:jpg,jpeg,png,webp',
               
            ]);

          
          $sous_category = new Sous_category();

            $this->sous_category->titre = $this->titre;
            $this->sous_category->description = $this->description;
            $this->sous_category->categorie_id = $this->categorie_id;
            
            

            if($this->image){
                //delete old image
                if ($this->sous_category->image) {
                    Storage::disk('public')->delete($this->sous_category->image);
                }
                $this->sous_category->image = $this->image->store('categories', 'public');
            }

    
            $this->sous_category->save();
    
  
            $this->resetInputFields();

    
            return redirect()->route('sous_categories')->with('success',"sous_category modifié avec succès");



        }

    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.sous-categories.add-sous-categories', compact('categories'));
    }
}
