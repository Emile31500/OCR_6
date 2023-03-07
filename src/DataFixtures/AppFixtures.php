<?php

namespace App\DataFixtures;

use App\Entity\Figure;
use App\Entity\VideoFigure;
use App\Entity\PhotoFigure;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // Les grabs 
        $this->addFigure('Nose grab',  'Saisie de la partie avant de la planche, avec la main avant', $manager);
        $this->addFigure('Japan air', "Saisie de l'avant de la planche, avec la main avant, du côté de la carre frontside.", $manager);
        $this->addFigure('Seat belt', "Saisie du carre frontside à l'arrière avec la main avant.", $manager);
        $this->addFigure('Truck driver', "Saisie du carré avant et carré arrière avec chaque main (comme tenir un volant de voiture).", $manager);
        $this->addFigure('Mute', "Saisie de la carre frontside de la planche entre les deux pieds avec la main avant.", $manager);
        $this->addFigure('Indy', "Saisie de la carre frontside de la planche, entre les deux pieds, avec la main arrière.", $manager);
        $this->addFigure('Stalefish', "Saisie de la carre backside de la planche entre les deux pieds avec la main arrière.", $manager);
        $this->addFigure('Style week', "saisie de la carre backside de la planche, entre les deux pieds, avec la main avant.", $manager);
    
        // Rotation
        $this->addFigure('Rotation',  ' <table><thead><tr><th>Nom </th><th>Mouvement</th></tr></thead><tbody><tr><th>180</th><th>demi tour</th></tr><tr><td>360 ou 3 6 </td><td>un tour complet</td></tr><tr><td>540 ou 5 4</td><td>5 ¼ de tour</td></tr><tr><td>720 ou 7 2</td><td>2 tours complet</td></tr><tr><td>900</td><td>2 tours et demi</td></tr><tr><td>1080 ou bigfoot </td><td>trois tours complet</td></tr></tbody>
</table>', $manager);
    
        $this->addFigure('Flip', "Rotation autour d’un axe horizontal.", $manager);
        $this->addFigure('Rotation desaxe', "rotation autour d’un axe horizontal par rapport au corps mais désaxée par rapport à l’environnement.", $manager);
        $this->addFigure('Slide', "Glisser avec le snowboard sur un rampe faîtes pour ça.", $manager);


    }

    public function addFigure(string $nom, string $article, $manager): void{

        $figure = new Figure;
        $photo = new PhotoFigure;

        $slug = str_replace(' ', '-', $nom);
        $slug = strtolower($slug);

        $photoUrl = str_replace(' ', '_', $nom);
        $photoUrl = strtolower($photoUrl);
        $photoUrl .= '_1.jpg';

        $figure->setNom($nom);
        $figure->setSlug($slug);
        $figure->setArticle($article);
        
        $photo->setUrl($photoUrl);
        $photo->setNom($nom);
        $photo->setFigure($figure);

        $figure->addPhotoFigure($photo);

        $manager->persist($figure);
        $manager->persist($photo);
        $manager->flush();


    }
}
