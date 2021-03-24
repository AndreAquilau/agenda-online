document.querySelector('#open')
.addEventListener('click', (e) => {
  const popup = document.querySelector('#popup');
  const pop = document.querySelector('#pop');
  console.log('vesible element');
  popup.style.display = 'block';
  pop.style.display = 'block'
});


document.querySelector('#close')
.addEventListener('click', (e) => {
  const popup = document.querySelector('#popup');
  const pop = document.querySelector('#pop');
  console.log('desible element');
  popup.style.display = 'none';
  pop.style.display = 'none'
});
