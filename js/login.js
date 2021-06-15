/*Connections for login*/

document.getElementById('btn1').addEventListener('click', function(){
    document.querySelector('.lg-modal').style.display = 'flex';
});

document.querySelector('.close').addEventListener('click', function(){
    document.querySelector('.lg-modal').style.display = 'none';
});