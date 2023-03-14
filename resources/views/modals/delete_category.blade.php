<div class="modal fade" id="deleteCategory" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{__('Удаление')}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="deleteCategoryInput" name="id" value="">
                <div class="mb-3">
                    <p>{{__('Вы точно хотите удалить категорию?')}}</p>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn button-delete-category btn-primary">{{__('Удалить')}}</button>
                </div>
            </div>
        </div>
    </div>
</div>
