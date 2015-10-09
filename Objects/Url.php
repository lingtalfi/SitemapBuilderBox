<?php

namespace SitemapBuilderBox\Objects;

/*
 * LingTalfi 2015-10-07
 */
class Url
{

    public $loc;
    public $lastmod;
    public $changefreq;
    public $priority;

    /**
     * @var Video
     */
    public $video;


    public function __construct()
    {

    }

    public static function create()
    {
        return new self;
    }

    public function setChangefreq($changefreq)
    {
        $this->changefreq = $changefreq;
        return $this;
    }


    public function setLastmod($lastmod)
    {
        $this->lastmod = $lastmod;
        return $this;
    }

    public function setLoc($loc)
    {
        $this->loc = $loc;
        return $this;
    }

    public function setPriority($priority)
    {
        $this->priority = $priority;
        return $this;
    }

    public function setVideo(Video $video)
    {
        $this->video = $video;
        return $this;
    }


}
