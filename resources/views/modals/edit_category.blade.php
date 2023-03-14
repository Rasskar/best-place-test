<div class="modal fade" id="editCategory" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{__('Редактирование')}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('editCategory')}}" method="POST" enctype="multipart/form-data" name="editCategory">
                    @csrf

                    <input type="hidden" id="editCategoryInput" name="id" value="">
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">{{__('Категория:')}}</label>
                        <input type="text" name="name" class="form-control edit-name" id="recipient-name">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">{{__('Описание:')}}</label>
                        <textarea class="form-control edit-description" name="description" id="message-text"></textarea>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn button-add-category btn-primary">{{__('Сохранить')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
