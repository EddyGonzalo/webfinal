<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Admin Dashboard V.1.1</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Sharp" rel="stylesheet">

    <link rel="stylesheet" href="css/Responsive Admin Dashboard V.1.1.css">

</head>
<body>

    <!-- navbar -->
    <nav>
        <div class="container">
            <img src="img/logo.png" class="logo" alt="logo">
            <div class="search-bar">
                <span class="material-icons-sharp">search</span>
                <input type="search" placeholder="Search">
            </div>
            <div class="profile-area">
                <div class="theme-btn">
                    <span class="material-icons-sharp active">light_mode</span>
                    <span class="material-icons-sharp">dark_mode</span>
                </div>
                <div class="profile">
                    <div class="profile-photo">
                        <img src="img/profile-1.png" alt="profile1">
                    </div>
                    <h5>William</h5>
                    <a href="#" id="expandButton"><span class="material-icons-sharp">power_settings_new</span></a>
                </div>
                <button id="menu-btn">
                    <span class="material-icons-sharp">menu</span>
                </button>
            </div>
        </div>
    </nav>

    <!-- main -->

    <main>

         <!-- aside -->
        <aside>
            <button id="close-btn">
                <span class="material-icons-sharp">close</span>
            </button>
            <div class="sidebar">
                <a href="#" class="active">
                    <span class="material-icons-sharp">dashboard</span>
                    <h4>Panel de Control</h4>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">currency_exchange</span>
                    <h4>Intercambio</h4>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">account_balance_wallet</span>
                    <h4>Billetera</h4>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">payment</span>
                    <h4>Transacciones</h4>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">pie_chart</span>
                    <h4>Analisis</h4>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">insert_comment</span>
                    <h4>Mensajes</h4>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">help_center</span>
                    <h4>Centro de Ayuda</h4>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">settings</span>
                    <h4>Configuracion</h4>
                </a>
            </div>
            <div class="updates">
                <span class="material-icons-sharp">update</span>
                <h4>Actualizaciones disponibles</h4>
                <small>Actualizacion de Seguridad</small>
                <small>Actualizacion General</small>
                <a href="#">Actualiza Ahora!</a>

            </div>

        </aside>

         <!-- section middle -->
        <section class="middle">
            <div class="header">
                <h1>Descripción general</h1>
                <input type="date">
            </div>
            <div class="cards">
                <!-- card 1 -->
                <div class="card">
                    <div class="top">
                        <div class="left">
                            <img src="img/BTC.png" alt="card1-1">
                            <h2>BTC</h2>
                        </div>
                        <img src="img/visa.png" class="right"   alt="card1-2">
                    </div>
                    <div class="middle">
                        <h1 id="precioActual">$543,106</h1>
                        <div class="chip">
                          <img src="img/card chip.png" class="chip" alt="card-chip">
                        </div>
                    </div>
                    <div class="bottom">
                        <div class="left">
                            <small>Card Holder</small>
                            <h5>WILLIAM PI</h5>
                        </div>
                        <div class="right">
                            <div class="expiry">
                                <small>Expiry</small>
                                <h5>06/24</h5>
                            </div>
                            <div class="cvv">
                                <small>CVV</small>
                                <h5>123</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- card 2 -->
                <div class="card">
                    <div class="top">
                        <div class="left">
                            <img src="img/ETH.png" alt="card2-1">
                            <h2>ETH</h2>
                        </div>
                        <img src="img/revolute.png" class="right"   alt="card2-2">
                    </div>
                    <div class="middle">
                        <h1>$277,762</h1>
                        <div class="chip">
                            <img src="img/card chip.png" class="chip" alt="card-chip">
                        </div>
                    </div>
                    <div class="bottom">
                        <div class="left">
                            <small>Card Holder</small>
                            <h5>WILLIAM PI</h5>
                        </div>
                        <div class="right">
                            <div class="expiry">
                                <small>Expiry</small>
                                <h5>11/25</h5>
                            </div>
                            <div class="cvv">
                                <small>CVV</small>
                                <h5>789</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- card 3 -->
                <div class="card">
                    <div class="top">
                        <div class="left">
                            <img src="img/USDT.png" alt="card3-1">
                            <h2>USDT</h2>
                        </div>
                        <img src="img/master card.png" class="right"   alt="card3-2">
                    </div>
                    <div class="middle">
                        <h1>$120,988</h1>
                        <div class="chip">
                            <img src="img/card chip.png" class="chip" alt="card-chip">
                        </div>
                    </div>
                    <div class="bottom">
                        <div class="left">
                            <small>Card Holder</small>
                            <h5>WILLIAM PI</h5>
                        </div>
                        <div class="right">
                            <div class="expiry">
                                <small>Expiry</small>
                                <h5>05/27</h5>
                            </div>
                            <div class="cvv">
                                <small>CVV</small>
                                <h5>456</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- monthly report -->
            <div class="monthly-report">
                <div class="report">
                    <h3>Ingreso</h3>
                    <div>
                        <details>
                            <h1>$19,230</h1>
                            <h4 class="success">+4.6%</h4>
                        </details>
                        <p class="text-muted">Compared to $18,384 last month</p>
                    </div>
                </div>
                <div class="report">
                    <h3>Gastos</h3>
                    <div>
                        <details>
                            <h1>$9,113</h1>
                            <h4 class="danger">-6.2%</h4>
                        </details>
                        <p class="text-muted">Compared to $9,715 last month</p>
                    </div>
                </div>
                <div class="report">
                    <h3>Cashback</h3>
                    <div>
                        <details>
                            <h1>$4,390</h1>
                            <h4 class="success">+2.9%</h4>
                        </details>
                        <p class="text-muted">Compared to $4,266 last month</p>
                    </div>
                </div>
                <div class="report">
                    <h3>Ingreso</h3>
                    <div>
                        <details>
                            <h1>$86,374</h1>
                            <h4 class="danger">-5.2%</h4>
                        </details>
                        <p class="text-muted">Compared to $91,111 last month</p>
                    </div>
                </div>
            </div>
            <br>
             <!-- fast payment -->
             <div class="fast-payment">
                <h2>Pago Rapido</h2>
                <div class="badges">
                    <div class="badge">
                        <span class="material-icons-sharp">add</span>
                    </div>
                    <div class="badge">
                        <span class="bg-primary"></span>
                        <div>
                            <h5>Training</h5>
                            <h4>$54</h4>
                        </div>
                    </div>
                    <div class="badge">
                        <span class="bg-success"></span>
                        <div>
                            <h5>Internet</h5>
                            <h4>$77</h4>
                        </div>
                    </div>
                    <div class="badge">
                        <span class="bg-primary"></span>
                        <div>
                            <h5>Gas</h5>
                            <h4>$240</h4>
                        </div>
                    </div>
                    <div class="badge">
                        <span class="bg-danger"></span>
                        <div>
                            <h5>Movies</h5>
                            <h4>$27</h4>
                        </div>
                    </div>
                    <div class="badge">
                        <span class="bg-primary"></span>
                        <div>
                            <h5>Education</h5>
                            <h4>$874</h4>
                        </div>
                    </div>
                    <div class="badge">
                        <span class="bg-danger"></span>
                        <div>
                            <h5>Electricity</h5>
                            <h4>$97</h4>
                        </div>
                    </div>
                    <div class="badge">
                        <span class="bg-success"></span>
                        <div>
                            <h5>Food</h5>
                            <h4>$522</h4>
                        </div>
                    </div>
                    </div>
                </div>
             </div>
             <!-- Formulario -->
            <div class="form-container">
                <h2>CRYPTOCURRENCY BOT</h2>
                <div class="form-content">
                    <form id="formulario">
                        <div class="form-group">
                            <label for="min-compra">Compra mínimo:</label>
                            <input type="number" id="min-compra" name="min-compra" placeholder="Ingrese monto" required>
                        </div>

                        <div class="form-group">
                            <label for="max-compra">Compra máximo:</label>
                            <input type="number" id="max-compra" name="max-compra" placeholder="Ingrese monto" required>
                        </div>

                        <div class="form-group">
                            <label for="min-venta">Venta mínimo:</label>
                            <input type="number" id="min-venta" name="min-venta" placeholder="Ingrese monto" required>
                        </div>

                        <div class="form-group">
                            <label for="max-venta">Venta máximo:</label>
                            <input type="number" id="max-venta" name="max-venta" placeholder="Ingrese monto" required>
                        </div>
                        <button type="submit" id="guardarBtn">Guardar</button>
                    </form>
                    <!-- IMAGEN DEL BOT -->
                    <img src="img/bot.jpg" alt="Imagen" class="form-image">
                </div>
            </div>

            <style>
                .form-container {
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                }

                .form-content {
                    display: flex;
                    align-items: flex-start;
                }

                .form-group {
                    margin-bottom: 20px;
                }

                label {
                    display: block;
                    margin-bottom: 5px;
                    font-weight: bold;
                }

                input[type="number"] {
                    width: 100%;
                    padding: 10px;
                    border: 1px solid #ccc;
                    border-radius: 4px;
                }

                button {
                    display: block;
                    width: 100%;
                    padding: 10px;
                    background-color: #564caf;
                    color: white;
                    border: none;
                    border-radius: 4px;
                    cursor: pointer;
                }

                button:hover {
                    background-color: #45a049;
                }

                .form-image {
                    width: 600px;
                    height: 400px;
                    margin-left: 10px; /* Ajusta el margen según tus preferencias */
                    border-radius: 10px;
                }
            </style>

             <!-- GRAFICA -->
             <div style="width: 800px; margin: 0 auto;">
                <canvas id="real-time-chart"></canvas>
            </div>

            

        </section>

         <!-- section right -->
         <section class="right">
             <!-- investments -->
            <div class="investments">
                <div class="header">
                    <h2>Inversiones</h2>
                    <a href="#">Más <span class="material-icons-sharp">chevron_right</span></a>
                </div>
                 <!-- investment var -->
                <div class="investment">
                    <img src="img/tesla.png" alt="inv2">
                    <h4>Tesla</h4>
                    <div class="date-time">
                        <p>7 Fev, 2023</p>
                        <small class="text-muted">9:14pm</small>
                    </div>
                    <div class="bonds">
                        <p>1402</p>
                        <small class="text-muted">Bonds</small>
                    </div>
                    <div class="amount">
                        <h4>$196,81</h4>
                        <small class="success">+1.05%</small>
                    </div>
                </div>
                <div class="investment">
                    <img src="img/mcdonalds.png" alt="inv4">
                    <h4>McDonalds</h4>
                    <div class="date-time">
                        <p>7 Fev, 2023</p>
                        <small class="text-muted">9:14pm</small>
                    </div>
                    <div class="bonds">
                        <p>1402</p>
                        <small class="text-muted">Bonds</small>
                    </div>
                    <div class="amount">
                        <h4>$267,34</h4>
                        <small class="danger">-0.22%</small>
                    </div>
                </div>
                <div class="investment">
                    <img src="img/uniliver.png" alt="inv1">
                    <h4>Uniliver</h4>
                    <div class="date-time">
                        <p>7 Fev, 2023</p>
                        <small class="text-muted">9:14pm</small>
                    </div>
                    <div class="bonds">
                        <p>1402</p>
                        <small class="text-muted">Bonds</small>
                    </div>
                    <div class="amount">
                        <h4>$49,57</h4>
                        <small class="danger">-1.39%</small>
                    </div>
                </div>
                <div class="investment">
                    <img src="img/monster.png" alt="inv3">
                    <h4>Monster</h4>
                    <div class="date-time">
                        <p>7 Fev, 2023</p>
                        <small class="text-muted">9:14pm</small>
                    </div>
                    <div class="bonds">
                        <p>1402</p>
                        <small class="text-muted">Bonds</small>
                    </div>
                    <div class="amount">
                        <h4>$102,51</h4>
                        <small class="danger">-0.30%</small>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <!-- recent transaction -->
            <div class="recent-transactions">
                <div class="header">
                    <h2>Transacciones Recientes</h2>
                    <a href="#">Más <span class="material-icons-sharp">chevron_right</span></a>
                </div>

                <div class="transaction">
                    <div class="service">
                        <div class="icon bg-purple-light">
                            <span class="material-icons-sharp purple">headset</span>
                        </div>
                    </div>
                    <div class="details">
                        <h4>Music</h4>
                        <p>07.02.2023</p>
                    </div>
                    <div class="card-details">
                        <div class="card bg-danger">
                            <img src="img/visa.png" alt="card1">
                        </div>
                        <div class="details">
                            <p>*3034</p>
                            <small class="text-muted">Credit Card</small>
                        </div>
                    </div>
                    <h4>-$8</h4>
                </div>
                <div class="transaction">
                    <div class="service">
                        <div class="icon bg-purple-light">
                            <span class="material-icons-sharp purple">shopping_bag</span>
                        </div>
                    </div>
                    <div class="details">
                        <h4>Shopping</h4>
                        <p>07.02.2023</p>
                    </div>
                    <div class="card-details">
                        <div class="card bg-primary">
                            <img src="img/visa.png" alt="card1">
                        </div>
                        <div class="details">
                            <p>*4473</p>
                            <small class="text-muted">Credit Card</small>
                        </div>
                    </div>
                    <h4>-$58</h4>
                </div>
                <div class="transaction">
                    <div class="service">
                        <div class="icon bg-success-light">
                            <span class="material-icons-sharp success">restaurant</span>
                        </div>
                    </div>
                    <div class="details">
                        <h4>Restaurant</h4>
                        <p>07.02.2023</p>
                    </div>
                    <div class="card-details">
                        <div class="card bg-dark">
                            <img src="img/master card.png" alt="card1">
                        </div>
                        <div class="details">
                            <p>*1618</p>
                            <small class="text-muted">Credit Card</small>
                        </div>
                    </div>
                    <h4>-$20</h4>
                </div>
                <div class="transaction">
                    <div class="service">
                        <div class="icon bg-danger-light">
                            <span class="material-icons-sharp danger">sports_esports</span>
                        </div>
                    </div>
                    <div class="details">
                        <h4>Games</h4>
                        <p>07.02.2023</p>
                    </div>
                    <div class="card-details">
                        <div class="card bg-danger">
                            <img src="img/visa.png" alt="card1">
                        </div>
                        <div class="details">
                            <p>*2488</p>
                            <small class="text-muted">Credit Card</small>
                        </div>
                    </div>
                    <h4>-$31</h4>
                </div>
                <div class="transaction">
                    <div class="service">
                        <div class="icon bg-danger-light">
                            <span class="material-icons-sharp danger">medication</span>
                        </div>
                    </div>
                    <div class="details">
                        <h4>Pharmacy</h4>
                        <p>07.02.2023</p>
                    </div>
                    <div class="card-details">
                        <div class="card bg-primary">
                            <img src="img/visa.png" alt="card1">
                        </div>
                        <div class="details">
                            <p>*2757</p>
                            <small class="text-muted">Credit Card</small>
                        </div>
                    </div>
                    <h4>-$44</h4>
                </div>
                <div class="transaction">
                    <div class="service">
                        <div class="icon bg-success-light">
                            <span class="material-icons-sharp success">fitness_center</span>
                        </div>
                    </div>
                    <div class="details">
                        <h4>Fitness</h4>
                        <p>07.02.2023</p>
                    </div>
                    <div class="card-details">
                        <div class="card bg-dark">
                            <img src="img/master card.png" alt="card1">
                        </div>
                        <div class="details">
                            <p>*0765</p>
                            <small class="text-muted">Credit Card</small>
                        </div>
                    </div>
                    <h4>-$19</h4>
                </div>

            </div>
         </section>
    </main>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.0/chart.min.js" integrity="sha512-R60W3LgKdvvfwbGbqKusRu/434Snuvr9/Flhtoq9cj1LQ9P4HFKParULqOCAisHk/J4zyaEWWjiWIMuP13vXEg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/Responsive Admin Dashboard V.1.1.js"></script>
    <script src="guardar_valores.js"></script>
</body> 
</html>