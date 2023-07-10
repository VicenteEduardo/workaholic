@isset($service)
    <div class="col-12 col-lg-12">
        <div class="row align-items-center my-4">
            <div class="col">
                <h2 class="page-title">Capa Actual</h2>
            </div>

        </div>
        <div class="card-deck mb-4">

            <div class="card border-0 bg-transparent">
                <div class="card-img-top img-fluid rounded"
                    style='background-image:url("/storage/{{ $service->photo }}");background-position:center;background-size:cover;height:200px;'>
                </div>

            </div> <!-- .card -->


        </div> <!-- .card-deck -->
    </div>
@endisset




<div class="col-md-8">
    <div class="form-group">
        <label for="title">Nome do Serviço</label>
        <input type="text" name="name" id="name" value="{{ isset($service->name) ? $service->name : old('name') }}"
            class="form-control border-secondary" placeholder="Nome do Serviço" required>
    </div>
</div> <!-- /.col -->

<div class="col-md-4">
    <div class="form-group">
        <label for="date">Preço</label>
        <input type="text" name="price" id="price" value="{{ isset($service->price) ? $service->price : old('price') }}"
            class="form-control border-secondary" placeholder="Preço" required>
    </div>
</div> <!-- /.col -->



<div class="col-md-12">
    <div class="form-group">
        <div class="custom-file">
            <label class="form-label border-secondary" for="photo">Seleccione a Capa</label>
            <input type="file" class="form-control" name="photo" value="{{ old('photo') }}" id="photo">

        </div>
    </div>
</div> <!-- /.col -->

<div class="col-md-12 mb-4">
    <div class="card shadow">
        <div class="card-body">
            <h5 class="card-title">Corpo da Matéria</h5>
            <p>Digite o corpo da matéria</p>
            <!-- Create the editor container -->
            <textarea name="description" id="editor1" style="min-height:300px; min-width:100%">
                {{ isset($service->description) ? $service->description : old('description') }}
            </textarea>
        </div>
    </div>
</div>
