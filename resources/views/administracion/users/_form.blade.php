@csrf
<div class="form-group">
    <label for="name">name:</label>
    <input type="text" class="form-control @error('name') is-invalid @else border-0 @enderror" name="name" id="name"
        placeholder="Ingrese el name de la factura" value="{{old('name', $user->name)}}">
    @error('name')
    <span class="invalid-feedback" role="alert">
        <strong>{{$message}}</strong>
    </span>
    @enderror
</div>
<div class="form-group">
    <label for="email">email:</label>
    <input type="email" class="form-control @error('name') is-invalid @else border-0 @enderror" name="email" id="email"
        placeholder="Ingrese un email" value="{{old('email', $user->email)}}">
    @error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{$message}}</strong>
    </span>
    @enderror
</div>

<div class="form-check form-check-inline">
    @foreach ($roles as $id => $nombre)
    <input class="form-check-input " type="checkbox" value="{{$id}}"
        {{$user->roles->pluck('id')->contains($id) ? 'checked' : ''}} name="roles[]">
    <label class="form-check-label">{{$nombre}}</label>
    </label> @endforeach
</div>

<div class="d-flex justify-content-end mt-5">
    <a class="btn btn-primary mr-3" href="{{route('users.index')}}" role="button">Volver</a>
    <button class="btn btn-secondary text-white">{{$btnText ?? ''}}</button>
</div>