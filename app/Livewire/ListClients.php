<?php

namespace App\Livewire;

use App\Models\clients;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class ListClients extends Component
{
    use WithPagination;

    public $key;
    public $showModal = false;
    public $solde = 1;
    public $selectedClient;


    public function openModal($clientId)
    {
        $this->selectedClient = $clientId; // Définir le client sélectionné
        $this->solde = 1; // Réinitialiser 
        $this->showModal = true; // Ouvrir le modal
    }

    public function addSolde()
    {
        $client = User::find($this->selectedClient);
        if ($client) {
            $client->solde += $this->solde;
            $client->save();
            
   /*     $historique_solde = new historiques_solde();
       $historique_solde->quantite = $this->solde;
      $historique_solde->id_client = $client->id;
      $historique_solde->save(); */
            session()->flash('message', 'Solde ajouté avec succès.');
            $this->showModal = false; // Fermer le modal après l'ajout
        }
    }



    public function render()
    {
        $clients =User::where('role', 'client')
      ->  Orderby("created_at");
        if (isset($this->key)) {
            $clients->where('nom', 'like', '%' . $this->key . '%')
                ->orWhere('phone', 'like', '%' . $this->key . '%')
                ->orWhere('prenom', 'like', '%' . $this->key . '%');
        }
        $clients = $clients->paginate(30);
        $total = User::count();
        return view('livewire.list-clients', compact('clients','total'));
    }


    public function filtrer()
    {
        //reset page
        $this->resetPage();
    }

    public function delete($id){
        //delete client
        $client = clients::find($id);
        if($client){
            $client->delete();
            //flash message
            session()->flash('message', 'Client supprimé avec succès!');
        }
    }
}
