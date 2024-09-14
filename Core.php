<?php
class Core
{
    /**
     * Вычисляет котангенс
     *
     * @param $angle Угол в радианах
     *
     * @throws BreakingPointException Если значение кратно pi*n/2
     * @return float
     */
    public function ctg(int|float $angle): int|float
    {
        $tg = tan($angle);
        if(!$tg) {
            throw new BreakingPointException('Точка разрыва');
        }
        return 1/$tg;
    }
    
    public static function triangle($length){}
    public static function square($length){}
    public static function pentagon($length){}
    public static function hexagon($length){}
    public static function octagon($length){}
    public static function decagon($length){}
}
