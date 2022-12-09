<?php

namespace AppBundle\Entity\Field\Cases;

use Doctrine\ORM\Mapping as ORM;

/**
 * Трейт добавляет поле с именительным падежом
 *
 * @author Vladimir Podluzhnyi aka Quber <quber.one@gmail.com>
 */
trait NominativeField
{
    /**
     * @var string|null Именительный падеж
     *
     * @ORM\Column(name="nominative", type="string", length=255, nullable=true)
     */
    private $nominative;

    /**
     * @return null|string
     */
    public function getNominative()
    {
        return $this->nominative;
    }

    /**
     * @param null|string $nominative
     *
     * @return NominativeField
     */
    public function setNominative(string $nominative = null)
    {
        $this->nominative = $nominative;

        return $this;
    }
}
