// Obtener los datos enviados por AJAX
var datos = JSON.parse(request.body);

// Almacenar los valores mínimos y máximos de compra y venta
var minCompra = datos.minCompra;
var maxCompra = datos.maxCompra;
var minVenta = datos.minVenta;
var maxVenta = datos.maxVenta;
var btcPrice = datos.btcPrice;

// Comprobar si el precio de BTC está dentro del rango de compra
if (btcPrice >= minCompra && btcPrice <= maxCompra) {
  // Realizar la acción de compra de 3 acciones
  var cantidadAcciones = 3;
  console.log('Se realizará la compra de', cantidadAcciones, 'acciones de BTC.');

  // Crear una variable para almacenar el resultado de multiplicar 3 por el precio de BTC
  var compra = 3 * btcPrice;
  console.log('El resultado de multiplicar 3 por el precio de BTC es:', compra);

  // Actualizar el valor del elemento h1
  var h1Element = document.getElementById("precioActual");
  h1Element.innerHTML = "$" + compra;

  // Crear un objeto con los datos de la compra
  var compraData = {
    cantidad: cantidadAcciones,
    precio: compra
  };

  // Realizar la solicitud AJAX para guardar la compra en la base de datos
  $.ajax({
    url: 'guardar_compra.php',  // Ruta al archivo PHP donde se guardará la compra en la base de datos
    type: 'POST',
    data: JSON.stringify(compraData),  // Convertir el objeto a JSON
    contentType: 'application/json',
    success: function(response) {
      // Manejar la respuesta del servidor en caso de éxito
      console.log('Compra guardada exitosamente en la base de datos');
    },
    error: function(xhr, status, error) {
      // Manejar errores de la solicitud AJAX
      console.error('Error al guardar la compra en la base de datos:', error);
    }
  });
} else {
  console.log('El precio de BTC no está dentro del rango de compra. No se realizará ninguna acción.');
}
