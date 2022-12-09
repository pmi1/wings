<?php

namespace AppBundle\Entity\Field\Meta;

use Doctrine\ORM\Mapping as ORM;

/**
 * Трейт добавляет мета заголовок для страницы
 *
 * @author Vladimir Podluzhnyi aka Quber <quber.one@gmail.com>
 */
trait TitleField
{
    /**
     * @var string|null Мета заголовок
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @return null|string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param null|string $title
     *
     * @return TitleField
     */
    public function setTitle(string $title = null): self
    {
        $this->title = $title;

        return $this;
    }
}
