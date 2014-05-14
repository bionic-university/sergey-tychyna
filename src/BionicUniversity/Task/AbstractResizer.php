<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 5/14/14
 * Time: 10:39 AM
 */
namespace BionicUniversity\Task;

abstract class AbstractResizer implements ImageInterface
{
    abstract public function thumbnail();
}