
let select = document.getElementById('uf');


$.getJSON('https://servicodados.ibge.gov.br/api/v1/localidades/estados', function(data){
    
console.log(data);
// var display = `User_ID: ${data.userId}<br>
    //                ID: ${data.id}<br>
    //                Title: ${data.title}<br>
    //                Completion_Status: ${data.completed}`
    // $(".display").html(display);
  });