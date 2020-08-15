@csrf
<div class="form-group">
    <label for="name">Nombre:</label>
    <input type="text" class="form-control @error('name') is-invalid @else border-0 @enderror" name="name" id="name"
        placeholder="Ingrese el nombre del usuario"  value="{{old('name', $user->name)}}" >
    @error('name')
    <span class="invalid-feedback" role="alert">
        <strong>{{$message}}</strong>
    </span>
    @enderror
</div>
<div class="form-group">
    <label for="email">Correo:</label>
    <input type="email" class="form-control @error('email') is-invalid @else border-0 @enderror" name="email" id="email"
        placeholder="Ingrese un email"  value="{{old('email', $user->email)}}">
    @error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{$message}}</strong>
    </span>
    @enderror
</div>
@unless ($user->id)
<div class="form-group">
    <label for="password">{{ __('Contraseña') }}</label>
    <input id="password" type="password"
    class="form-control @error('password') is-invalid @else border-0 @enderror"
        name="password"  autocomplete="new-password" placeholder="Ingrese una contraseña">

    @error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>

<div class="form-group">
    <label for="password-confirm">{{ __('Confirmar Contraseña') }}</label>
    <input id="password-confirm" type="password" class="form-control @error('password-confirm') is-invalid @else border-0 @enderror"
        name="password_confirmation"  autocomplete="new-password">
        @error('password-confirm')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>    
@endunless

<div class="form-check form-check-inline">
    @foreach ($roles as $id => $nombre )
    <input class="form-check-input " type="checkbox" value="{{$id}}"
        {{$user->roles->pluck('id')->contains($id) ? 'checked' : ''}} name="roles[]">
    <label class="form-check-label pr-2 @error('roles') is-invalid @else border-0 @enderror">{{$nombre}}</label>
    @endforeach
    @error('roles')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>

<div class="d-flex justify-content-end mt-5">
    <a class="btn btn-primary mr-3" href="{{route('users.index')}}" role="button">Volver</a>
    <button class="btn btn-secondary text-white">{{$btnText ?? ''}}</button>
</div>