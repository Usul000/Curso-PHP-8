<?php
declare(strict_types=1);

interface Cobravel {
    public function calcularSoldo(): float;
}

trait Identificable {
    private static int $contador = 0;
    private int $id;
    
    public function __construct() {
        self::$contador++;
        $this->id = self::$contador;
    }
    
    public function obterId(): int {
        return $this->id;
    }
    
    public static function contarEmpregados(): int {
        return self::$contador;
    }
}

abstract class Empregado implements Cobravel {
    use Identificable;
    
    protected string $nome;
    protected float $soldoBase;
    
    public function __construct(string $nome, float $soldoBase) {
        $this->nome = $nome;
        $this->soldoBase = $soldoBase;
    }
    
    public function getNome(): string {
        return $this->nome;
    }
    
    public function getSoldoBase(): float {
        return $this->soldoBase;
    }
    
    abstract public function calcularSoldo(): float;
    abstract public function __toString(): string;
}

class EmpregadoFixo extends Empregado {
    private float $comision;
    
    public function __construct(string $nome, float $soldoBase, float $comision) {
        parent::__construct($nome, $soldoBase);
        $this->comision = $comision;
    }
    
    public function calcularSoldo(): float {
        return $this->soldoBase + $this->comision;
    }
    
    public function __toString(): string {
        return sprintf(
            "[%d] %s - Fixo, soldo: %.0f€",
            $this->obterId(),
            $this->nome,
            $this->calcularSoldo()
        );
    }
}

class EmpregadoPorHoras extends Empregado {
    private int $horas;
    private float $prezoHora;
    
    public function __construct(string $nome, float $prezoHora, int $horas) {
        parent::__construct($nome, $prezoHora * $horas);
        if ($horas < 0 || $horas > 200) {
            throw new InvalidArgumentException("As horas deben estar entre 0 e 200");
        }
        $this->horas = $horas;
        $this->prezoHora = $prezoHora;
    }
    
    public function calcularSoldo(): float {
        return $this->prezoHora * $this->horas;
    }
    
    public function __toString(): string {
        return sprintf(
            "[%d] %s - Por horas, soldo: %.0f€",
            $this->obterId(),
            $this->nome,
            $this->calcularSoldo()
        );
    }
}
?>
