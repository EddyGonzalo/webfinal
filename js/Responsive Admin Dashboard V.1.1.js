// Obtener el elemento del lienzo del gráfico
const chartCanvas = document.getElementById('real-time-chart');

// Crear el gráfico
const chart = new Chart(chartCanvas, {
  type: 'line',
  data: {
    labels: [],
    datasets: [
      {
        label: 'BTC Price',
        data: [],
        fill: false,
        borderColor: 'red',
        tension: 0.1
      },
      {
        label: 'ETH Price',
        data: [],
        fill: false,
        borderColor: 'gray',
        tension: 0.1
      },
      {
        label: 'USDT Price',
        data: [],
        fill: false,
        borderColor: 'blue',
        tension: 0.1
      }
    ]
  },
  options: {
    responsive: true,
    scales: {
      x: {
        display: true,
        title: {
          display: true,
          text: 'Time'
        }
      },
      y: {
        display: true,
        title: {
          display: true,
          text: 'Price'
        },
        ticks: {
          callback: function (value, index, values) {
            return value;
          }
        }
      }
    }
  }
});

// Variable para realizar el seguimiento del número de datos generados
let dataCount = 0;

// Función para generar valores de precios aleatorios con valores iniciales en miles
function generateRandomPrice() {
  const initialValue = Math.random() * (10 - 1) + 1; // Valor inicial en miles
  return initialValue * 1000 + Math.random() * 1000; // Valor aleatorio entre el valor inicial y el valor inicial + 1000
}


// Función para actualizar el gráfico con nuevos datos
function updateChart() {
  const currentTime = new Date().toLocaleTimeString();
  const btcPrice = generateRandomPrice();
  const ethPrice = generateRandomPrice();
  const usdtPrice = generateRandomPrice();

  chart.data.labels.push(currentTime);
  chart.data.datasets[0].data.push(btcPrice);
  chart.data.datasets[1].data.push(ethPrice);
  chart.data.datasets[2].data.push(usdtPrice);

  chart.update();

  // Incrementar el contador de datos
  dataCount++;

  // Verificar si se ha alcanzado el número 8 de datos generados
  if (dataCount === 8) {
    var minCompra = 3000; // Valor mínimo de compra
  var maxCompra = 8000; // Valor máximo de compra
  var minVenta = 6000;   // Valor mínimo de venta
  var maxVenta = 25000;  // Valor máximo de venta
    // Obtener los valores mínimos y máximos de compra y venta
    //var minCompra = parseFloat(document.getElementById('minCompra').value);
    //var maxCompra = parseFloat(document.getElementById('maxCompra').value);
    //var minVenta = parseFloat(document.getElementById('minVenta').value);
    //var maxVenta = parseFloat(document.getElementById('maxVenta').value);

    // Crear un objeto con los datos a enviar
    var datos = {
      btcPrice: 4000,
      minCompra: minCompra,
      maxCompra: maxCompra,
      minVenta: minVenta,
      maxVenta: maxVenta
    };

    // Realizar la solicitud AJAX para guardar los datos
    $.ajax({
      url: 'guardar_valores.js',  // Ruta al archivo PHP donde se guardarán los datos
      type: 'POST',
      data: JSON.stringify(datos),  // Convertir el objeto a JSON
      contentType: 'application/json',
      success: function(response) {
        // Manejar la respuesta del servidor en caso de éxito
        console.log('Datos guardados exitosamente');
      },
      error: function(xhr, status, error) {
        // Manejar errores de la solicitud AJAX
        console.error('Error al guardar los datos:', error);
      }
    });
  }

  // Verificar si el gráfico tiene más de 20 puntos de datos
  if (chart.data.labels.length > 20) {
    // Eliminar el primer punto de datos
    chart.data.labels.shift();
    chart.data.datasets[0].data.shift();
    chart.data.datasets[1].data.shift();
    chart.data.datasets[2].data.shift();
  }

  setTimeout(updateChart, 2000); // Actualizar cada 2 segundos
}

// Función para manejar el evento de clic en el botón "Guardar"
function handleGuardarClick() {
  // Deshabilitar el botón "Guardar" para evitar múltiples clics
  document.getElementById('guardarBtn').disabled = true;

  // Llamar a la función updateChart para comenzar a actualizar el gráfico
  updateChart();
}

// Asociar la función handleGuardarClick al evento de clic en el botón "Guardar"
document.getElementById('guardarBtn').addEventListener('click', handleGuardarClick);

// Cambiar el tema
const themeBtn = document.querySelector('.theme-btn');

themeBtn.addEventListener('click', () => {
  document.body.classList.toggle('dark-theme');

  themeBtn.querySelector('span:first-child').classList.toggle('active');
  themeBtn.querySelector('span:last-child').classList.toggle('active');
});