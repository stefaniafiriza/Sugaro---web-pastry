document.getElementById('offer1').addEventListener('click', function(){
    document.querySelector('.offer-modal').style.display = 'flex';
});

document.querySelector('.close-offer').addEventListener('click', function(){
    document.querySelector('.offer-modal').style.display = 'none';
});
