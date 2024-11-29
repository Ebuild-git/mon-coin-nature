<div>

    <form wire:submit="filtrer">
        <div class="row">
            <div class="col-sm-6">
                <span>
                    <b>{{ $clients->count() }}</b> Résultats sur {{ $total }}.
                </span>
            </div>
            <div class="col-sm-6">
                <div class="input-group mb-3">
                    <input type="text" class="form-control btn-sm" wire:model="key" placeholder="Nom, email, phone">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">
                            Filtrer
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>


    @include('components.alert')

    <div class="table-responsive-sm">
        <table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100">
            <thead class="table-dark cusor">
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>
                        Solde
                    </th>
                    <th>Phone</th>
                    <th>Adresse</th>
                    <th>Pays</th>
                    <th>Gouvernorat</th>
                    <th>création</th>
                    <th style="text-align: right;">
                        <span wire:loading>
                            <img src="https://i.gifer.com/ZKZg.gif" width="20" height="20" class="rounded shadow"
                                alt="">
                        </span>
                    </th>
                </tr>
            </thead>


            <tbody>
                @forelse ($clients as $client)
                    <tr>
                        <td>
                            {{ $client->nom }}
                        </td>
                        <td>
                            {{ $client->prenom }}
                        </td>
                        
                            <td class="cusor">
                            
    
                                @if ($client->solde > 500)
                                    <!-- Icône pour en solde -->
                                    <span class="text-success" title="En solde">
                                       {{--  <i class="fas fa-check-circle"></i> --}}
                                        <span class="badge badge-success">En solde</span>
                                        {{ $client->solde }} U.
                                    </span>
                                @endif
    
                                @if ($client->solde < 500 && $client->solde > 0)
                                    <!-- Seuil pour l'alerte -->
                                    {{ $client->solde }} U.
                                    <span class="badge badge-yellow" title="{{ $client->solde }} client(s) en solde pour le moment"  style="background-color: rgb(222, 222, 19) ;  color: rgb(252, 253, 251);">Alerte solde Bas</span>
                                @endif
    
    
                                @if ($client->solde == 0)
                                    <!-- Icône pour rupture de solde -->
                                    <span class="text-danger" title="Rupture de solde">
                                       {{--  <i class="fas fa-times-circle"></i> --}}
                                        <span class="badge badge-danger">Rupture</span>
                                    </span>
                                @endif
                            </td>
                      
                        <td>
                            {{ $client->phone }}
                        </td>
                        <td>
                            {{ $client->adresse }}
                        </td>
                        <td>
                            {{ $client->pays }}
                        </td>
                        <td>
                            {{ $client->gouvernorat }}
                        </td>
                        <td>{{ $client->created_at }} </td>
                        <td style="text-align: right;">

                            <button class="btn btn-primary btn-sm" title="Ajouter solde"
                                        wire:click="openModal({{ $client->id }})">
                                        <i class="fas fa-plus"></i>
                                    </button>
                            @can('clients_view')
                                <div class="btn-group">
                                    {{-- <button class="btn btn-sm btn-primary" type="button">
                                        <i class="ri-phone-fill"></i> Appeler
                                    </button> --}}
                                    <button class="btn btn-sm btn-danger"
                                        onclick="toggle_confirmation({{ $client->id }})">
                                        <i class="ri-delete-bin-6-line"></i>
                                    </button>
                                </div>
                                <button class="btn btn-sm btn-success d-none" type="button"
                                    id="confirmBtn{{ $client->id }}" wire:click="delete({{ $client->id }})">
                                    <i class="bi bi-check-circle"></i>
                                    <span class="hide-tablete">
                                        Confirmer
                                    </span>
                                </button>
                            @endcan
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="text-center">Aucun client trouvé</td>
                    </tr>
                @endforelse

            </tbody>

            

        </table>
    </div>
    {{ $clients->links('pagination::bootstrap-4') }}

    <style>
        .badge {
            padding: 5px 10px;
            border-radius: 5px;
            color: white;
            font-weight: bold;
        }

        .badge-success {
            background-color: green;
        }

        .badge-danger {
            background-color: red;
        }
    </style>

    @if ($showModal)
        <div class="modal fade show" style="display: block;" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Ajouter solde pour {{ $selectedClient }}</h5>
                        <button type="button" class="btn-close" wire:click="$set('showModal', false)"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form wire:submit.prevent="addSolde">
                            <div class="mb-3">
                                <label for="solde" class="form-label">Solde à ajouter</label>
                                <input type="number" id="solde" wire:model="solde" class="form-control"
                                    min="1">
                                @error('solde')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Ajouter</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <script>
        document.addEventListener('livewire:load', function() {
            Livewire.on('openModal', () => {
                var modal = new bootstrap.Modal(document.getElementById('add-solde-modal'));
                modal.show();
            });
        });
    </script>

</div>
