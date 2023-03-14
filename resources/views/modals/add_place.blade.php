<div class="modal fade" id="addPlace" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{__('Добавление')}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('addPlace')}}" method="POST" enctype="multipart/form-data" id="addPlaceForm">
                    @csrf
                    <input type="hidden" name="category_id" @isset($subCategoryId) value="{{$subCategoryId}}" @endisset>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">{{__('Наименование:')}}</label>
                        <input type="text" class="form-control " name="title" id="recipient-name">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">{{__('Комментарий:')}}</label>
                        <textarea class="form-control " name="comment" id="message-text"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">{{__('Изображение:')}}</label>
                        <input class="form-control" type="file" name="img" id="formFile">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">{{__('Оценка:')}}</label>
                        <select class="form-select " name="grade" form="addPlaceForm" aria-label="Default select example">
                            <option value="0" selected>0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn button-add-category btn-primary">{{__('Добавить')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
