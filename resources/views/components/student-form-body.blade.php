@csrf
<input name="name" type="text" placeholder="Nombre" value="{{ old('name', $student->name) }}">
<input name="email" type="email" placeholder="ejemplo@correo.com" value="{{ old('email', $student->email) }}">
<input name="password" type="password" placeholder="Contraseña" value="{{ old('password', $student->password) }}">
<select name="degree">
    @foreach ($degrees as $degree)
        <option value="{{ $degree->id }}" @if($degree->id == $student->degree_id) selected @endif>{{ $degree->name }}</option>
    @endforeach
</select>
