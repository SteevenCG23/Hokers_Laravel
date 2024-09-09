<div class="modal fade" id="delete{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 text-dark" id="exampleModalLabel">Eliminar producto</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('index.destroy', $product->id) }}" method="post">
                @csrf
                @method('DELETE')
                @if (Session::has('mensaje_delete'))
                    <script>
                        swal("Producto eliminado con éxito", "{{ Session::get('mensaje') }}", 'success', {


                            timer: 3000,

                        });
                    </script>
                @endif
                <div class="modal-body">
                    ¿Estás seguro de eliminar <strong>{{ $product->name }}?</strong>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Confirmar</button>
                </div>
            </form>
        </div>

    </div>
</div>
