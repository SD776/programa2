<?php
class InformeModel extends Query
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getEmpresa()
    {
        $sql = "SELECT * FROM configuracion";
        return $this->select($sql);
    }

    public function abrirCaja($monto, $fecha_apertura, $id_usuario)
    {
        $sql = "INSERT INTO cierre_caja (monto_inicial, fecha_apertura, id_usuario) VALUES (?,?,?)";
        $array = array($monto, $fecha_apertura, $id_usuario);
        return $this->insertar($sql, $array);
    }
    public function getCaja($id_usuario)
    {
        $sql = "SELECT * FROM cierre_caja WHERE estado = 1 AND id_usuario = $id_usuario";
        return $this->select($sql);
    }

    public function getCajas()
    {
        $sql = "SELECT c.*, u.nombre FROM cierre_caja c INNER JOIN usuarios u ON c.id_usuario = u.id";
        return $this->selectAll($sql);
    }

    public function getHistorialCajas($idCaja)
    {
        $sql = "SELECT * FROM cierre_caja WHERE id = $idCaja";
        return $this->select($sql);
    }

    //####### movimientos
    public function getVentas($campo, $id_usuario)
    {
    $sql = "SELECT SUM($campo) AS total FROM ventas WHERE metodo = 'CONTADO' AND estado = 1 AND apertura = 1 AND id_usuario = $id_usuario";
        return $this->select($sql);
    }
    public function getApartados($id_usuario)
    {
        $sql = "SELECT SUM(d.monto) AS total FROM detalle_apartado d INNER JOIN apartados a ON d.id_apartado = a.id WHERE d.apertura = 1 AND a.id_usuario = $id_usuario";
        return $this->select($sql);
    }

    public function getAbonos($id_usuario)
    {
        $sql = "SELECT SUM(a.abono) AS total FROM abonos a INNER JOIN creditos c ON a.id_credito = c.id INNER JOIN ventas v ON c.id_venta = v.id WHERE a.apertura = 1 AND v.id_usuario = $id_usuario";
        return $this->select($sql);
    }
    
    public function getCompras($id_usuario)
    {
        $sql = "SELECT SUM(total) AS total FROM compras WHERE estado = 1 AND apertura = 1 AND id_usuario = $id_usuario";
        return $this->select($sql);
    }
    public function getTotalGastos($id_usuario)
    {
        $sql = "SELECT SUM(monto) AS total FROM gastos WHERE apertura = 1 AND id_usuario = $id_usuario";
        return $this->select($sql);
    }

    public function getTotalVentas($id_usuario)
    {
        $sql = "SELECT COUNT(*) AS total FROM ventas WHERE apertura = 1 AND id_usuario = $id_usuario";
        return $this->select($sql);
    }

}
?>