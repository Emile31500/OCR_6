<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class PhotoFigureService {

    private $params;

    public function __construct(ParameterBagInterface $params){

        $this->params = $params;
    }

    public function add(UploadedFile $picture, ?int $width=500, int $heigth=500): string
    {

        $fichier = uniqid().'jpg';
        $pictureInf = getimagesize($picture);

        if ($pictureInf["mime"] === 'image/png' || $pictureInf["mime"] === 'image/jpg' || $pictureInf["mime"] === 'image/webp' && $pictureInf === true) {

            $path = $this->params->get('figure_image_directory');
            $picture->move($path.'/', $fichier);
            return $fichier;

        }
    
    }

    public function delete(string $fichier) : bool
    {
        $success = false;
        if ($fichier !== 'default.webp')
        {
            $path = $this->params->get('figure_image_directory');

            $imgToDelete = $path.'/'.$fichier;
            if (file_exists($imgToDelete)){

                unlink($imgToDelete);
                $success = true;

            }
            
        }

        return $success;

    }

}

