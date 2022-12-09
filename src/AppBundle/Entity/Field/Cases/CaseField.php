<?php

namespace AppBundle\Entity\Field\Cases;

use AppBundle\Entity\Embed\CaseEmbed;
use Doctrine\ORM\Mapping as ORM;

/**
 * Трейт добавляет поле с падежами
 *
 * @author Vladimir Podluzhnyi aka Quber <quber.one@gmail.com>
 */
trait CaseField
{
    /**
     * @var CaseEmbed Падежи
     *
     * @ORM\Embedded(class="AppBundle\Entity\Embed\CaseEmbed", columnPrefix="case_")
     */
    private $case;

    /**
     * @return CaseEmbed
     */
    public function getCase(): CaseEmbed
    {
        return $this->case;
    }

    /**
     * @param CaseEmbed $case
     *
     * @return CaseField
     */
    public function setCase(CaseEmbed $case): CaseField
    {
        $this->case = $case;

        return $this;
    }
}
