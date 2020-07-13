<script type="text/javascript">
	var array = [
     {  fechas:"2018-12-01",
        horario:"AM",
        id:"ID123",
        valor:5000
     },
     {  fechas:"2018-12-01",
        horario:"AM",
        id:"ID545",
        valor:7000
     },
     {  fechas:"2018-12-01",
        horario:"PM",
        id:"ID545",
        valor:3000
     },
     {  fechas:"2018-12-02",
        horario:"AM",
        id:"ID545",
        valor:7000
     }
];

//alert(array[0].valor);

//console.log(array.sort((a, b) => a.fechas > b.fechas));


const reducer = (accumulator, currentValue) => accumulator + currentValue;

for (var i = 0; i <= 3; i--) {
	console.log(array[i].valor.reduce(reducer));
}


</script>