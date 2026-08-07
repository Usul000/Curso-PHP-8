<?php
declare(strict_types=1);

require_once __DIR__ . '/ivanc_e1.php';

class ExcepcionNomina extends Exception {
    public function __construct(string $mensaje, int $codigo = 0, ?Throwable $anterior = null) {
        parent::__construct($mensaje, $codigo, $anterior);
    }
}

class XestorNominas {
    private array $empregados = [];
    
    public function engadirEmpregado(Empregado $empregado): void {
        $this->empregados[] = $empregado;
    }
    
    public function listarEmpregados(): array {
        return $this->empregados;
    }
    
    public function pagarNominas(): float {
        $total = 0.0;
        foreach ($this->empregados as $empregado) {
            $soldo = $empregado->calcularSoldo();
            $total += $soldo;
            
            if ($soldo < 500) {
                throw new ExcepcionNomina(
                    sprintf("O soldo de %s é inferior ao mínimo (500€)", $empregado->getNome())
                );
            }
        }
        return $total;
    }
}
?>
