
// LOGOUT MODAL
var modal = document.getElementById('myModal');
var btn = document.getElementById('logoutBtn');
var modalButtonDiv = document.querySelector('.modalButton');
btn.onclick = function() {
modal.style.display = 'block';
};
window.onclick = function(event) {
if (event.target == modal) {
    modal.style.display = 'none';
}
};
modalButtonDiv.addEventListener('click', function(event) {
    if (event.target.id === 'cancelLogout') {
        modal.style.display = 'none';
    } else if (event.target.id === 'confirmLogout') {
        window.location.href = 'logout.php';
    }
});
// SIDE NAVIGATION
var modal = document.getElementById('myModal');
var btn = document.getElementById('logoutBtn2');
var modalButtonDiv = document.querySelector('.modalButton');
btn.onclick = function() {
modal.style.display = 'block';
};
window.onclick = function(event) {
if (event.target == modal) {
    modal.style.display = 'none';
}
};
modalButtonDiv.addEventListener('click', function(event) {
    if (event.target.id === 'cancelLogout') {
        modal.style.display = 'none';
    } else if (event.target.id === 'confirmLogout') {
        window.location.href = 'logout.php';
    }
});





