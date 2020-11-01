<?php

use PHPUnit\Framework\TestCase;
require_once "Usaha.php";

class UsahaTests extends TestCase
{
    private $usaha;
 
    protected function setUp(): void
    {
        parent::setUp();
        $this->usaha = new Usaha();
    }
 
    protected function tearDown(): void
    {
        $this->usaha = NULL;
        parent::tearDown();
    }

     //Test of User Requirement / Specification
    //mendapatkan nilai usaha dan jika lebih dari 0 maka dikategorikan Usaha Positif
    public function testGetUsaha_req1()
    {
        $result = $this->usaha->hitung_usaha(5, 20);
        $category = $this->usaha->kategori_usaha(5,20);
        $this->assertEquals(100, $result);
        $this->assertEquals('Usaha Positif', $category);
    }

    //Test of Boundary Value Analysis
    //mendapatkan nilai usaha dan jika lebih dari 0 maka dikategorikan Usaha Positif
    public function testGetUsaha_bound2()
    {
        $result = $this->usaha->hitung_usaha(0.1, 200);
        $category = $this->usaha->kategori_usaha(0.1,200);
        $this->assertEquals(20, $result);
        $this->assertEquals('Usaha Positif', $category);
        
    }
 
    //Test of Equivalence Partitioning (+/-)
    //mendapatkan nilai usaha dan jika sama dengan 0 maka dikategorikan Usaha Nol
    public function testGetUsaha_eq3()
    {
        $result = $this->usaha->hitung_usaha(40, 0);
        $category = $this->usaha->kategori_usaha(40,0);
        $this->assertEquals(0, $result);
        $this->assertEquals('Usaha Nol', $category);
    }
    
    //Test of User Requirement / Specification
    //mendapatkan nilai usaha dan jika sama dengan 0 maka dikategorikan Usaha Nol
    public function testGetUsaha_req4()
    {
        $result = $this->usaha->hitung_usaha(0, 0);
        $category = $this->usaha->kategori_usaha(0,0);
        $this->assertEquals(0, $result);
        $this->assertEquals('Usaha Nol', $category);
    }
    
    //Boundary Value Analysis / Limit Testing
    //jika kurang dari 0 maka dikategorikan Usaha Negatif
    public function testGetUsaha_eq5()
    {
        $result = $this->usaha->hitung_usaha(20, -70);
        $category = $this->usaha->kategori_usaha(20,-70);
        $this->assertEquals(-1400, $result);
        $this->assertEquals('Usaha Negatif', $category);
    }

    //Boundary Value Analysis / Limit Testing
    //jika sama dengan 0 maka dikategorikan Usaha Nol
    public function testGetUsaha_bound6()
    {
        $result = $this->usaha->hitung_usaha(-1.25, 3);
        $category = $this->usaha->kategori_usaha(-1.25, 3);
        $this->assertEquals(-3.75, $result);
        $this->assertEquals('Usaha Negatif', $category);
    }
    
    //Boundary Value Analysis / Limit Testing
    //jika lebih dari 0 maka dikategorikan Usaha Positif
    public function testGetUsaha_bound7()
    {
        $result = $this->usaha->hitung_usaha(0.005, 7);
        $category = $this->usaha->kategori_usaha(0.005,7);
        $this->assertEquals(0.035, $result);
        $this->assertEquals('Usaha Positif', $category);
    }
    
    //Equivalence Partitioning (+/-)
    //jika lebih dari 0 maka dikategorikan Usaha Positif
    public function testGetUsaha_reqpart8()
    {
        $result = $this->usaha->hitung_usaha(-99.99, -12);
        $category = $this->usaha->kategori_usaha(-99.99,-12);
        $this->assertEquals(1199.88, $result);
        $this->assertEquals('Usaha Positif', $category);
    }
    
    //Equivalence Partitioning (+/-)
    //jika kurang dari 0 maka dikategorikan Usaha Negatif
    public function testGetUsaha_reqpart9()
    {
        $result = $this->usaha->hitung_usaha(-0.999, 3.14);
        $category = $this->usaha->kategori_usaha(-0.999, 3.14);
        $this->assertEquals(-3.13686, $result);
        $this->assertEquals('Usaha Negatif', $category);
    }
    
    //Equivalence Partitioning (+/-)
    //jika sama dengan 0 maka dikategorikan Usaha 0
    public function testGetUsaha_reqpart10()
    {
        $result = $this->usaha->hitung_usaha(0, 100000);
        $category = $this->usaha->kategori_usaha(0,100000);
        $this->assertEquals(0, $result);
        $this->assertEquals('Usaha Nol', $category);
    }

     public function testBoundary11()
    {
        $result = $this->usaha->hitung_usaha(50000, 0);
        $category = $this->usaha->kategori_usaha(500000,0);
        $this->assertEquals(0, $result);
        $this->assertEquals('Usaha Nol', $category);
    }

    public function testRequirement12()
    {
        $result = $this->usaha->hitung_usaha(5, 2);
        $category = $this->usaha->kategori_usaha(5, 2);
        $this->assertEquals(10, $result);
        $this->assertEquals('Usaha Positif', $category);
    }

    public function testRequirement13()
    {
        $result = $this->usaha->hitung_usaha(20, 0.5);
        $category = $this->usaha->kategori_usaha(20, 0.5);
        $this->assertEquals(10, $result);
        $this->assertEquals('Usaha Positif', $category);
    }

    public function testPartitioning14()
    {
        $result = $this->usaha->hitung_usaha(1, -3);
        $category = $this->usaha->kategori_usaha(1, -3);
        $this->assertEquals(-3, $result);
        $this->assertEquals('Usaha Negatif', $category);
    }

    public function testRequirement15()
    {
        $result = $this->usaha->hitung_usaha(50, 2);
        $category = $this->usaha->kategori_usaha(50,2);
        $this->assertEquals(100, $result);
        $this->assertEquals('Usaha Positif', $category);
    }

    public function testPartitioning16()
    {
        $result = $this->usaha->hitung_usaha(-1, 10);
        $category = $this->usaha->kategori_usaha(-1,10);
        $this->assertEquals(-10, $result);
        $this->assertEquals('Usaha Negatif', $category);
    }

    public function testPartitioning17()
    {
        $result = $this->usaha->hitung_usaha(-3, -8);
        $category = $this->usaha->kategori_usaha(-3,-8);
        $this->assertEquals(24, $result);
        $this->assertEquals('Usaha Positif', $category);
    }

    public function testGetUsaha_bound18()
    {
        $result = $this->usaha->hitung_usaha(-90, 2);
        $category = $this->usaha->kategori_usaha(-90,2);
        $this->assertEquals(-180, $result);
        $this->assertEquals('Usaha Negatif', $category);
    }

    public function testGetUsaha_bound19()
    {
        $result = $this->usaha->hitung_usaha(1.5, 4);
        $category = $this->usaha->kategori_usaha(1.5,4);
        $this->assertEquals(6, $result);
        $this->assertEquals('Usaha Positif', $category);
    }

    public function testGetUsaha_bound20()
    {
        $result = $this->usaha->hitung_usaha(4, 100);
        $category = $this->usaha->kategori_usaha(4,100);
        $this->assertEquals(400, $result);
        $this->assertEquals('Usaha Positif', $category);
    }

    
    //Test of User Requirement / Specification
    public function testGetUsaha_req21()
    {
        $result = $this->usaha->hitung_usaha(10,2);
        $category = $this->usaha->kategori_usaha(10,2);
        $this->assertEquals(20, $result);
        $this->assertEquals('Usaha Positif', $category);
 
    }
        //Test of User Requirement / Specification
        public function test_req22()
        {
            $result = $this->usaha->hitung_usaha(5, -3);
            $category = $this->usaha->kategori_usaha(5,-3);
            $this->assertEquals(-15, $result);
            $this->assertEquals('Usaha Negatif', $category);
        }
        //Test of User Requirement / Specification
        public function test_req23()
        {
            $result = $this->usaha->hitung_usaha(8, 0);
            $category = $this->usaha->kategori_usaha(8,0);
            $this->assertEquals(0, $result);
            $this->assertEquals('Usaha Nol', $category);
        }
        //Test of User Requirement / Specification
        public function testReqUsaha24()
        {
            $result = $this->usaha->hitung_usaha(12, 0.1);
            $category = $this->usaha->kategori_usaha(12, 0.1);
            $this->assertEquals(1.2, $result);
            $this->assertEquals('Usaha Positif', $category);
        }
        
        //Test of Equivalence Partitioning
        public function testEqUsaha25()
        {
            $result = $this->usaha->hitung_usaha(15, -2);
            $category = $this->usaha->kategori_usaha(15,-2);
            $this->assertEquals(-30, $result);
            $this->assertEquals('Usaha Negatif', $category);
        }
        
        //Test of Equivalence Partitioning
        public function testEqUsaha26()
        {
            $result = $this->usaha->hitung_usaha(-25, -4);
            $category = $this->usaha->kategori_usaha(-25, -4);
            $this->assertEquals(100, $result);
            $this->assertEquals('Usaha Positif', $category);
        }
        
        //Test of Equivalence Partitioning
        public function testEqUsaha27()
        {
            $result = $this->usaha->hitung_usaha(19, 0);
            $category = $this->usaha->kategori_usaha(19,0);
            $this->assertEquals(0, $result);
            $this->assertEquals('Usaha Nol', $category);
        }
        
        //Test of Equivalence Partitioning
        public function testEqUsaha28()
        {
            $result = $this->usaha->hitung_usaha(-13, 2);
            $category = $this->usaha->kategori_usaha(-13,2);
            $this->assertEquals(-26, $result);
            $this->assertEquals('Usaha Negatif', $category);
        }
        
        //Test of Equivalence Partitioning
        public function testBoundUsaha29()
        {
            $result = $this->usaha->hitung_usaha(-0.99, -1);
            $category = $this->usaha->kategori_usaha(-0.99, -1);
            $this->assertEquals(0.99, $result);
            $this->assertEquals('Usaha Positif', $category);
        }
        //Test of Equivalence Partitioning
        public function testBoundUsaha30()
        {
            $result = $this->usaha->hitung_usaha(-1, 0.999);
            $category = $this->usaha->kategori_usaha(-1, 0.999);
            $this->assertEquals(-0.999, $result);
            $this->assertEquals('Usaha Negatif', $category);
        }
         //Test of User Requirement / Specification
    //fungsi mampu melakukan perkalian bilangan bulat
    public function testReqUsaha31()
    {
        $result = $this->usaha->hitung_usaha(1, 2);
        $category = $this->usaha->kategori_usaha(1,2);
        $this->assertEquals(2, $result);
        $this->assertEquals('Usaha Positif', $category);
    }

    // Boundary Value Analysis / Limit Testing
    // - tak hingga | hingga | tak hingga
    // fungsi mampu melakukan perkalian bilangan nol
    public function testBoundUsaha32()
        {
            $result = $this->usaha->hitung_usaha(1234, 0);
            $category = $this->usaha->kategori_usaha(1234,0);
            $this->assertEquals(0, $result);
            $this->assertEquals('Usaha Nol', $category);
        }
    
    //Equivalence Partitioning (+/-)
    // -tak hingga | hingga | tak hingga
    // fungsi mampu melakukan perkalian bilangan bulat negatif
    public function testEqvUsaha33()
        {
            $result = $this->usaha->hitung_usaha(-1, -1);
            $category = $this->usaha->kategori_usaha(-1,-1);
            $this->assertEquals(1, $result);
            $this->assertEquals('Usaha Positif', $category);
        }
    
    //Equivalence Partitioning (+/-)
    // -tak hingga | hingga | tak hingga
    // fungsi mampu melakukan perkalian bilangan bulat negatif
    public function testEqvUsaha34()
        {
            $result = $this->usaha->hitung_usaha(-435, 8);
            $category = $this->usaha->kategori_usaha(-435, 8);
            $this->assertEquals(-3480, $result);
            $this->assertEquals('Usaha Negatif', $category);
        }
    
    // Equivalence Partitioning (+/-)
    // -tak hingga | hingga | tak hingga
    // fungsi mampu melakukan perkalian bilangan bulat negatif
    public function testEqvUsaha35()
        {
            $result = $this->usaha->hitung_usaha(90, -2);
            $category = $this->usaha->kategori_usaha(90,-2);
            $this->assertEquals(-180, $result);
            $this->assertEquals('Usaha Negatif', $category);
        }

    //Test of User Requirement / Specification
    //fungsi mampu melakukan perkalian bilangan bulat
    public function testReqUsaha36()
        {
            $result = $this->usaha->hitung_usaha(777, 3);
            $category = $this->usaha->kategori_usaha(777, 3);
            $this->assertEquals(2331, $result);
            $this->assertEquals('Usaha Positif', $category);
        }
    
    //Test of User Requirement / Specification
    //fungsi mampu melakukan perkalian bilangan bulat
    public function testReqUsaha37()
        {
            $result = $this->usaha->hitung_usaha(67, 4);
            $category = $this->usaha->kategori_usaha(67, 4);
            $this->assertEquals(268, $result);
            $this->assertEquals('Usaha Positif', $category);
        }
    
    // Boundary Value Analysis / Limit Testing
    // - tak hingga | hingga | tak hingga
    // fungsi mampu melakukan perkalian bilangan koma
    public function testBoundUsaha38()
        {
            $result = $this->usaha->hitung_usaha(2, 1.8);
            $category = $this->usaha->kategori_usaha(2, 1.8);
            $this->assertEquals(3.6, $result);
            $this->assertEquals('Usaha Positif', $category);
        }
    

    //Test of User Requirement / Specification
    //fungsi mampu melakukan perkalian bilangan bulat
    public function testReqUsaha39()
        {
            $result = $this->usaha->hitung_usaha(42, 25);
            $category = $this->usaha->kategori_usaha(42,25);
            $this->assertEquals(1050, $result);
            $this->assertEquals('Usaha Positif', $category);
        }
    
    //Test of User Requirement / Specification
    //fungsi mampu melakukan perkalian bilangan bulat
    public function testReqUsaha40()
        {
            $result = $this->usaha->hitung_usaha(100, 67);
            $category = $this->usaha->kategori_usaha(100,67);
            $this->assertEquals(6700, $result);
            $this->assertEquals('Usaha Positif', $category);
        }
    
    //Decision Table -> mencakup test of requirement, equivalence testing, boundary value analysis

    //Cause Effect Graph -> mencakup test of requirement, equivalence testing, boundary value analysis

    //Error Guessing -> negatif test 
    public function testErGuesUsaha41()
    {
        $result = $this->usaha->hitung_usaha(-1, 3);
        $category = $this->usaha->kategori_usaha(-1, 3);
        $this->assertNotEquals(-13, $result);
        $this->assertNotEquals('Usaha Positif', $category);
    }
}