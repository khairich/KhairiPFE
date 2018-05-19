<?php
namespace Khairi\SNEspritBundle\Form\Type;

use Khairi\SNEspritBundle\Entity\Tag;
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;

class TagsTransformer implements DataTransformerInterface
{
   

    public function transform($value)
    {
         
        return implode(',', $value);
        //return "Hello khairi";
    }

    public function reverseTransform($string)
    {
       // transform the string back to an array
        $tagname=explode(',',$string);
        $tags = [];
        foreach ($tagname as $name) {
            $tag = new Tag();
            $tag->setName($name);
            $tags[] = $tag;
        }
        return $tags;
    }
}