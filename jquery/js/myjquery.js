$(document).ready(function () {
  //your jquery code here
  console.log("we are using jquery");
  // $('selector').action() //jquery syntax
  $("p").click(); //click on p
  // $("p").click(function () {
  //   console.log("you clicked on p");
  // //   $(this).hide();
  // //    $('#id').hide();
  // //    $('.class').hide();
  // }); //do this when we click on p
  // console.log("dharmik is in the new file");

  //events in jquery
  // mouse events = click, doubleclick, mouseenter, mouseleave
  // key events = keydown, keyup, keypress
  // form events = submit, change, focus, blur
  // document/window events = load, resize, scroll, unload
  // console.log("hello");

  // $('p').dblclick(function(){
  //     console.log("you double clicked on it", this);
  // });

  // $("p").mouseenter(function () {
  //     console.log("you you entered on mouse", this);
  //   //   $(this).hide();
  //   //    $('#id').hide();
  //   //    $('.class').hide();
  //   });

  //   $("p").hover(function () {
  //     console.log("you hovered on", this);
  //   //   $(this).hide();
  //   //    $('#id').hide();
  //   //    $('.class').hide();
  //   });

  //domoing on method
  // $("p").on({
  //   click: function () {
  //     console.log("you clicked on p thanks", this);
  //   },
  //   mouseleave: function () {
  //     console.log("you left the p", this);
  //   },

  //   dblclick: function () {
  //     console.log("you  double clicked on p thanks", this);
  //   },

  //   hover: function () {
  //     console.log("you hovered on p thanks", this);
  //   },
  // });

  //   $("#wikipidia").hide(9000, function(){
  //     console.log("wikipedia is hidden");
  //   });
  //   $("#wikipidia").show(9000, function(){
  //     console.log("wikipedia is shown");
  //   });

  //   $('#but').click(function(){
  //     $('#wikipidia').toggle(5000);
  //   })
  //   $("#but").click(function () {
  //     $("#wikipidia").fadeOut(3000);
  //   });

  //fadeIn()
  //fadeOut()
  //fadeToggle()
  //fadeTo()

  //slide methods - speed and callback parameters are optional
  //   $("#wikipidia").slideUp(1000);
  //   $("#wikipidia").slideUp(1000);
  //   $("#wikipidia").slideToggle(1000);
  //   $("#wikipidia").slideDown(1000);

  //animate function in jquery
  //   $("#wikipidia").animate({
  //      opacity: 0.3,
  //      height: '150px',
  //      width: '150px',

  //     }, 3000);
  //   $("#wikipidia").animate(
  //     {
  //       opacity: 0.3,
  //       height: "150px",
  //       width: "150px",
  //     },
  //     "slow"
  //   ); //in place of time we can use slow and fast

  //   $("#wikipidia").animate({opacity: 0.3}, 3000);
  //   $("#wikipidia").animate({opacity: 0.4}, 12000);
  //   $("#wikipidia").animate({height: '300px'}, 3000);
  //   $("#wikipidia").animate({width: '300px'}, 12000);

  //to get the value of the element use val() function for form elements
  //$('#wikipidia').val();
  //we can set it as something else also
  //$('#wikipidia').val('something');

  //for non-form elemnts
  //   $('#wikipidia').text('something');

  //to empty some tag we can use empty function
  //$('#wikipidia').empty();

  //to completely remove the element
  //   $('#wikipidia').remove();

  //to add or change the css
  //   $('#wikipidia').css('background-color', 'red');

  //ajax load method
  // $("#but").click(function () {
  // $('#wikipidia').load("demo_data.txt");
  // $('#wikipidia').load("demo_data.txt #p1");

  //ajax get method
  // $.get('demo_test.asp', function (data , status){
  //   alert("data : " + data + " status : " + status);
  // })

  //ajax post method
  // $.post('demo_data.txt', {
  //   name: 'John',
  //   city : 'suart',
  // }, function(data, status) {
  //   alert ("data : " + data + "status" + status);
  // })
  // });

  //ajax using jquery
  // to get the data from the another website
  //$.get('https://code.jquery.com/jquery-3.7.1.js', function(data, status){alert(data);});

  //to some data on another website
  //$.post('https://code.jquery.com/jquery-3.7.1.js',{name: 'dharmik', channel: 'dhamik ki channel'},function(data, status){alert(status);});
});

//there are three main type of selectors in jquery
//1. id selector --> $('#id').hide();//works on specific id element
//2. class selector --> $('.class').hide();// works on specific class elements
//3. element selector --> $('p').action();//works on all p elements

//other selectors
// $("*").clicks; //clicks on all the elements
// $("p.odd").clicks; //clicks on odd p elements
// $("p:first").clicks; //clicks on first p elements

//dynamic content events are same that we use in ajax to get the data from the another website using the our ajax and jquery code 
