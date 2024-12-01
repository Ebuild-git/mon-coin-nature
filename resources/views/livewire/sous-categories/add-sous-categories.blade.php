<div>

    @include('components.alert')

    @if ($sous_category)
        <form wire:submit="update_sous_category">
        @else
            <form wire:submit="create">
    @endif

    <div class="row">
        <div class="col-sm-8">
            <div class="col-sm-12 mb-3">
                <label for="">Libellé</label>
                <input type="text" name="titre"  class="form-control" wire:model="titre">
                @error('titre')
                    <span class="text-danger small"> {{ $message }} </span>
                @enderror
            </div>
            <div class="col-sm-12 mb-3">
                <label for=""> Categorie </label>
                <select wire:model='categorie_id' class="form-control @error('categorie_id') is-invalid @enderror">
                    <option value=""></option>
                    @foreach ($categories as $cat)
                        <option value="{{ $cat->id }}">{{ $cat->nom }}</option>
                    @endforeach
                </select>
                @error('categorie_id')
                    <span class="text-danger small"> {{ $message }} </span>
                @enderror
            </div>

            <div class="mb-3" wire:ignore>
                <label><strong>Description :</strong></label>
                <textarea  class="form-control" name="description"   wire:model="description" rows="5"></textarea>
                @error('description')
                    <span class="text-danger small"> {{ $message }} </span>
                @enderror
            </div>
            
        </div>
        <div class="col-sm-4">
            <div class="mb-3">
                <label for="">image d'illustration(336*400)</label>
                <div class="preview-produit-illustration" onclick="preview_illustration('new-prosduit')">
                    @if ($sous_category)
                        @if ($image2 && is_null($image))
                            <img src="{{ Storage::url($image2) }}" alt="" class="w-100">
                        @else
                            <img src="{{ $image->temporaryUrl() }}" alt="" srcset="">
                        @endif
                    @else
                        @if ($image)
                            <img src="{{ $image->temporaryUrl() }}" alt="" class="w-100">
                        @else
                            <img src="/icons/no-image.webp" alt="" class="w-100">
                        @endif
                    @endif
                </div>
                <input type="file" name="image" accept="image/*" class=" d-none" id="file-input-new-prosduit"
                    wire:model="image">
                @error('image')
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
            @if ($sous_category)
                Mettre a jour
            @else
                Enregistrer la category
            @endif
        </button>
    </div>
    </form>
</div>
