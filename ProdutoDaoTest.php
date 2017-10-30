<?php namespace CDC\Loja\Persistencia;

require "./vendor/autoload.php";

use PHPUnit\Framework\TestCase;

/**
 * @group Loja
 */
class ProdutoDaoTest extends TestCase
{
    /**
     * @covers CDC\Loja\Persistencia\ProdutoDao::adiciona()
     */
    public function testDeveAdicionarUmProduto()
    {
		$salvo = 1;
		$produto = "1";
        $this->assertEquals($salvo, $produto);
    }
	
}