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