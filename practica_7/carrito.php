<!doctype html>
<html lang="es">

<head>
  <title>Carrito de compras</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<body>
  <header>
    <!-- place navbar here -->
    <ul class="nav nav-pills">
        <li class="nav-item dropdown">
            <button class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" 
            aria-haspopup="true" aria-expanded="false">Carrito</button>
            <div class="dropdown-menu">
                <div class="dropdown-divider" id="lista"></div>
                <p class="dropdown-item" id="total">Total $0</p>
            </div>
        </li>
    </ul>
  </header>
  <main>
<?php
    class Catalogo{
        public int $id;
        public string $producto;
        public float $precio;

        public function __construct($id, $producto, $precio) {
            $this->id = $id;
            $this->producto = $producto;
            $this->precio = $precio;

        }
    }

    $server='localhost';
    $user='root';
    $password='42330102';
    $db='Compras';
    $conn=new mysqli($server, $user, $password, $db);
    if ($conn->connect_error) {
        die("No se puede conectar a la base de datos, intentelo de nuevo!\n". $conn->connect_error);
    }
    $sql="SELECT id, producto, precio FROM catalogo LIMIT 100";
    $result=$conn->query($sql);
    $prods=[];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $p= new Catalogo($row['id'], $row['producto'], $row['precio']);
            $prods[]=$p;
        }
    } else { ?>
        <div class="alert alert-danger" role="alert">
          <h4 class="alert-heading">No hay productos disponibles</h4>
          <p>No se encontraron productos disponibles en el catalogo</p>
        </div>
    <?php }
    $conn->close();
?>
    <?php if (isset($prods)) { ?>
    <div class="container">
        <div class="row-cols-4 justify-content-center align-items-center gy-2">
            <?php foreach ($prods as $p) { ?>
            <div class="col-4">
                <div class="card text-end">
                    <svg width="400" height="180" class="card-img-top">
                    <rect x="50" y="20" rx="10" ry="10" width="150" height="150"
                    style="fill:grey;stroke-width:5;" />
                    <text fill="white" font-size="16" font-family="Serif" x="50" y="100">
                        Imagen del producto <?php echo "Imagen del producto $p->id"; ?></text>
                    Sorry, your browser does not support inline SVG.
                    </svg>
                  <div class="card-body">
                    <h4 class="card-title"><?php echo $p->producto; ?></h4>
                    <p class="card-text"><strong>$<?php echo $p->precio; ?></strong></p>
                    <button type="button" class="btn btn-primary" 
                    onclick="<?php echo "agregar(\"$p->producto\",$p->precio)"; ?>">
                        Agregar al carrito
                    </button>
                  </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <?php } ?>
    </div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
  <script>
    let carro={
    <?php foreach ($prods as $p) { ?>
    <?php echo "\"$p->producto\":0,"; ?>
    <?php } ?>
    "total":0
    }
    function agregar(producto,precio){
        let lista=document.getElementById("lista");
        if(carro[producto]==0){
            let p=document.createElement("p");
            p.setAttribute("id", producto);
            let txt=document.createTextNode(producto+" x1 - $"+precio);
            p.appendChild(txt);
            lista.appendChild(p);
        } else {
            let p=document.getElementById(producto);
            carro[producto]+=1;
            p.innerHTML=producto+" x"+carro[producto]+" - $"+(precio*carro[producto]);
        }
        carro["total"]+=precio;
        let tot=document.getElementById("total");
        tot.innerHTML="Total: $"+carro["total"];
    }
  </script>
</body>

</html>