<div class="col-md-6">
    <div class="form-group">
        <label for="title">Título</label>
        <input type="text" name="title" id="title" value="{{ isset($newspaper->title) ? $newspaper->title : '' }}"
            class="form-control border-secondary" placeholder="Título" required>
    </div>
</div> <!-- /.col -->


<div class="col-md-6">
    <div class="form-group">
        <label for="link">Link</label>
        <input type="text" name="link" id="link" value="{{ isset($newspaper->link) ? $newspaper->link : '' }}"
            class="form-control border-secondary" placeholder="Link">
    </div>
</div> <!-- /.col -->