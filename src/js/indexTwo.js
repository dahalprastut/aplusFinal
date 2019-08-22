document.querySelector('.second-down-lists').addEventListener('click', ()=>{
    document.querySelector('nav').classList.toggle('mobile-nav');
    
});

const navigation = document.querySelector('nav');
var headingHeader = document.querySelectorAll('.heading-header');
var hideHidden = document.querySelectorAll('.hide-hidden');
var showHidden = document.querySelectorAll('.show-hidden');
var hiddenStep = document.querySelectorAll('.hidden-step');
var headingHeaderArray = Array.prototype.slice.call(headingHeader);
var show = 0;


// this click start

headingHeaderArray.map((data,index)=>{

    data.addEventListener('click',()=>{
        if(show == 0){

            hiddenStep[index].style.display='block';
                hideHidden[index].style.display='block';
                showHidden[index].style.display='none';
                headingHeader[index].style.background = '#0776b2';
                show = !show;
        }
        else{
            hiddenStep[index].style.display='none';
            hideHidden[index].style.display='none';
                showHidden[index].style.display='block';
                headingHeader[index].style.background = '#2E2E2E';
                
                show= !show;
        }


    })
});

// this click ends



// filter start
$(document).ready(function(){
    $('.category-item').click(function(){
        var category = $(this).attr('id');
        if(category == 'all'){
            $('.outer-sell-item').removeClass('hide-sell');
        }
        else{
            $('.outer-sell-item').addClass('hide-sell');
            $('.' + category).removeClass('hide-sell');
        }

        var btnContainer = $(".category-container");
        var btns = $(".category-item");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function(){
                var current = document.getElementsByClassName(" act");
                current[0].className = current[0].className.replace(" act", " ");
                this.className += " act";
            });
        }
     });
});


// filter ends

// navigation fixed

window.addEventListener('scroll', ()=>{

    if(scrollY >= 42){
        navigation.classList.add('scrolledNav');
    }else{
        
        navigation.classList.remove('scrolledNav');
    }

})

// navigation fixed ends



