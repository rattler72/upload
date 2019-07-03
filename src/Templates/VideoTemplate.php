<?php

namespace Flagrow\Upload\Templates;

class VideoTemplate extends AbstractTemplate
{
    /**
     * @var string
     */
    protected $tag = 'video';

    /**
     * {@inheritdoc}
     */
    public function name()
    {
        return $this->trans('flagrow-upload.admin.templates.video');
    }

    /**
     * {@inheritdoc}
     */
    public function description()
    {
        return $this->trans('flagrow-upload.admin.templates.video_description');
    }

    /**
     * The xsl template to use with this tag.
     *
     * @return string
     */
    public function template()
    {
        return $this->getView('flagrow.download.templates::video');
    }

    /**
     * The bbcode to be parsed.
     *
     * @return string
     */
    public function bbcode()
    {
        return '[url={URL}]{SIMPLETEXT1}[/url]';
    }
}
