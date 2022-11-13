@csrf
<input name="name" type="text" placeholder="Nombre" value="{{ $teacher->name }}">
<input name="email" type="email" placeholder="ejemplo@ejemplo.com" value="{{ $teacher->email }}">
<input name="password" type="password" placeholder="Contraseña" value="{{ $teacher->password }}">