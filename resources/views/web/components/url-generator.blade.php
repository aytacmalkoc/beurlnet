<div>
    <form wire:submit.prevent="createUrl" class="rounded p-4 mt-4 bg-white">
        <div class="row text-left justify-content-center">
            <div class="col-lg-7 col-md-12">
                <div class="form-group mb-3">
                    <input type="url" class="form-control" placeholder="url" wire:model.lazy="url" required/>
                    @error('url')
                    <div class="invalid-feedback d-block">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>

            <div class="col-lg-3 col-md-12">
                <div class="form-group mb-3">
                    <select class="form-control custom-select" wire:model="visible">
                        <option value="0">Gizle</option>
                        <option value="1">Göster</option>
                    </select>
                </div>
            </div>

            <div class="col-lg-2 col-md-12">
                <button type="submit" class="searchbtn btn btn-outline-success btn-block p">
                    Kısalt!
                </button>
            </div>

            @if($result)
                <div class="col-12">
                    <div class="alert alert-light text-center">
                        <p class="text-muted mb-0 mt-4 small">
                            <a href="https://{{ $result }}" target="_blank" class="text-success">{{ $result }}</a>
                            <button class="btn btn-outline-light mx-3 btn-sm">kopyala</button>
                        </p>
                    </div>
                </div>
            @endif

        </div>
    </form>
</div>
