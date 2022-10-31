<?php

class Ciudad{
    public int $id;
    public string $nombre;
    public string $pais;
    public int $habitantes;
    public float $superficie;
    public int $metro;

    public function __construct(int $id, string $nombre, string $pais,int $habitantes, float $superficie, int $metro){
        $this->id=$id;
        $this->nombre=$nombre;
        $this->pais=$pais;
        $this->habitantes=$habitantes;
        $this->superficie=$superficie;
        $this->metro=$metro;
    }
}

function registrar(mysqli $conn, Ciudad $city){
    $sql="INSERT INTO ciudades (ciudad, pais, habitantes, superficie, tienemetro)"
    ." VALUES ('$city->nombre', '$city->pais', $city->habitantes, $city->superficie, $city->metro)";
    if ($conn->query($sql) === TRUE) {
        echo "Ciudad registrada!";
    } else {
        echo "Error: ". $conn->error;
    }

    //$conn->close();
}

function editar(mysqli $conn, Ciudad $city){
    $sql="UPDATE ciudades SET ciudad='$city->nombre', pais='$city->pais',".
    " habitantes=$city->habitantes, superficie=$city->superficie, tienemetro=$city->metro".
    " WHERE id = $city->id";
    if ($conn->query($sql) === TRUE) {
        echo "Registro actualizado!";
    } else {
        echo "Error al actualizar registro: " . $conn->error;
    }

    //$conn->close();
}

function eliminar(mysqli $conn, Ciudad $city){
    $sql="DELETE FROM ciudades WHERE id = $city->id";
    if ($conn->query($sql) === TRUE) {
        echo "Ciudad eliminada!";
    } else {
        echo "Error al eliminar la ciudad: " . $conn->error;
    }

    //$conn->close();
}
?>