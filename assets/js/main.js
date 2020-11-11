$(".navTrigger").click(function () {
  $(this).toggleClass("active");
  console.log("Clicked menu");
  $("#mainListDiv").toggleClass("show_list");
  $("#mainListDiv").fadeIn();
});

$(".navTrigger").click(function () {
  console.log("Clicked menu");
  $("#nav").toggleClass("background_black");
  $("#nav").fadeIn();
});

var nav = document.getElementById("blackblock");
var nav2 = document.getElementById("mainListDiv");
var nav3 = document.getElementsByClassName("burger");
var nav4 = document.getElementsByClassName("logo");
var showlist = document.getElementById("show_list2");
window.onclick = function (event) {
  if (document.getElementsByClassName("show_list2") != "") {
    if (event.target == nav) {
      $("#mainListDiv2").removeClass("show_list2");
      $(".burger").removeClass("active");
      $("#nav").removeClass("black_back");
      $("#mainListDiv2").fadeOut();
      $("#nav.black_back").fadeOut();
      $("#dropdown-content").fadeOut("show_login");

      i = 0;
    }
  }
};

var i;
$(".burger").click(function () {
  $(".burger").toggleClass("active");

  if (i == 1) {
    $("#mainListDiv2").toggleClass("show_list2");
    $("#nav").removeClass("black_back");
    $("#mainListDiv2").fadeOut();
    $("#nav.black_back").fadeOut();
    $("#dropdown-content").fadeOut("show_login");
    console.log("Menü geschloßen");
    i = 0;
  } else {
    $("#mainListDiv2").toggleClass("show_list2");
    $("#nav").addClass("black_back");
    $("#mainListDiv2").fadeIn();
    $("#nav.black_back").fadeIn();
    console.log("Menü geöffnet");
    i = 1;
  }
});

$(".openmenu").click(function () {
  $(".burger").addClass("active");

  $("#mainListDiv2").addClass("show_list2");
  $("#nav").addClass("black_back");
  $("#mainListDiv2").fadeIn();
  i = 1;
});

$(".openlogin").click(function () {
  $(".burger").addClass("active");

  $("#mainListDiv2").addClass("show_list2");
  $("#nav").addClass("black_back");
  $(".dropdown-content").fadeIn("show_login");
  $("#mainListDiv2").fadeIn();
  i = 1;
});


function remove() {
  $("#nav").removeClass("black_back");
  $("#mainListDiv").removeClass("show_list");
  $("#mainListDiv2").removeClass("show_list2");
  $(".burger").toggleClass("active");
  $("#dropdown-content").fadeOut("show_login");
  i = 0;
  console.log("i = 0");
}

let letters = document.getElementsByClassName("title-letter");

setTimeout(() => {
  for (let i = 0; i < letters.length; i++) {
    anime({
      targets: letters[i],
      easing: "easeInQuad",
      translateX: ["5px", "0"],
      delay: 50 * i,
    });

    anime({
      targets: letters[i],
      easing: "easeInQuad",
      opacity: 1,
      delay: 60 * i,
      complete: function (anim) {
        if (i === letters.length - 1) {
          showSubTitle();
        }
      },
    });
  }
}, 500);

function showSubTitle() {
  anime({
    targets: "#sub-title",
    easing: "easeInQuad",
    opacity: 1,
    duration: 300,
    delay: 1,
  });
}
