<div>

    @include('components.alert')

    @if ($produit)
        <form wire:submit="update_produit">
        @else
            <form wire:submit="create">
    @endif

    <div class="row">
        <div class="col-sm-8">
            <br>
            <div class="row">


                <div class="col-sm-3">

                    <div class="form-check form-switch">

                        <input name="free_shipping" class="form-check-input" class="switch"  type="checkbox" id="sur_devis"
                            wire:model.lazy="free_shipping"  wire:click="free_shipping">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Bonne affaire</label>
                        @error('free_shipping')
                            <span class="text-danger small"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-3">

                    <div class="form-check form-switch">

                        <input name="valable" class="form-check-input" class="switch" type="checkbox" id="valable"
                            wire:model.lazy="valable" wire:click="valable">
                        <label class="form-check-label" for="flexSwitchCheckDefault"> Afficher l'aticle</label>
                        @error('valable')
                            <span class="text-danger small"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>


                <div class="col-sm-2">

                    <div class="form-check form-switch">

                        <input name="livrable" class="form-check-input" class="switch" type="checkbox" id="valable"
                            wire:model.lazy="livrable" wire:click="livrable">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Livrable</label>
                        @error('livrable')
                            <span class="text-danger small"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>

            </div>
            <div class="row">

                <div class="col-sm-6">

                    <div class="form-check form-switch">

                        <input name="cmd0" class="form-check-input" class="switch" type="checkbox" id="cmd0"
                            wire:model.lazy="cmd0" wire:click="cmd0">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Commande autorisée si le stock est nul</label>
                        @error('cmd0')
                            <span class="text-danger small"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>

                <div class="col-sm-6">

                    <div class="form-check form-switch">

                        <input name="vo" class="form-check-input" class="switch" type="checkbox" id="cmd0"
                            wire:model.lazy="vo" wire:click="vo">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Afficher l'article même si le stock est nul</label>
                        @error('vo')
                            <span class="text-danger small"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>
            </div>
            <br>
            <div class="mb-3">
                <label for="">Nom du produit</label>
                <input type="text" name="nom" class="form-control" wire:model="nom">
                @error('nom')
                    <span class="text-danger small"> {{ $message }} </span>
                @enderror
            </div>
            <div class="mb-3">
                <label><strong>Description :</strong></label>
                <textarea class=" form-control" name="description" wire:model="description"></textarea>
                @error('description')
                    <span class="text-danger small"> {{ $message }} </span>
                @enderror
            </div>


            <div class="row">

                <div class="col-sm-6 mb-3">
                    <label for="category">Raryon :</label>
                    <select wire:model="category_id" wire:change="loadSubCategories" id="category"
                        class="form-control @error('category_id') is-invalid @enderror">
                        <option value="">Choisir un rayon</option>
                        @foreach ($categories as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->nom }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <span class="text-danger small"> {{ $message }} </span>
                    @enderror
                </div>


                <div class="col-sm-6 mb-3">
                    <label for="sub_category">Famille :</label>
                    <select wire:model="sous_category_id" id="sub_category"
                        class="form-control @error('sous_category_id') is-invalid @enderror">
                        <option value="">Choisir une famille</option>
                        @foreach ($sous_categories as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->titre }}</option>
                        @endforeach
                    </select>
                    @error('sous_category_id')
                        <span class="text-danger small"> {{ $message }} </span>
                    @enderror
                </div>
          
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label for="">Prix de vente</label>
                        <input type="number" step="0.1" name="prix" class="form-control" wire:model="prix">
                        @error('prix')
                            <span class="text-danger small"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label for="">Prix d'achat</label>
                        <input type="number" step="0.1" name="prix_achat" class="form-control"
                            wire:model="prix_achat">
                        @error('prix_achat')
                            <span class="text-danger small"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label for="">Référence du produit</label>
                        <input type="text" step="0.1" name="reference" class="form-control"
                            wire:model="reference">
                        @error('reference')
                            <span class="text-danger small"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>

            </div>
        </div>
        <div class="col-sm-4">
            <div class="mb-3">
                <label for="">Photo d'illustration (300*300)</label>
                <div class="preview-produit-illustration" onclick="preview_illustration('new-prosduit')">
                    @if ($produit)
                        @if ($photo2 && is_null($photo))
                            <img src="{{ Storage::url($photo2) }}" alt="" class="w-100">
                        @else
                            <img src="{{ $photo->temporaryUrl() }}" alt="" srcset="">
                        @endif
                    @else
                        @if ($photo)
                            <img src="{{ $photo->temporaryUrl() }}" alt="" class="w-100">
                        @else
                            <img src="/icons/no-image.webp" alt="" class="w-100">
                        @endif
                    @endif
                </div>
                <input type="file" name="photo" accept="image/*" class=" d-none" id="file-input-new-prosduit"
                    wire:model="photo">
                @error('photo')
                    <span class="text-danger small"> {{ $message }} </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="">Autres photos</label>
                <input type="file" multiple name="photos" accept="image/*" class="form-control"
                    wire:model="photos">
                @error('photos')
                    <span class="text-danger small"> {{ $message }} </span>
                @enderror
            </div>

        </div>
    </div>
    <div style="text-align: right;">
        <button class="btn btn-primary btn-sm px-5" type="submit" wire:loading.attr="disabled">
            <span wire:loading>
                <img src="https://i.gifer.com/ZKZg.gif" height="15" alt="" srcset="">
            </span>
            @if ($produit)
                Mettre a jour
            @else
                Enregistrer le produit
            @endif
        </button>
    </div>
    </form>
</div>
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.ckeditor').ckeditor();
    });
</script>
