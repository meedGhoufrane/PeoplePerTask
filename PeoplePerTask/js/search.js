const swiper = new Swiper(".swiper", {
  // Optional parameters

  loop: true,

  // If we need pagination
  pagination: {
    el: ".swiper-pagination",
  },
  autoplay: {
    delay: 1200,
    disableOnInteraction: false,
    waitForTransition: true,
  },
});




  // filter array 
  let filterarray =[];

  // gallery card array
  
  let galleryarray = [
      {
          id:1,
          name : "Full stack developer",
          src: "images/Frame2.png",
          desc : "I will build your professional wix website with unlimited revisions"
      },
      {
          id:2,
          name : "UX",
          src: "images/Frame88.png",
          desc : "Lorem ipsum dolor, sit amet consectetur adipisicing."
      },
      {
          id:3,
          name : "Back end developer",
          src: "images/Frame2.png",
          desc : "Lorem ipsum dolor, sit amet consectetur adipisicing "
      },
      {
          id:4,
          name : "Design figma",
          src: "images/Frame5.png",
          desc : "I will design, redesign, update or fix webflow website"
      },
      {
          id:5,
          name : "Wordpress",
          src: "images/Frame6.png",
          desc : "I will design clean and responsive wordpress website."
      },
      {
          id:6,
          name : "Front end developer",
          src: "images/Frame2.png",
          desc : "I will develop responsive website with html css and js"
      },
      {
          id:7,
          name : "Front end developer",
          src: "images/Frame2.png",
          desc : "I will develop responsive website with html css and js"
      },
      {
          id:8,
          name : "Front end developer",
          src: "images/Frame2.png",
          desc : "I will develop responsive website with html css and js"
      },
      {
          id:9,
          name : "Front end developer",
          src: "images/Frame2.png",
          desc : "I will develop responsive website with html css and js"
      },
      {
          id:10,
          name : "Front end developer",
          src: "images/Frame2.png",
          desc : "I will develop responsive website with html css and js"
      },
      {
          id:11,
          name : "front end developer",
          src: "images/Frame2.png",
          desc : "I will develop responsive website with html css and js"
      },
      {
          id:12,
          name : "front end developer",
          src: "images/Frame2.png",
          desc : "I will develop responsive website with html css and js"
      },

     ];
  
  
  
  showgallery(galleryarray);
  
  
  // create function to show card
  
  
  function showgallery(curarra){
     document.getElementById("card").innerText = "";
     for(var i=0;i<curarra.length;i++){
         document.getElementById("card").innerHTML += `
          <div class="col-md-4 mt-3" >
          <div class="card card-hover">
          <a href="../course-single.html" class="card-img-top"><img src="${curarra[i].src}" alt="" class="rounded-top-md card-img-top"></a>
          <!-- Card Body -->
          <div class="card-body">
          <div class="d-flex justify-content-between align-items-center mb-3">
          <span class="badge bg-info-soft">Intermediate</span>
          <a href="#" class="text-muted fs-5"><i class="fe fe-heart align-middle"></i></a>
          </div>
          <h4 class="mb-2 text-truncate-line-2 "><a href="" class="text-inherit">${curarra[i].desc}</a></h4>
          
          <small>${curarra[i].name}</small>
          <div class="lh-1 mt-3">
          <span>
          <i class="mdi mdi-star text-warning me-n1"></i>
          <i class="mdi mdi-star text-warning me-n1"></i>
          <i class="mdi mdi-star text-warning me-n1"></i>
          <i class="mdi mdi-star text-warning me-n1"></i>
          <i class="mdi mdi-star text-warning"></i>
          </span>
          <span class="text-warning">4.5</span>
          <span class="fs-6 text-muted">(9,300)</span>
          </div>
            </div>
         `
     }
  
  }
  
  // For Live Searching Product
  
  document.getElementById("myinput").addEventListener("keyup",function(){
      let text = document.getElementById("myinput").value;
  
      filterarray= galleryarray.filter(function(a){
          if(a.name.includes(text)){
              return a.name;
             }
  
     });
     if(this.value == ""){
         showgallery(galleryarray);
         
     }
     else{
         if(filterarray == ""){
             document.getElementById("para").style.display = 'block'
             document.getElementById("card").innerHTML = ""; 
         }
         else{
             showgallery(filterarray);
             document.getElementById("para").style.display = 'none';
         }
        
     }
        
  
  });


  // JavaScript to toggle dark mode
const darkModeToggle = document.getElementById('dark-mode-toggle');
const body = document.body;

darkModeToggle.addEventListener('click', function () {
  body.classList.toggle('dark-mode');
  // You can also store the user's preference in a cookie or local storage.

  // Change the icon when dark mode is active
  if (body.classList.contains('dark-mode')) {
    darkModeToggle.classList.remove('fa-moon');
    darkModeToggle.classList.add('fa-sun'); // Replace "fa-sun" with the appropriate Font Awesome sun icon.
  } else {
    darkModeToggle.classList.remove('fa-sun');
    darkModeToggle.classList.add('fa-moon');
  }
});