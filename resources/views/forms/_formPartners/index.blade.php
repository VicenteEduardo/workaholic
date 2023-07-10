@isset($partner)
    <div class="col-12 col-lg-12">
        <div class="row align-items-center my-4">
            <div class="col">
                <h2 class="page-title">Capa Actual</h2>
            </div>

        </div>
        <div class="card-deck mb-4">

            <div class="card border-0 bg-transparent">
                <div class="card-img-top img-fluid rounded"
                    style='background-image:url("/storage/{{ $partner->image }}");background-position:center;background-size:cover;height:200px;'>
                </div>

            </div> <!-- .card -->


        </div> <!-- .card-deck -->
    </div>
@endisset

<div class="col-md-6">
    <div class="form-group">
        <label for="name">Nome do Parceiro</label>
        <input type="text" name="name" id="name" value="{{ isset($partner->name) ? $partner->name : old('name') }}"
            class="form-control border-secondary" placeholder="Nome do Parceiro" required>
    </div>
</div> <!-- /.col -->



<div class="col-md-6">
    <div class="form-group">
        <label for="link">Link</label>
        <input type="text" name="link" id="link" value="{{ isset($partner->link) ? $partner->link : '' }}"
            class="form-control border-secondary" placeholder="Link">
    </div>
</div> <!-- /.col -->

<!-- /.col -->
<div class="col-md-12">
    <div class="form-group">
        <div class="custom-file">
            <label class="form-label border-secondary" for="image">Seleccione a Capa</label>
            <input type="file" class="form-control" name="image" value="{{ old('image') }}" id="image">

        </div>
    </div>
</div> <!-- /.col -->
