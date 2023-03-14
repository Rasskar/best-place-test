<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">

    <title>Best Place</title>
</head>
<body>

<section class="header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Категории</h1>
                <button class="btn add-category btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#addCategory" type="submit">Добавить категорию</button>
            </div>
        </div>
    </div>
</section>

<section class="category">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="card text-center" style="width: 20rem;">
                    <div class="card-body">
                        <h5 class="card-title">Особое обращение с заголовком</h5>
                        <p class="card-text">С вспомогательным текстом ниже в качестве естественного перехода к дополнительному контенту.</p>
                        <a href="#" class="btn btn-primary">Подробнее...</a>
                        <div class="button-container">
                            <button type="button" data-bs-toggle="modal" data-bs-target="#editCategory" class="btn btn-link">Редактировать</button>
                            <button type="button" data-bs-toggle="modal" data-bs-target="#deleteCategory" class="btn btn-link">Удалить</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="card text-center" style="width: 20rem;">
                    <div class="card-body">
                        <h5 class="card-title">Особое обращение с заголовком</h5>
                        <p class="card-text">С вспомогательным текстом ниже в качестве естественного перехода к дополнительному контенту.</p>
                        <a href="#" class="btn btn-primary">Подробнее...</a>
                        <div class="button-container">
                            <button type="button" data-bs-toggle="modal" data-bs-target="#editCategory" class="btn btn-link">Редактировать</button>
                            <button type="button" data-bs-toggle="modal" data-bs-target="#deleteCategory" class="btn btn-link">Удалить</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="card text-center" style="width: 20rem;">
                    <div class="card-body">
                        <h5 class="card-title">Особое обращение с заголовком</h5>
                        <p class="card-text">С вспомогательным текстом ниже в качестве естественного перехода к дополнительному контенту.</p>
                        <a href="#" class="btn btn-primary">Подробнее...</a>
                        <div class="button-container">
                            <button type="button" data-bs-toggle="modal" data-bs-target="#editCategory" class="btn btn-link">Редактировать</button>
                            <button type="button" data-bs-toggle="modal" data-bs-target="#deleteCategory" class="btn btn-link">Удалить</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="card text-center" style="width: 20rem;">
                    <div class="card-body">
                        <h5 class="card-title">Особое обращение с заголовком</h5>
                        <p class="card-text">С вспомогательным текстом ниже в качестве естественного перехода к дополнительному контенту.</p>
                        <a href="#" class="btn btn-primary">Подробнее...</a>
                        <div class="button-container">
                            <button type="button" data-bs-toggle="modal" data-bs-target="#editCategory" class="btn btn-link">Редактировать</button>
                            <button type="button" data-bs-toggle="modal" data-bs-target="#deleteCategory" class="btn btn-link">Удалить</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="card text-center" style="width: 20rem;">
                    <div class="card-body">
                        <h5 class="card-title">Особое обращение с заголовком</h5>
                        <p class="card-text">С вспомогательным текстом ниже в качестве естественного перехода к дополнительному контенту.</p>
                        <a href="#" class="btn btn-primary">Подробнее...</a>
                        <div class="button-container">
                            <button type="button" data-bs-toggle="modal" data-bs-target="#editCategory" class="btn btn-link">Редактировать</button>
                            <button type="button" data-bs-toggle="modal" data-bs-target="#deleteCategory" class="btn btn-link">Удалить</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="card text-center" style="width: 20rem;">
                    <div class="card-body">
                        <h5 class="card-title">Особое обращение с заголовком</h5>
                        <p class="card-text">С вспомогательным текстом ниже в качестве естественного перехода к дополнительному контенту.</p>
                        <a href="#" class="btn btn-primary">Подробнее...</a>
                        <div class="button-container">
                            <button type="button" data-bs-toggle="modal" data-bs-target="#editCategory" class="btn btn-link">Редактировать</button>
                            <button type="button" data-bs-toggle="modal" data-bs-target="#deleteCategory" class="btn btn-link">Удалить</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="addCategory" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Добавление категории</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Категория:</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Описание:</label>
                        <textarea class="form-control" id="message-text"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Добавить</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editCategory" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Редактирование категории</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Категория:</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Описание:</label>
                        <textarea class="form-control" id="message-text"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Сохранить</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteCategory" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Удаление категории</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Вы точно хотите удалить категорию?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Удалить</button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
