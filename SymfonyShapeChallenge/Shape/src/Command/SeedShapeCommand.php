<?php

namespace App\Command;

use App\Entity\Circle;
use App\Entity\Rectangle;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SeedShapeCommand extends Command
{
    // the name of the command (the part after "bin/console")
    protected static $defaultName = 'app:seed-shape';

    protected $doctrine;
    protected $entityManager;
    /**
     * @param ManagerRegistry $doctrine
     */
    public function __construct(ManagerRegistry $doctrine)
    {
        $this->doctrine = $doctrine;
        $this->entityManager = $this->doctrine->getManager();

        parent::__construct();

    }

    protected function configure(): void
    {
        // ...
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
       
        for ($i = 1; $i <= 80; $i++) {

            $width = rand(1, 100);
            $height = rand(1, 100);

            $rectangle = new Rectangle();        
            $rectangle->setName(sprintf("Rectangle %d x %d", $width, $height));
            $rectangle->setWidth($width);
            $rectangle->setLength($height);

            $this->entityManager->persist($rectangle);

            $circle = new Circle();        
            $circle->setName(sprintf("Circle with %d of radius", $width));
            $circle->setRadius($width);
            
            $this->entityManager->persist($circle);

        }

        $this->entityManager->flush();

        return 1;
    }
}
