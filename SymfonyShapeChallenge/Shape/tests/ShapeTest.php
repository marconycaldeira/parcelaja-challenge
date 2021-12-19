<?php declare(strict_types=1);

use App\Entity\Circle;
use App\Entity\Rectangle;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

final class ShapeTest extends KernelTestCase
{
    private $doctrine;

    protected function setUp(): void
    {
        $kernel = self::bootKernel([
             'debug'       => true,
             'environment' => 'dev'
        ]);

        $this->doctrine = $kernel->getContainer()
            ->get('doctrine')
            ->getManager();
    }

    public function testCalculateRectangleArea(): void
    {
        $rectangles = $this->doctrine->getRepository(Rectangle::class)
            ->createQueryBuilder('r')
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult();

        foreach ($rectangles as $rec) {
            $result = ($rec->getLength() * $rec->getWidth());
            $this->assertSame($result, $rec->getArea());
        }
    }
    public function testCalculateCircleArea(): void
    {
        $circles = $this->doctrine->getRepository(Circle::class)
            ->createQueryBuilder('c')
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult();

        foreach ($circles as $rec) {
            $result = pi() * pow($rec->getRadius(), 2);
            $this->assertSame($result, $rec->getArea());
        }
    }
}
