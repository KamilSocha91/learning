<?php
namespace App\CourseBundle\Services;

use App\CourseBundle\Repository\ImageRepository;
use App\CourseBundle\Entity\Image;

/**
 * Class ImageService
 *
 * @author    Kamil Socha <kamil.socha@gmail.com>
 */
class ImageService  {

    /**
     * @var imageRepository
     */
    private $imageRepository;

    /**
     * ImageService constructor.
     *
     * @param imageRepository $imageRepository Image repository instance
     *
     */
    public function __construct (imageRepository $imageRepository) {
        $this->imageRepository = $imageRepository;
    }

    /**
     * Save entity
     *
     * @param array   $result Request data
     *
     * @return void
     *
     * @throws \Exception
     */
    public function save($result) {
        try {
            $nodes = json_decode($result, true);
        } catch (\Exception $e) {
            throw new BadRequestHttpException("Corrupted json");
        }

        $this->imageRepository->save($nodes);
    }

    /**
     * Return Images list
     *
     * @return Image|null
     */
    public function getAllImages() {
        $query = $this->imageRepository->findAllImagesQuery();

        return $query->getArrayResult();
    }

}
