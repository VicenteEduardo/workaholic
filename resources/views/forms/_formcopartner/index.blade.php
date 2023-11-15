@isset($copartner)
    <div class="col-12 col-lg-12">
        <div class="row align-items-center my-4">
            <div class="col">
                <h2 class="page-title">Capa Actual</h2>
            </div>

        </div>
        <div class="card-deck mb-4">

            <div class="card border-0 bg-transparent">
                <div class="card-img-top img-fluid rounded"
                    style='background-image:url("/storage/{{ $copartner->photo }}");background-position:center;background-size:cover;height:200px;'>
                </div>

            </div> <!-- .card -->


        </div> <!-- .card-deck -->
    </div>
@endisset

<div class="col-md-6">
    <div class="form-group">
        <label for="title">Nome do Parceiro</label>
        <input type="text" name="name" id="title"
            value="{{ isset($copartner->name) ? $copartner->name : old('name') }}" class="form-control border-secondary"
            placeholder="Nome do Parceiro" required>
    </div>
</div> <!-- /.col -->



<div class="col-md-6">
    <div class="form-group">
        <div class="custom-file">
            <label class="form-label border-secondary" for="image">Seleccione a Capa</label>
            <input type="file" class="form-control" name="photo" value="{{ old('photo') }}" id="image">

        </div>
    </div>
</div> <!-- /.col -->

<div class="col-md-12 mb-4">
    <div class="card shadow">
        <div class="card-body">
            <h5 class="card-title">Corpo da Matéria</h5>
            <p>Campo não obrigatório</p>
            <!-- Create the editor container -->
            <textarea name="body" id="editor1" style="min-height:300px; min-width:100%">
                {{ isset($copartner->body) ? $copartner->body : old('body') }}
            </textarea>
        </div>
    </div>
</div>
