const showAll = document.getElementById('all');
const priceBtn = document.getElementById('price');
const valueBtn = document.getElementById('value');
const satisfactionBtn = document.getElementById('satisfaction');
const price = document.getElementById('price2');
const value = document.getElementById('value2');
const satisfaction = document.getElementById('satisfaction2');
//show all
showAll.addEventListener('click',function(event){
 price.style.display = 'flex';
 value.style.display = 'flex';
 satisfaction.style.display = 'flex';

     //remove colors from unclicked buttons:
     valueBtn.style.backgroundColor = 'rgb(198, 221, 236)';
     showAll.style.backgroundColor =   'rgb(111, 149, 173)';
     priceBtn.style.backgroundColor = 'rgb(198, 221, 236)';
     satisfactionBtn.style.backgroundColor = 'rgb(198, 221, 236)';
});
//show by value 
valueBtn.addEventListener('click',function(event){
    price.style.display = 'none';
    value.style.display = 'flex';
    satisfaction.style.display = 'none';
    //remove colors from unclicked buttons:
    valueBtn.style.backgroundColor = 'rgb(111, 149, 173)';
    showAll.style.backgroundColor = 'rgb(198, 221, 236)';
    priceBtn.style.backgroundColor = 'rgb(198, 221, 236)';
    satisfactionBtn.style.backgroundColor = 'rgb(198, 221, 236)';
   });

   //show by price

   priceBtn.addEventListener('click',function(event){
    price.style.display = 'flex';
    value.style.display = 'none';
    satisfaction.style.display = 'none';

        //remove colors from unclicked buttons:
        valueBtn.style.backgroundColor = 'rgb(198, 221, 236)';
        showAll.style.backgroundColor = 'rgb(198, 221, 236)';
        priceBtn.style.backgroundColor = 'rgb(111, 149, 173)';
        satisfactionBtn.style.backgroundColor = 'rgb(198, 221, 236)';

   });

//show by satisfaction

satisfactionBtn.addEventListener('click',function(event){
    price.style.display = 'none';
    value.style.display = 'none';
    satisfaction.style.display = 'flex';

        //remove colors from unclicked buttons:
        valueBtn.style.backgroundColor = 'rgb(198, 221, 236)'
        showAll.style.backgroundColor = 'rgb(198, 221, 236)';
        priceBtn.style.backgroundColor = 'rgb(198, 221, 236)';
        satisfactionBtn.style.backgroundColor = 'rgb(111, 149, 173)';

   });

