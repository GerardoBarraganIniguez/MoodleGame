@csrf
<input name="name" type="text" placeholder="Nombre" value="{{ old('name', $subject->name) }}">