const sidebar = document.querySelector('.sidebar');
const navItems = document.querySelectorAll('nav .nav-item');
const toggle = document.querySelector('.sidebar .toggle');
const container = document.querySelector('.container');

toggle.addEventListener('click', () => {

    if (sidebar.className === 'sidebar'){
        sidebar.classList.add('open');
        container.classList.add('container-closed');
    }
    else{
        sidebar.classList.remove('open');
        container.classList.add('container-open');
        container.classList.remove('container-closed');
    }
});

navItems.forEach(navItem => {

    navItem.addEventListener('click', () => {
        navItems.forEach(navItem => {
            navItem.classList.remove('active');
        });
        navItem.classList.add('active');
    });

});
