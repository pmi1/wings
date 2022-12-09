<?php

namespace AppBundle\Entity\Field;

use Doctrine\ORM\Mapping as ORM;

/**
 * @author Vladimir Podluzhnyi aka Quber <quber.one@gmail.com>
 */
trait TitleField
{
    /**
     * @var string Заголовок
     *
     * @ORM\Column()
     */
    private $title;

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return TitleField
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }
}
