let sidebar = document.querySelector('.sidebar');
let closeBtn = document.querySelector('#btn');
let searchBtn = document.querySelector('.bx-search');

closeBtn.addEventListener('click', () => {
    sidebar.classList.toggle('open');
    menuBtnChange(); //calling the function(optional)
});

searchBtn.addEventListener('click', () => { // Sidebar open when you click on the search iocn
    sidebar.classList.toggle('open');
    menuBtnChange(); //calling the function(optional)
});

// following are the code to change sidebar button(optional)
function menuBtnChange() {
    if (sidebar.classList.contains('open')) {
        closeBtn.classList.replace('bx-menu', 'bx-menu-alt-right'); //replacing the iocns class
    } else {
        closeBtn.classList.replace('bx-menu-alt-right', 'bx-menu'); //replacing the iocns class
    }
}

let usersVisible = false;

document.querySelector('.toggle-users').addEventListener('click', function() {
    const userListItems = document.querySelectorAll('.hidden');

    usersVisible = !usersVisible;

    userListItems.forEach(function(item) {
        if (usersVisible) {
            item.style.display = 'block';
        } else {
            item.style.display = 'none';
        }
    });
});

let productsVisible = false;

document.querySelector('.toggle-products').addEventListener('click', function() {
    const productItems = document.querySelectorAll('.hidden2');

    productsVisible = !productsVisible;

    productItems.forEach(function(item) {
        if (productsVisible) {
            item.style.display = 'block';
        } else {
            item.style.display = 'none';
        }
    });
});

///////MODAL////////
document.addEventListener("DOMContentLoaded", function () {
    // Obtén todos los botones que abren modales
    const showModalButtons = document.querySelectorAll(".show-modal-button");

    // Obtén todos los modales
    const customModals = document.querySelectorAll(".custom-modal");

    showModalButtons.forEach(function (showModalButton, index) {
        showModalButton.addEventListener("click", function () {
            // Muestra el modal correspondiente
            customModals[index].style.display = "block";
        });
    });

    // Agrega un controlador de eventos para cerrar todos los modales al hacer clic en el botón de cerrar
    const closeModalButtons = document.querySelectorAll(".close-modal-button");
    closeModalButtons.forEach(function (closeModalButton) {
        closeModalButton.addEventListener("click", function () {
            customModals.forEach(function (customModal) {
                customModal.style.display = "none";
            });
        });
    });
});