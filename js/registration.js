/*Connections for registration*/

document.getElementById('btn2').addEventListener('click',function(){
    document.querySelector('.reg-modal').style.display = 'flex';
});

document.querySelector('.close-reg').addEventListener('click',function(){
    document.querySelector('.reg-modal').style.display = 'none';
});