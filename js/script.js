



let menu = document.querySelector('#menu-bars');
let navbar = document.querySelector('.navbar');

menu.onclick = () =>{
  menu.classList.toggle('fa-times');
  navbar.classList.toggle('active');
}

let section = document.querySelectorAll('section');
let navLinks = document.querySelectorAll('header .navbar a');

window.onscroll = () =>{

  menu.classList.remove('fa-times');
  navbar.classList.remove('active');

  section.forEach(sec =>{

    let top = window.scrollY;
    let height = sec.offsetHeight;
    let offset = sec.offsetTop - 150;
    let id = sec.getAttribute('id');

    if(top >= offset && top < offset + height){
      navLinks.forEach(links =>{
        links.classList.remove('active');
        document.querySelector('header .navbar a[href*='+id+']').classList.add('active');
      });
    };

  });

}

// document.querySelector('#search-icon').onclick = () =>{
//   document.querySelector('#search-form').classList.toggle('active');
// }

document.querySelector('#close').onclick = () =>{
  document.querySelector('#search-form').classList.remove('active');
}

// var swiper = new Swiper(".home-slider", {
//   spaceBetween: 30,
//   centeredSlides: true,
//   autoplay: {
//     delay: 7500,
//     disableOnInteraction: false,
//   },
//   pagination: {
//     el: ".swiper-pagination",
//     clickable: true,
//   },
//   loop:true,
// });

var swiper = new Swiper(".review-slider", {
  spaceBetween: 20,
  centeredSlides: true,
  autoplay: {
    delay: 7500,
    disableOnInteraction: false,
  },
  loop:true,
  breakpoints: {
    0: {
        slidesPerView: 1,
    },
    640: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});

// function loader(){
//   document.querySelector('.loader-container').classList.add('fade-out');
// }

// function fadeOut(){
//   setInterval(loader, 3000);
// }
let mainBtn = document.querySelectorAll(".main-btn")
for (let i = 0; i < mainBtn.length; i++) {
  let currentBtn = mainBtn[i]
  currentBtn.onclick = () => {
    let icon = document.querySelector(".icons a")
    icon.classList.add("hover-extension")

    setTimeout(() => {
      icon.classList.remove("hover-extension")
    }, 400)


    let heading = document.querySelector('.box h3')
    let innerText = heading.textContent


    //  if(icon.classList.contains === "hover-extension"){
    //    icon.style.= "red"

    //  }

  }

}

//working on the form

document.querySelector(".btn--submit").addEventListener('click', function validateForm() {
  let inputBoxs = document.querySelectorAll(".inputBox .input input")
  let textArea = document.querySelectorAll(".inputBox .input textarea")
  for (let i = 0; i < textArea.length; i++) {
    if (textArea[i].value == '') {

      textArea[i].classList.add("red--box")

      setTimeout(() => {
        textArea[i].classList.remove("red--box")
      }, 2000)
    }
  }

  for (let i = 0; i < inputBoxs.length; i++) {
    if (inputBoxs[i].value == '') {

      inputBoxs[i].classList.add("red--box")

      setTimeout(() => {
        inputBoxs[i].classList.remove("red--box")
        let numberValues = document.querySelectorAll(".numberValue")
        
        for (let i = 0; i < numberValues.length; i++) {
          
            numberValues[i].value = ''
            numberValues[i].style.color='black'
            
          
        }
      }, 2000)
    }
  }

  validateCreditCard();
}
)

function validateCreditCard() {
  //  let  creditCardNumber = document.querySelector(".credit--card")

  let numberValues = document.querySelectorAll(".numberValue")

  for (let i = 0; i < numberValues.length; i++) {
    if (isNaN(numberValues[i].value)) {
      numberValues[i].value = "!!This field should be a number"
      numberValues[i].style.color = 'red'
    }

  }
}



