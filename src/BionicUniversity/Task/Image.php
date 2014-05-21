<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 5/14/14
 * Time: 10:45 AM
 */
class Image extends \BionicUniversity\Task\AbstractResizer
{
    /**
     * @var image
     */
    var $image;
    /**
     * @var int
     */
    var $height;
    /**
     * @var  int
     */
    var $width;

    /**
     * @param $image
     */
    public function __constructor($image)
    {
      $this->image = $image;
      $this->setHeight(imagesy($this->image));
      $this->setWidth(imagesx($this->image));

    }

    /**
     * @param int $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @param int $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
        return $this->height;
    }

    /**
     * @return array
     */
    public function thumbnail()
    {
        $width  = $this->getWidth();
        $height = $this->getHeight();
        $centralPointX = (int) $width / 2;
        $centralPointY = (int) $height / 2;

        $startX = 0;
        $startY = 0;
        $endX   = 0;
        $endY   = 0;


        if($width > $height) {
            $startX = $centralPointX - (int)$centralPointY / 2;
            $endX   = $centralPointX + (int)$centralPointY / 2;

            $startY = 0;
            $endY   = $height;
        }
        if($width < $height) {
            $startY = $centralPointY - (int)$centralPointX / 2;
            $endY   = $centralPointY + (int)$centralPointX / 2;

            $startX = 0;
            $endX = $width;
        }
        if($width == $height) {
            $startX = 0;
            $endX   = $width;

            $startY = 0;
            $endY   = $height;
        }

        return array($startX, $endX, $startY, $endY);

    }
}