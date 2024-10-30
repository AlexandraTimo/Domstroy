
gsap.fromTo('.preloader__row img',{
   opacity:0,scale:0 },
    { opacity:1,scale:1,
      
    },0.8),

    gsap.fromTo('.Title_preloader',{
      opacity:0,y:300, duration:1,},
       {opacity:1,y:0,
         
       },1.7),
   
       gsap.fromTo('.Title2_preloader',{
         opacity:0,y:300, },
          { opacity:1,y:0,
            
          },1.9),
      

ScrollTrigger.matchMedia({
"(min-width:1200px)": function() {


// First Section
const mySplit = new SplitType('#myText')
gsap.to('.char',{
    y:0,
    stagger:0.10,
    delay:0.2,
    duration:.1,
},2.0
)

gsap.fromTo('.first_wrapper .fw__1Text span',{
    opacity:0,    
 },
 {
 opacity:1,
 duration:1,
 }, 2.8,
 // 1.5 - время через сколько начнется анимация от начала timeline
 // т.е чем меньше время тем раньше начнется анимация
 ),
 gsap.fromTo('.button_container .butt',{
     y:-100,
     opacity:0,   
 },
 {
     y:0,
 opacity:1,
 duration:1,
 stagger:0.30,
 // stagger:0.30- шаги через сколько идет анимация li
 }, 3,
 // 1.5 - время через сколько начнется анимация от начала timeline
 // т.е чем меньше время тем раньше начнется анимация
 )

// Второй блок

gsap.fromTo('.sw__1_text h2',{
    opacity:0,x:20},
     {duration: 1,opacity:1,x:0,
      scrollTrigger:{
         trigger:'.Second_section',
        //  markers:true,
         start:'-20px center',
         end:'+=400px',
         scrub:true,
      }
    })
 gsap.fromTo('.sw__1',{
    opacity:0,scale:0 },
     {duration: 0.3,opacity:1,scale:1,

      scrollTrigger:{
         trigger:'.Second_section',
        //  markers:true,
         start:'top bottom',
         end:'+=800px',
         scrub:true,
      }
    })

    gsap.fromTo('.sw__1_text p',{
        x:50,
     opacity:0,    },
         { x:0,
            opacity:1,
            duration:1,
            delay:0.5,
            stagger:0.20,
    
          scrollTrigger:{
             trigger:'.Second_section',
            //  markers:true,
             start:'top center',
             end:'+=400px',
             scrub:true,
          }
        })
    

//  3 блок
gsap.fromTo('.third_wrapper h2',{
    x:-150,
 opacity:0,    },
     { x:0,
        opacity:1,
        duration:1,

      scrollTrigger:{
         trigger:'.Third_section',
        //  markers:true,
         start:'-60% center',
         end:'+=600px',
         scrub:true,
      }
    })

    gsap.fromTo('.tabs__container li',{
        y:100,
     opacity:0,    },
         { y:0,
            opacity:1,
            duration:.2,
            stagger:0.10,
    
          scrollTrigger:{
             trigger:'.Third_section',
            //  markers:true,
             start:'-50% center',
             end:'+=400px',
             scrub:true,
           
          }
        })
        gsap.fromTo('.third_wrapper .butt_1',{
           scale:0,opacity:0    },
             {  duration:1,scale:1,opacity:1,  
              scrollTrigger:{
                 trigger:'.Third_section',
               //   markers:true,
                 start:'20% center',
                 end:'+=250px',
                 scrub:true,
               
              }
            })
    


// 4 блок
gsap.fromTo('.fourth__wrapper h1',{
   x:150,
opacity:0,    },
    { x:0,
       opacity:1,
       duration:1,

     scrollTrigger:{
        trigger:'.Fourth_section',
      //   markers:true,
        start:'-40% center',
        end:'+=700px',
        scrub:true,
     }
   })

   gsap.fromTo('#tabs_tabs .item',{
   x:50,
   opacity:0,    },
       { x:0,
          opacity:1,
          delay:1,
          stagger:0.50,
  
        scrollTrigger:{
           trigger:'.Fourth_section',
         //   markers:true,
           start:'-10% center',
           end:'+=200px',
           scrub:true,
        }
      })

      // 5 блок наша команда

      gsap.fromTo('.fifth_wrapper h1',{
         x:-150,
      opacity:0,    },
          { x:0,
             opacity:1,
             duration:1,
      
           scrollTrigger:{
              trigger:'.Fifth_section',
            //   markers:true,
              start:'-40% center',
              end:'+=400px',
              scrub:true,
           }
         })
         gsap.fromTo('.ourTeam__wrap_second p',{
            y:100,
            opacity:0,    },
                { y:0,
                   opacity:1,
                   delay:1,
                   stagger:0.30,
                   duration:2,
           
                 scrollTrigger:{
                    trigger:'.Fifth_section',
                  //   markers:true,
                    start:'5% center',
                    end:'+=400px',
                    scrub:true,
                 }
               })
         
               // 6 блок
               gsap.fromTo('.six_wrapper h1',{
                  x:-150,
               opacity:0,    },
                   { x:0,
                      opacity:1,
                      duration:1,
               
                    scrollTrigger:{
                       trigger:'.Six_section',
                     //   markers:true,
                       start:'-30% center',
                       end:'+=200px',
                       scrub:true,
                    }
                  })

                  // 7 блок записаться на услугу

                  gsap.fromTo('.seven_wrapper h1',{
                     x:-150,
                  opacity:0,    },
                      { x:0,
                         opacity:1,
                         duration:1,
                  
                       scrollTrigger:{
                          trigger:'.Seven_section',
                        //   markers:true,
                          start:'-10% center',
                          end:'+=400px',
                          scrub:true,
                       }
                     })  

                  //  8 блок контакты
                  gsap.fromTo('.eight_wrapper h1',{
                     x:-150,
                  opacity:0,    },
                      { x:0,
                         opacity:1,
                         duration:1,
                  
                       scrollTrigger:{
                          trigger:'.Eight_section',
                        //   markers:true,
                          start:'-30% center',
                          end:'+=200px',
                          scrub:true,
                       }
                     })  

                     gsap.fromTo('.eight__eight_flex_Text span',{
                        y:100,
                     opacity:0,    },
                         { y:0,
                            opacity:1,
                            duration:.2,
                            stagger:0.10,
                    
                          scrollTrigger:{
                             trigger:'.Eight_section ',
                           //   markers:true,
                             start:'10% center',
                             end:'+=200px',
                             scrub:true,
                           
                          }
                        })

                   





}



});







                        