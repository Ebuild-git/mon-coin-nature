<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;


use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProductImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        foreach ($rows as $row)
        {
            $customer = produits::where('nom', $row['nom'])->first();
            if($customer){

                $customer->update([
                    'nom' => $row['nom'],
                    'description' => $row['description'],
                    'reference' => $row['reference'],
                    'prix' => $row['prix'],
                    'prix_achat' => $row['prix_achat'],
                    'quantite' => $row['quantite'],
                    'cmd0' => $row['cmd0'],
                    'v0' => $row['v0'],
                    'valable' => $row['valable'],
                    'livrable' => $row['livrable'],
               
                  
                    'created_at' => $row['created_at'],
                ]);

            }else{

                produits::create([
                    'nom' => $row['nom'],
                    'description' => $row['description'],
                   'reference' => $row['reference'],
                    'prix' => $row['prix'],
                    'prix_achat' => $row['prix_achat'],
                    'quantite' => $row['quantite'],
                    'cmd0' => $row['cmd0'],
                    'v0' => $row['v0'],
                    'valable' => $row['valable'],
                    'livrable' => $row['livrable'],
                    'created_at' => $row['created_at'],
                    'updated_at' => $row['updated_at'],
                    
                ]);
            }

        }
    }
}
