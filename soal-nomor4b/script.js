let btnDelete = document.querySelectorAll('.btn_delete-onImg');

function deleteData() {
    for (let i = 0; i <  btnDelete.length; i++) {
        btnDelete[i].classList.toggle('active');
    }
}