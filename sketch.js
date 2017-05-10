//acá tiene que ponerse creativxs
//revisen lo que hicimos en la clase 7
//https://github.com/profesorfaco/dno037-2017-07
var url = 'https://raw.githubusercontent.com/bastgarces/data/master/data_cenabast.json';

function setup() {
   loadJSON(url, gotData, 'json');
   canvas = createCanvas(600, 400);
   canvas.parent('top');
}

function gotData(data) {
   console.log(data);
   var total = 0;
   var licitacion = 0;
   var tratoDirecto = 0;
   for (var a = 0; a < data.length; a++) {
      total++;
      if (data.buyingby[a].includes("Licitación")) {
         licitacion++;
      }
      else if (data.buyingby[a].includes("Directo")) {
         tratoDirecto++;
      }
   }
   textSize(20);
   text("Cenabast ha comprado " + total + " medicamentos entre 2015 y 2016.", width / 2, 150);
   text(licitacion + " fueron a través de licitación.", width / 2, 200);
   text(tratoDirecto + " fueron por trato directo.", width / 2, 200);
   var promedio = round((tratoDirecto * 100) / total);
   textSize(30);
   text("Los tratos directos son el "+ promedio +"% del total de compras de Cenabast.", width / 2, 270);
}

function draw() {
   background(237, 34, 93);
   fill(255);
   textAlign(CENTER);
}
