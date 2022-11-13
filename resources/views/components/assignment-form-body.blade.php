@csrf
<input name="name" type="text" placeholder="Nombre" value="{{ old('name', $assignment->name) }}">
<textarea name="description" cols="30" rows="10" placeholder="Descripcion">{{ $assignment->description }}</textarea>