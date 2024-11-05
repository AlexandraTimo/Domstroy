let swiper = new Swiper(".mySwiper", {
  pagination: {
    el: ".swiper-pagination",
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});


let swiper2 = new Swiper('.mySwiper2', {
  slidesPerView:1,
  spaceBetween:32,

  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
loop:true,
  breakpoints:{
320:{
  slidesPerView:1,
},
768:{
  slidesPerView:2,
  spaceBetween:10,
},
1200:{

  slidesPerView:4,
  spaceBetween:10,
}
  }
});


let swiper3 = new Swiper('.mySwiper3', {
  slidesPerView:1,
  spaceBetween:32,

  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
loop:true,
  breakpoints:{
320:{
  slidesPerView:1,
},
768:{
  slidesPerView:2,
  spaceBetween:10,
},
1200:{

  slidesPerView:4,
  spaceBetween:10,
}
  }
});


let swiper4 = new Swiper('.mySwiper4', {
  slidesPerView:1,
  spaceBetween:16,

  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
loop:true,
  breakpoints:{
320:{
  slidesPerView:2,
},
768:{
  slidesPerView:3,
  spaceBetween:23,
},
1200:{

  slidesPerView:4,
  spaceBetween:23,
}
  }
});
