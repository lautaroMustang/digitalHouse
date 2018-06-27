<h1>Ya somos <span id="cantidadUsuarios">0</span> usuarios.</h1>

<script type="text/javascript">
  function cambiarCantidad() {
    fetch('/api/conteo')
    .then(
      function(datos) {
        return datos.json();
      }
    ).then(
      function(datos) {
        document.getElementById('cantidadUsuarios').innerHTML = datos.cantidad
      }
    )
  }

  cambiarCantidad();
  setInterval(cambiarCantidad, 1000);
</script>