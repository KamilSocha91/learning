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
   * Return image
   *
   * @return image|null
   */
  public function getImage($id = null) {
    $query = $this->imageRepository->findImageById($id);
    return  $query->getResult();
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
  public function save($data, $quesiton) {
    $id = $this->imageRepository->save($data, $quesiton);

    return $id;
  }

}
