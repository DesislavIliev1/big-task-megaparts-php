document.addEventListener("DOMContentLoaded", function () {

  setTimeout(() => {

    const ots = document.getElementById("nav-1");
    ots.style.visibility = 'visible'
  }, 2050)

  setTimeout(() => {
    const backg = document.getElementById("back");

    backg.style.visibility = 'visible'
  }, 2050)

  setTimeout(() => {
    const backg = document.getElementById("highlights");

    backg.style.visibility = 'visible'
  }, 2050)


  gsap.registerPlugin(ScrollTrigger);

  gsap.fromTo(".card-p-1", {
    visibility: "hidden",
    x: -100,
    ease: "linear",
    duration: 1
  },
    {
      visibility: "visible",
      x: 0,


      scrollTrigger: {
        trigger: ".product-slider-1",
        start: "top 40%",
        // toggleActions:"play restart restart reverse"
      }

    });


  gsap.fromTo(".carousel-1", {
    visibility: "hidden",
    x: 100,
    ease: "linear",
    duration: 1
  },
    {
      visibility: "visible",
      x: 0,


      scrollTrigger: {
        trigger: ".product-slider-1",
        start: "top 40%",
        // toggleActions:"play restart restart reverse"
      }

    });


    gsap.fromTo(".carousel-2", {
      visibility: "hidden",
      x: -100,
      ease: "linear",
      duration: 1
    },
      {
        visibility: "visible",
        x: 0,
  
  
        scrollTrigger: {
          trigger: ".product-slider-2",
          start: "top 40%",
          // toggleActions:"play restart restart reverse"
        }
  
      });

      gsap.fromTo(".card-p-2", {
        visibility: "hidden",
        x: 100,
        ease: "linear",
        duration: 1
      },
        {
          visibility: "visible",
          x: 0,
    
    
          scrollTrigger: {
            trigger: ".product-slider-2",
            start: "top 40%",
            // toggleActions:"play restart restart reverse"
          }
    
        });


      gsap.fromTo(".slide-right-1", {
        visibility: "hidden",
        x: -100,
        ease: "linear",
        duration: 1
      },
        {
          visibility: "visible",
          x: 0,
    
    
          scrollTrigger: {
            trigger: ".services",
            start: "top 40%",
            // toggleActions:"play restart restart reverse"
          }
    
        });


        gsap.fromTo(".slide-left-1", {
          visibility: "hidden",
          x: 100,
          ease: "linear",
          duration: 1
        },
          {
            visibility: "visible",
            x: -20,
            x:0,
      
      
            scrollTrigger: {
              trigger: ".services",
              start: "top 40%",
              // toggleActions:"play restart restart reverse"
            }
      
          });


          gsap.fromTo(".slide-right-2", {
            visibility: "hidden",
            x: -100,
            ease: "linear",
            duration: 1
          },
            {
              visibility: "visible",
              x: -20,
              x:0,
        
        
              scrollTrigger: {
                trigger: ".services-2",
                start: "top 40%",
                // toggleActions:"play restart restart reverse"
              }
        
            });


            gsap.fromTo(".slide-left-2", {
              visibility: "hidden",
              x: 100,
              ease: "linear",
              duration: 1
            },
              {
                visibility: "visible",
                x: -20,
                x:0,
          
          
                scrollTrigger: {
                  trigger: ".services-2",
                  start: "top 40%",
                  // toggleActions:"play restart restart reverse"
                }
          
              });


              gsap.fromTo(".products", {
                visibility: "hidden",
                x: 100,
                ease: "linear",
                duration: 1
              },
                {
                  visibility: "visible",
                  x: 0,
            
            
                  scrollTrigger: {
                    trigger: ".products",
                    start: "top 40%",
                    // toggleActions:"play restart restart reverse"
                  }
            
                });

  gsap.registerPlugin(ScrollTrigger);



})





