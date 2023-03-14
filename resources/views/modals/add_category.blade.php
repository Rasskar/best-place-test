
<div class="modal fade" id="addCategory" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{__('Добавление')}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('addCategory')}}" method="POST" enctype="multipart/form-data" name="addCategory">
                    @csrf
                    <input type="hidden" name="parent_id" @isset($categoryId) value="{{$categoryId}}" @endisset>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">{{__('Наименование:')}}</label>
                        <input type="text" class="form-control" name="name" id="recipient-name">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">{{__('Описание:')}}</label>
                        <textarea class="form-control" name="description" id="message-text"></textarea>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn button-add-category btn-primary">{{__('Добавить')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
