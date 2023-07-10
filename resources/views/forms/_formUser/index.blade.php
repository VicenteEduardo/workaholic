@csrf

<div class="form-row">
    <div class="form-group col-md-4">
        <label for="name">Nome</label>
        <input type="text" class="form-control" placeholder="Nome" id="name" name="name"
            value="{{ isset($user->name) ? $user->name : old('name') }}" required autofocus />
    </div>
    <div class="form-group col-md-4">
        <label for="email">Email</label>
        <input type="email" class="form-control" placeholder="Email" id="email" name="email"
            value="{{ isset($user->email) ? $user->email : old('email') }}" required />
    </div>


    <div class="form-group col-md-4">
        <label for="level">Nível de Acesso</label>
        <select name="level" id="level" class="form-control" required>
            @if (isset($user->level))
                <option value="{{ $user->level }}" class="text-primary h6" selected>
                    {{ $user->level }}
                </option>
            @else
                <option disabled selected>Seleccione o nível de acesso</option>
            @endif

            @if (Auth::user()->level == 'Administrador')
                <option value="Administrador">Administrador</option>
                <option value="Editor">Editor</option>
                <option value="Analista">Analista</option>
                
            @endif

        </select>
    </div>

</div>
<hr class="my-4">
<div class="row mb-4">
    <div class="col-md-6">
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" class="form-control" name="password"
                autocomplete="new-password" placeholder="Password" required />
        </div>
        <div class="form-group">
            <label for="password_confirmation">Confirmar Password</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                placeholder="Confirmar Password" required />
        </div>
    </div>
    <div class="col-md-6">
        <b class="mb-2 text-dark">Requisitos de senhas</b>
        <p class="small text-dark mb-2"> Para criar uma nova senha, você deve atender a todos os seguintes requisitos:
        </p>
        <ul class="small text-dark pl-4 mb-0">
            <li>Mínimo 8 caracteres</li>
            <li>Pelo menos um caracter especial</li>
            <li>Pelo menos um número</li>
            <li>Pelo menos uma  letra maiúscula e uma letra minúscula</li>
            <li>Não pode ser igual à senha anterior</li>
        </ul>
    </div>
</div>
