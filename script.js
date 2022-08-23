document.querySelector(".nav-icon").addEventListener("click", function (){
    document.querySelector("ul").classList.toggle("show")
})

// Type Effect
  var typed3 = new Typed('#type', {
    strings: ['Web Development', 'Digital Marketing', 'Graphics And Animations', 'Cyber Security'],
    typeSpeed: 100,
    backSpeed: 50,
    smartBackspace: true, // this is a default
    loop: true
  });