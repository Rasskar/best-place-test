require('./bootstrap');

document.addEventListener('click', function (e) {
   switch (e.target.className) {
       case 'btn btn-link js-button-edit':
           const hidenInputEditCategory = document.getElementById('editCategoryInput');
           const nameInputEditCategory = document.querySelector('.edit-name');
           const descriptionInputEditCategory = document.querySelector('.edit-description');

           let idEditCategory = e.target.attributes['data-category-id'].value;
           let nameEditCategory = e.target.attributes['data-category-name'].value;
           let descriptionEditCategory = e.target.attributes['data-category-description'].value;

           hidenInputEditCategory.value = idEditCategory;
           nameInputEditCategory.value = nameEditCategory;
           descriptionInputEditCategory.textContent = descriptionEditCategory;
           break;

       case 'btn btn-link js-button-delete':
           const hidenInputDeleteCategory = document.getElementById('deleteCategoryInput');
           let idDeleteCategory = (e.target.attributes['data-category-id'].value);
           hidenInputDeleteCategory.value = idDeleteCategory;
           break;

       case 'btn btn-primary js-button-edit-place':
           const hiddenInputEditPlace = document.getElementById('editPlaceInput');
           const nameInputEditPlace = document.querySelector('.edit-title');
           const commentInputEditPlace = document.querySelector('.edit-comment');
           const gradeInputEditPlace = document.querySelector('.edit-grade').getElementsByTagName('option');

           let idEditPlace = e.target.attributes['data-place-id'].value;
           let titleEditPlace = e.target.attributes['data-place-title'].value;
           let commentEditPlace = e.target.attributes['data-place-comment'].value;
           let gradeEditPlace = e.target.attributes['data-place-grade'].value;

           hiddenInputEditPlace.value = idEditPlace;
           nameInputEditPlace.value = titleEditPlace;
           commentInputEditPlace.textContent = commentEditPlace;

           for (let i = 0; i < gradeInputEditPlace.length; i++) {
               if (gradeInputEditPlace[i].value === gradeEditPlace) gradeInputEditPlace[i].selected = true;
           }
           break;

       case 'btn btn-primary js-button-delete-place':
           const hidenInputDeletePlace = document.getElementById('deletePlaceInput');
           let idDeletePlace = (e.target.attributes['data-place-id'].value);
           hidenInputDeletePlace.value = idDeletePlace;
           break;
   }
});

const buttonDeletePlace = document.querySelector('.js-delete-place');

if (buttonDeletePlace) {
    buttonDeletePlace.addEventListener('click', function () {
        let placeId = document.getElementById('deletePlaceInput').value;

        fetch('/api/place/delete/' + placeId, {
            method: "DELETE"
        }).then(res => res.json())
            .then(response => {
                if (response.status) {
                    location.reload();
                } else {
                    alert('Не удалось удалить!');
                }
            });
    });
}

const buttonDeleteCategory = document.querySelector('.button-delete-category');

if (buttonDeleteCategory) {
    buttonDeleteCategory.addEventListener('click', function () {
        let categoryId = document.getElementById('deleteCategoryInput').value;

        fetch('/api/category/delete/' + categoryId, {
            method: "DELETE"
        }).then(res => res.json())
            .then(response => {
                if (response.status) {
                    location.reload();
                } else {
                    alert('Не удалось удалить!');
                }
            });
    });
}
