@csrf
<input name="name" type="text" placeholder="Nombre" value="{{ $exam->name }}">
<textarea name="description" cols="30" rows="10" placeholder="Descripcion">{{ $exam->description }}</textarea>