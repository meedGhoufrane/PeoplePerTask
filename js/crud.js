const menuBtn = document.getElementById('menu-logo');
const menu =document.getElementById('column1')
let menuOpen = false
menuBtn.addEventListener('click',function(event){
  if(!menuOpen){
  menu.style.display = 'flex';
  menuOpen = true;
  }
  else{
    menu.style.display='none'
    menuOpen = false;
  }
});
function newPage(){
 window.location.href ="add.php";
};
function deletePage(){
    window.location.href ="delete.php";
   };
   function updatePage(){
    window.location.href ="update.php";
   };
   function newProject(){
    window.location.href ="addproject.php";
   };
   function deleteProject(){
    window.location.href ="deleteproject.php";
   };
   function updateProject(){
    window.location.href ="updateproject.php";
   };
   function addCategory(){
    window.location.href ="addcategory.php";
   };
   function addSubCategory(){
    window.location.href ="addsubcate.php";
   };
   function displayTest(){
    window.location.href ="show.php";
   };
   function deleteTest(){
    window.location.href ="deletetest.php";
   }