var cantidadTickets=0;
var descuento=0;
var totalPagar=0;

{ 
    function getValueFromInput()
    {
    cantidadTickets = document.getElementById('inputCantidad').value  //inputCantidad lo meto en un cantidad de tickets
    descuento = document.getElementById('inputCategoria').value //inputDescuento lo meto en descuento
    console.log("Cantidad: "+cantidadTickets)
    console.log("Descuento: "+descuento)
    totalPagar = cantidadTickets*descuento*1200  //total tickets con descuento lo paso a total a pagar
    document.getElementById('Pagar').innerText='$'+ totalPagar.toFixed(2)
    }
}