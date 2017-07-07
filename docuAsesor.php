<?php
requiere_once 'PHPUnit/TestCase.php';
class docuAsesor extends PHPUnit_Framework_TestCase
{
	public function testDocu()
	{
		$this->assertEquals("id1","id1");
	}
}
?>