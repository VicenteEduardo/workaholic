@isset($event)
    <div class="col-12 col-lg-12">
        <div class="row align-items-center my-4">
            <div class="col">
                <h2 class="page-title">Capa Actual</h2>
            </div>

        </div>
        <div class="card-deck mb-4">

            <div class="card border-0 bg-transparent">
                <div class="card-img-top img-fluid rounded"
                    style='background-localization:url("/storage/{{ $event->path }}");background-position:center;background-size:cover;height:200px;'>
                </div>

            </div> <!-- .card -->


        </div> <!-- .card-deck -->
    </div>
@endisset

<div class="col-md-8">
    <div class="form-group">
        <label for="title">Título</label>
        <input type="text" name="title" id="title" value="{{ isset($event->title) ? $event->title : old('title') }}"
            class="form-control border-secondary" placeholder="Título" required>
    </div>
</div> <!-- /.col -->


<div class="col-md-4">
    <div class="form-group">
        <label for="dateEvent">Data</label>
        <input type="date" name="dateEvent" id="dateEvent" value="{{ isset($event->dateEvent) ? $event->dateEvent : old('dateEvent') }}"
            class="form-control border-secondary" placeholder="Título" required>
    </div>
</div> <!-- /.col -->


<div class="col-md-3">
    <div class="form-group">
        <label for="startTime">Horário Inicio</label>
        <input type="time" name="startTime" id="startTime"
            value="{{ isset($event->startTime) ? $event->startTime : old('startTime') }}"
            class="form-control border-secondary" required>
    </div>
</div> <!-- /.col -->



<div class="col-md-3">
    <div class="form-group">
        <label for="endTime">Horário Termino</label>
        <input type="time" name="endTime" id="endTime"
            value="{{ isset($event->endTime) ? $event->endTime : old('endTime') }}"
            class="form-control border-secondary" placeholder="Autor da Matéria" required>
    </div>
</div> <!-- /.col -->

<div class="col-md-6">
    <div class="form-group">
        <div class="custom-file">
            <label class="form-label border-secondary" for="image">Seleccione a Capa</label>
            <input type="file" class="form-control" name="image" value="{{ old('image') }}" id="localization">

        </div>
    </div>
</div> <!-- /.col -->


<div class="col-md-6">
    <div class="form-group">
        <div class="custom-file">
            <label class="form-label border-secondary" for="localization">Localização</label>
            <input type="text" class="form-control" name="localization" placeholder="Localização"
                value="{{ isset($event->localization) ? $event->localization : old('localization') }}"
                id="localization">

        </div>
    </div>
</div> <!-- /.col -->

@if (Auth::user()->level == 'Administrador' || Auth::user()->level == 'Editor')
    <div class="col-md-6">
        <div class="form-group">
            <label for="state">Estado do Evento</label>
            <select class="form-control border-dark" id="state" name="state" required>

                @if (isset($event->state))
                    <option value="{{ $event->state }}" class="text-primary h6" selected>
                        {{ $event->state }}
                    </option>
                @else
                    <option selected disabled value="">Seleccione o estado do Evento</option>
                @endif
                <option value="Autorizada">Autorizada</option>
                <option value="Não Autorizada">Não Autorizada</option>
            </select>
        </div>
    </div> <!-- /.col -->
@endif

<div class="col-md-12 mb-4">
    <div class="card shadow">
        <div class="card-body">
            <h5 class="card-title">Descrição</h5>
            <p>Digite a Descrição     
            </p>
            <!-- Create the editor container -->
            <textarea name="body" id="editor1" style="min-height:300px; min-width:100%">
                {{ isset($event->body) ? $event->body : old('body') }}
            </textarea>
        </div>
    </div>
</div>
