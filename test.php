<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require 'conversion.php'; 

final class ConversionTest 
{
    public function testConversion(): void
    {
        $_POST['moneda-uno'] = 'USD';
        $_POST['moneda-dos'] = 'EUR';
        $_POST['cantidad-uno'] = 100;

        ob_start();
        include 'conversion.php';
        $output = ob_get_clean();

        $this->assertStringContainsString('equivale a', $output);
    }
}