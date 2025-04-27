const currentPath = window.location.pathname;
const rent= document.querySelector('.rent');
const sell = document.querySelector('sell');
const buy = document.querySelector('buy');
const find = document.querySelector('find');
const contact = document.querySelector('contact');
const login = document.querySelector('login');

if(currentPath.includes('rent-apartment.php')){
    rent.classList.add('active-link')
}
else if(currentPath.includes('sell-apartment.php')){
    sell.classList.add('active-link')
}
else if(currentPath.includes('buy-apartment.php')){
    buy.classList.add('active-link')
}
else if(currentPath.includes('find-apartment.php')){
    find.classList.add('active-link')
}
else if(currentPath.includes('contact-apartment.php')){
    contact.classList.add('active-link')
}
else if(currentPath.includes('login-apartment.php')){
    login.classList.add('active-link')
}