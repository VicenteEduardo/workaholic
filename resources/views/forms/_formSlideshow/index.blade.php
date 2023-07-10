@isset($slideshow)


    <div class="col-12 col-lg-12">
        <div class="row align-items-center my-4">
            <div class="col">
                <h2 class="page-title">Imagem Actual</h2>
            </div>

        </div>
        <div class="card-deck mb-4">

            <div class="card border-0 bg-transparent">
                <div class="card-img-top img-fluid rounded"
                    style='background-image:url("/storage/{{ $slideshow->path }}");background-position:center;background-size:cover;height:200px;'>
                </div>

            </div> <!-- .card -->


        </div> <!-- .card-deck -->
    </div>
@endisset

<div class="col-md-12">
    <div class="form-group">
        <label for="title">Título</label>
        <input type="text" name="title" id="title" value="{{ isset($slideshow->title) ? $slideshow->title : '' }}"
            class="form-control border-secondary" placeholder="Título">
    </div>
</div> <!-- /.col -->
<div class="col-md-6">
    <div class="form-group">
        <label for="link">Link</label>
        <input type="text" name="link" id="link" value="{{ isset($slideshow->link) ? $slideshow->link : '' }}"
            class="form-control border-secondary" placeholder="Link">
    </div>
</div> <!-- /.col -->
<div class="col-md-6">
    <div class="form-group">
        <label for="button">Texto do Botão</label>
        <input type="text" name="button" id="button" value="{{ isset($slideshow->button) ? $slideshow->button : '' }}"
            class="form-control border-secondary" placeholder="Texto do Botão">
    </div>
</div> <!-- /.col -->

<div class="col-md-12">
    <div class="form-group">
        <label for="image">Seleccione a Imagem</label>
        <input type="file" class="form-control" name="image" id="image">
    </div>
</div> <!-- /.col -->
