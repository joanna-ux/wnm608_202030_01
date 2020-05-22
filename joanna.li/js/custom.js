$(document).ready(function() {
    //add cart
    // $(".js-addtocart").on("click",function(e){
    //     console.log("hey")
    //     var cart_amount = $(".cart-value a span").html();
    //     $(".cart-value a span").html(++cart_amount);
    // })
    //Price add
    // $(".change-amount").on("input",function(e){
    //     console.log("hey")
    //     var price = +$(this).next().html();
    //     var newtotal = price;
    //     $(this).next().next().html(newtotal.toFixed(2));
    //     var totaltotal = 0;
    //     $(".total").each(function(){
    //         totaltotal += +$(this).html();
    //     })
    //     $(".total-total").html(totaltotal.toFixed(2));
    // })
    // carousel plugin
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:16,
        nav:true,
        navText:[],
        dots: false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    })
});
