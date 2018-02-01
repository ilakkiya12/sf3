<?php
/**
 * Created by PhpStorm.
 * User: metinet
 * Date: 1/31/18
 * Time: 7:53 AM
 */

namespace AppBundle\Forms;
use Symfony\Component\Validator\Constraints as Assert;

class PropositionSubmission
{
    /** @Assert\NotBlank */
    public $eventName;

    /** @Assert\DateTime(format="Y-m-d\TH:i") */
    /** @Assert\NotBlank */
    public $eventDate;

    public $boughtAtPrice;

}