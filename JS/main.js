let drop = document.getElementById("kvant");
let triangle = document.getElementById("triangle");
let list = document.getElementById("dropdown-content").getElementsByTagName('a');
let list_lenght = list.length;


//Полученте значения из выпадающего меню

let it = document.getElementById('it');
let aero = document.getElementById('aero');
let auto = document.getElementById('auto');
let laser = document.getElementById('laser');
let bio = document.getElementById('bio');
let robo = document.getElementById('robo');
let energy = document.getElementById('energy');




it.addEventListener('click', function() {
    drop.innerText = it.innerHTML;
    triangle.style.display = 'none';
});

aero.addEventListener('click', function() {
    drop.innerText = aero.innerHTML;
    triangle.style.display = 'none';
});

auto.addEventListener('click', function() {
    drop.innerText = auto.innerHTML;
    triangle.style.display = 'none';
});

laser.addEventListener('click', function() {
    drop.innerText = laser.innerHTML;
    triangle.style.display = 'none';
});

bio.addEventListener('click', function() {
    drop.innerText = bio.innerHTML;
    triangle.style.display = 'none';
});

robo.addEventListener('click', function() {
    drop.innerText = robo.innerHTML;
    triangle.style.display = 'none';
});

energy.addEventListener('click', function() {
    drop.innerText = energy.innerHTML;
    triangle.style.display = 'none';
});