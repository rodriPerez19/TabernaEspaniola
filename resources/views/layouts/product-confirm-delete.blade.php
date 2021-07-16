<div class="modal fade" id="confirmar{{$product->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3>¿Estas seguro?</h3>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Una vez eliminado el producto no hay manera de volver a recuperlo. </p>
            </div>
            <div class="modal-footer">
                <a href="" type="button" class="btn btn-outline-secondary">Cancelar</a>
                <a href="{{ route('product.delete', array('id' => $product->id)) }}" class="btn btn-outline-danger">Eliminar</a>
            </div>
        </div>
    </div>
</div>
