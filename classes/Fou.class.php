<?php
class Fou_class extends PieceEchecs
{

    private string $fou;
    public function __construct(string $fou = 'F', int $x = 1, int $y = 2, int $color = 1)
    {
        $this->fou = $fou;
        parent::__construct($x, $y, $color);
    }

    public function peutAller(int $x, int $y)
    {
        $this->setX($x) = $x;
        $this->setX($y) = $y;
    }

}
?>