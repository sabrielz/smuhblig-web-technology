let navbarToggler = document.querySelector('.navbar .toggler')
let sidebar = document.querySelector('.sidebar')

navbarToggler.onclick = function() {
    let collapsed = !!sidebar.hidden
    sidebar.hidden = !collapsed
}




let buttonDelete = document.querySelector('.button.delete')

buttonDelete.onclick = function() {
    confirm('Apakah anda yakin untuk menghapus data ini?')
}