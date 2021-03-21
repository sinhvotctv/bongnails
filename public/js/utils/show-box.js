export const showBox= (buttonOpen,box,buttonClose)=>{
  const boxCenter = document.querySelector("." + box);
  
  const buttonOpenBox = document.querySelectorAll("." + buttonOpen);
  const buttonCloseBox = document.querySelectorAll("." + buttonClose);
  const confirmButton = document.querySelector('.confirm-button');
  // const layer = document.querySelector(".layer");

  buttonOpenBox.forEach(button => {
    button.addEventListener('click', e => {
      e.preventDefault();
      boxCenter.classList.remove('none');
      // layer.classList.remove('none');
    });
  });

  buttonCloseBox.forEach(button => {
    button.addEventListener('click', e => {
      e.preventDefault();
      boxCenter.classList.add('none');
      // layer.classList.add('none');
    });
  });

  addEventListener("keydown", e => {
    if(e.key === "Escape"){
      boxCenter.classList.add('none');
      // layer.classList.add('none');
    }
  });
  confirmButton.addEventListener('click', e => {
    boxCenter.classList.add('none');
  });
}