<label for="basic-url" class="form-label">Nombre completo:</label>

        <div class="input-group mb-3">
            <span class="input-group-text">NOMBRES</span>
            <input type="text" name="Nombres" id="Nombres"class="form-control" placeholder="Ingresa aqui tus nombres:" aria-label="Username" value="{{ isset($docente->Nombres)?$docente->Nombres:'' }}">
            <span class="input-group-text">APELLIDOS</span>
            <input type="text" name="Apellidos" id="Apellidos" class="form-control" placeholder="Ingresa aqui tus apellidos:" aria-label="Server" value="{{ isset($docente->Apellidos)?$docente->Apellidos:'' }}">
        </div>

        <label for="basic-url" class="form-label">Edad: </label>
        <div class="input-group mb-3">
            <input type="text" name="Edad" id="Edad" class="form-control" placeholder="Ingresa tu edad en años" aria-label="Recipient's username" aria-describedby="basic-addon2" value="{{ isset($docente->Edad)?$docente->Edad:'' }}">
            <span class="input-group-text" id="basic-addon2"> Años</span>
        </div>

        <label for="basic-url" class="form-label">Correo Electrónico: </label>
        <div class="input-group mb-3">
             <span class="input-group-text">@</span>
            <input type="text" name="Correo_Electronico" id="Correo_Electronico" class="form-control" placeholder="Ingresa aqui tu Correo Electronico:" aria-label="Username" value="{{ isset($docente->Correo_electronico)?$docente->Correo_electronico:'' }}">
        </div>

        <label for="basic-url" class="form-label">Direccion residencial: </label>
        <div class="input-group">
            <span class="input-group-text">Direccion: </span>
            <input class="form-control" name="Direccion" id="Direccion"placeholder="Espacio para escribir la direccion de tu residencia." aria-label="With textarea" value="{{ isset($docente->Direccion)?$docente->Direccion:'' }}">
        </div>

        <br>
        <label for="basic-url" class="form-label">Materias que imparte: </label>
        <div class="input-group">
            <span class="input-group-text">📚</span>
            <input class="form-control" name="Materia" id="Materia" placeholder="Espacio para escribir las materias que impartes." aria-label="With textarea" value="{{ isset($docente->Materia)?$docente->Materia:'' }}">
        </div>

        <label for="basic-url" class="form-label">Institucion donde labora: </label>
        <div class="input-group mb-3">
             <span class="input-group-text">🏫</span>
            <input type="text" name="Institucion" id="Institucion" class="form-control" placeholder="Ingresa aqui tu Centro donde impartes clases:" aria-label="Username" value="{{ isset($docente->Institucion)?$docente->Institucion:'' }}">
        </div>

        <button type="submit" class="btn btn-success">Guardar Registro</button>       