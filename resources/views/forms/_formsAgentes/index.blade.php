@isset($agentes)
    <div class="col-12 col-lg-12">
        <div class="row align-items-center my-4">
            <div class="col">
                <h2 class="page-title">Capa Actual</h2>
            </div>

        </div>
        <div class="card-deck mb-4">

            <div class="card border-0 bg-transparent">
                <div class="card-img-top img-fluid rounded"
                    style='background-image:url("/storage/{{ $agentes->foto }}");background-position:center;background-size:cover;height:200px;'>
                </div>

            </div> <!-- .card -->


        </div> <!-- .card-deck -->
    </div>
@endisset




<div class="col-md-8">
    <div class="form-group">
        <label for="title">Nome</label>
        <input type="text" name="name" id="name" value="{{ isset($agentes->name) ? $agentes->name : old('name') }}"
            class="form-control border-secondary" placeholder="Título" required>
    </div>
</div> <!-- /.col -->

<div class="col-md-4">
    <div class="form-group">
        <label for="date">Especialidade</label>
        <input type="text" name="specification" id="specification" value="{{ isset($agentes->specification) ? $agentes->specification : old('specification') }}"
        class="form-control border-secondary" placeholder="Título" required>
    </div>
</div> <!-- /.col -->


<div class="col-md-12">
    <div class="form-group">
        <div class="custom-file">
            <label class="form-label border-secondary" for="image">Seleccione a Capa</label>
            <input type="file" class="form-control" name="foto" value="{{ old('foto') }}" id="foto">

        </div>
    </div>
</div> <!-- /.col -->



