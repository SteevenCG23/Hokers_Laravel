<div class="modal fade" id="edit{{ $user->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 text-dark" id="exampleModalLabel">Editar perfil</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('index.update', $user->id) }}" method="post">
                @csrf
                @method('PUT')
                @if (Session::has('mensaje_edit'))
                    <script>
                        swal("Perfil editado con éxito", "{{ Session::get('mensaje') }}", 'success', {


                            timer: 3000,

                        });
                    </script>
                @endif
                <div class="modal-body">

                    <div class="mb-3">

                        <label for="" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="name" id="name"
                            aria-describedby="helpId" placeholder="Ingrese el nombre" value="{{ $user->name }}" minlength="4" maxlength="20" pattern="[A-Za-z\s]*" title="Solo se permiten letras" readonly/>
                    </div>

                    <div class="mb-3">

                        <label for="" class="form-label">Correo</label>
                        <input type="text" class="form-control" name="name" id="name"
                            aria-describedby="helpId" placeholder="Ingrese el nombre" value="{{ $user->name }}" minlength="4" maxlength="20" pattern="[A-Za-z\s]*" title="Solo se permiten letras"/>
                    </div>


                    <div class="mb-3">

                        <label for="" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="name" id="name"
                            aria-describedby="helpId" placeholder="Ingrese el nombre" value="{{ $user->name }}" minlength="4" maxlength="20" pattern="[A-Za-z\s]*" title="Solo se permiten letras"/>
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Descripción</label>
                        <input type="text" class="form-control" name="description" id="description"
                            aria-describedby="helpId" placeholder="Ingrese la descripcion"
                            value="{{ $user->description }}" minlength="8" maxlength="50" pattern="[A-Za-z\s]*" title="Solo se permiten letras"/>
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Precio</label>
                        <input type="number" class="form-control" name="price" id="price"
                            aria-describedby="helpId" placeholder="Ingrese el precio" value="{{ $user->price }}"  min="2000" max="100000"/>
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Imagen</label>
                        <input type="file" class="form-control" name="image" id="image"
                            aria-describedby="helpId" value="{{ $usert->image }}" />
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Confirmar</button>
                </div>

            </form>
        </div>
    </div>
</div>
