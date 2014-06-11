<?php

use JMS\Serializer\Annotation as JMS;
use Doctrine\Common\Annotations\AnnotationReader;

//Need to instantiate this to get it to work
//TODO come back to this later
$j = new JMS\ExclusionPolicy(array('value' => 'none'));

AnnotationReader::addGlobalIgnoredName('JMS\Serializer\Annotation\ExclusionPolicy');
