new Swiper('.swiper-container',{
    slidesPerView: 3.7,
    spacebetween: 10,

    scrollbar:{
        el:".swiper-scrollbar",
        draggable: true
    },
    
        breakpoints: 
        {190:
            {
            slidesPerView: 1.8},
            320:{
                slidesPerView: 1.8  
            },
            330:{
                slidesPerView: 2.5  
            },
            992:{
                slidesPerView: 3.7 
            },
        }    
}); 
