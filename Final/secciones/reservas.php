<!-- %%%%%%%%%% SECCION RESERVAS %%%%%%%%%% -->
<?php 
// require("database/galeria.php"); 
?>

<section id="formulario">
    
    <h1>Reserve</h1>
        
    <div>

    <form name ="contacto" action="procesarReserva.php" method="post">
        
        <?php
        error_reporting(E_ALL ^ E_NOTICE);
            $resultado = $_GET['resultado'];

            if ($resultado=="error"):
            $errores= "Por favor ingresa todos los datos";
            endif;
        ?>
        
        <?php
        
        if (!empty($errores)): 
            echo "<h1>$errores</h1>";
        endif;
        
        ?>
        
        <label>Nombres:</label>

        <input type="text" name="nombre" placeholder="Nombre">
        
        <br>

        <label>Apellidos:</label>

        <input type="text" name="apellido" placeholder="Apellido" >
        
        <br>

        <label>Correo Electronico:</label>

        <input type="email" name="email" placeholder="usuario@mail.com"  >
        
        <br>
        
        <label>Destino:</label>
        
        <br>
            
        <?php 
        
            foreach ($galeria as $destino){
                
            ?>
        
                <label class="radio" id="items">
                    <input type="radio" name="destino" value="<?php echo $destino[nombre]; ?>"  >	
                    <?php echo $destino['nombre']; ?>
                </label>
                
            <?php 
            }
        ?>
        
        <label>Trasporte:</label>
        
        <br>

        <label class="radio" id="items">
            <input type="radio" name="transporte" value="Omnibus"  >	
            Omnibus
        </label>

        <label class="radio" id="items">
            <input type="radio" name="transporte" value="Avion"  >	
            Avion
        </label>
                
        <label>Fecha:</label>
        
        <br>
        <br>
        
        <input type="date" name="fechaviaje"  >
        
        <br>
        <br>
        
        <label>Cantidad de Personas:</label>
        
        <br>
        
        <label id="sub">Adultos:</label>
        
        <label class="radio" id="items">
            <input type="radio" name="adultos" value="1"  >	
            1
        </label>

        <label class="radio" id="items">
            <input type="radio" name="adultos" value="2"  >	
            2
        </label>

        <label class="radio" id="items">
            <input type="radio" name="adultos" value="3"  >	
            3
        </label>

        <label class="radio" id="items">
            <input type="radio" name="adultos" value="4"  >	
            4
        </label>

        <label class="radio" id="items">
            <input type="radio" name="adultos" value="5"  >	
            5
        </label>

        <label class="radio" id="items">
            <input type="radio" name="adultos" value="6"  >	
            6
        </label>
        
        <label id="sub">Niños:</label>
        
        <label class="radio" id="items">
            <input type="radio" name="ninos" value="Ninguno"  >	
            Ninguno
        </label>

        <label class="radio" id="items">
            <input type="radio" name="ninos" value="1"  >	
            1
        </label>

        <label class="radio" id="items">
            <input type="radio" name="ninos" value="2"  >	
            2
        </label>

        <label class="radio" id="items">
            <input type="radio" name="ninos" value="3"  >	
            3
        </label>

        <label class="radio" id="items">
            <input type="radio" name="ninos" value="4"  >	
            4
        </label>

        <label>Servicios Extra:</label>
        
        <br>

        <label class="checkbox" id="items">
            <input type="checkbox" name="extra[]" value="Automovil"/>	
            Automovil
        </label>
            
        <label class="checkbox" id="items">
            <input type="checkbox" name="extra[]" value="Almuerzo y Cena"/>	
            Almuerzo y Cena
        </label>

        <label class="checkbox" id="items">
            <input type="checkbox" name="extra[]" value="Frigobar"/>	
            Frigobar
        </label>

        <label>Pedidos Especificos:</label>
        
        <br>
        <br>
            
        <textarea name="pedidos" class="textarea" rows="5" placeholder="Escriba aquí su pedido."></textarea>
        
        <br> 
        <br>
        <br>

        <button type="submit" onclick="alert('Su reserva a sido enviada para ser procesada, en los proximos dias recibira un email para su debida confirmación')" class="enviar">Reservar</button>
            
    </form>
    </div>

</section>
