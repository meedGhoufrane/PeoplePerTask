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
})
var options = {
  chart: {
    type: 'bar'
  },
  series: [{
    name: 'Users',
    data: [480,300,102,10]
  }],
  xaxis: {
    categories: ["Total client","Delivered","Pending","Failed"]
  }
}

var chart = new ApexCharts(document.querySelector("#chart"), options);

chart.render();