<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Eliminar</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="id" id="category_id">
                Tem certeza de que deseja apagar este item ? </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

                <form id="deleteForm" method="get" action="{{ url('admin/pagamentos/delete/') }}">
                    @csrf

                    <input type="hidden" id="deleteUserId" name="userId" value="">
                    <button type="submit" class="btn btn-danger">Apagar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.id-modal-trigger').click(function() {
            var userId = $(this).data('id');
            $('#selectedUserId').text(userId);
            $('#deleteUserId').val(userId);
            $('#deleteForm').attr('action', '{{ url('admin/pagamentos/delete/') }}/' + userId);
        });
    });
</script>
