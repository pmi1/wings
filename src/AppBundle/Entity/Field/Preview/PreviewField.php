<?php

namespace AppBundle\Entity\Field\Preview;

use AppBundle\Entity\Embed\PreviewEmbed;
use Doctrine\ORM\Mapping as ORM;

/**
 * Трейт добавляет поле с текстом краткое содержание
 *
 * @author Vladimir Podluzhnyi aka Quber <quber.one@gmail.com>
 */
trait PreviewField
{
    /**
     * @var PreviewEmbed Текст с кратким содержанием
     *
     * @ORM\Embedded(class="AppBundle\Entity\Embed\PreviewEmbed", columnPrefix="preview_")
     */
    private $preview;
    
    /**
     * @return PreviewEmbed
     */
    public function getPreview(): PreviewEmbed
    {
        return $this->preview;
    }

    /**
     * @param PreviewEmbed $preview
     *
     * @return PreviewField
     */
    public function setPreview(PreviewEmbed $preview): self
    {
        $this->preview = $preview;

        return $this;
    }
}
