
<div class="row">
<div class="col-md-6">
    <div class="form-group">
        <label for="title">Nome Completo</label>
        <input type="text" name="nome" id="nome" value="{{ isset($pedido->nome) ? $pedido->nome : old('nome') }}"
            class="form-control border-secondary" placeholder="Título" required>
    </div>
</div> <!-- /.col -->




<div class="col-md-6">
    <div class="form-group">
        <label for="date">Telefone</label>
        <input type="text" name="telefone" id="telefone" value="{{ isset($pedido->telefone) ? $pedido->telefone : old('telefone') }}"
        class="form-control border-secondary" placeholder="Título" required>
    </div>
</div> <!-- /.col -->


<div class="col-md-6">
    <div class="form-group">
        <label for="date">Morada</label>
        <input type="text" name="endereco" id="endereco" value="{{ isset($pedido->endereco) ? $pedido->endereco : old('endereco') }}"
        class="form-control border-secondary" placeholder="Título" required>
    </div>
</div> <!-- /.col -->


<div class="col-md-6">
    <div class="form-group">
        <label for="date">Status</label>
        <select name="status" id="status" class="form-control" required>
            @if (isset($pedido->status))
                <option value="{{ $pedido->status }}" class="text-primary h6" selected>
                    {{ $pedido->status }}
                </option>
            @else
                <option disabled selected>Seleccione o nível de acesso</option>
            @endif

                <option value="Negado">Negado</option>
                <option value="Concluido">Concluido</option>
                <option value="Pendente">Pendente</option>


        </select>
    </div>
</div> <!-- /.col -->


</div>

