<div class="col-md-12">
    <div class="form-group">
        <label for="title">Título</label>
        <input type="text" name="title" id="title" value="{{ isset($userCard->title) ? $userCard->title : '' }}"
            class="form-control border-secondary" placeholder="Título" required>
    </div>
</div> <!-- /.col -->

<div class="col-md-12 mb-4">
    <div class="card shadow">
        <div class="card-body">
            <h5 class="card-title">Corpo da Descrição</h5>
            <p>Digite o corpo da Descrição</p>
            <!-- Create the editor container -->
            <textarea name="description" id="editor1"  style="min-height:300px; min-width:100%">
       {{ isset($userCard->description) ? $userCard->description : '' }}
        </textarea>
        </div>
    </div>
</div>