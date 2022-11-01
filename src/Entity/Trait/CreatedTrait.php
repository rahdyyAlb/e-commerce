<?php

namespace App\Entity\Trait;

use Doctrine\ORM\Mapping as ORM;

trait CreatedTrait{
    #[ORM\Column(type: 'datetime', options: ['default'=>'CURRENT_TIMESTAMP'])]
    private $createda_at ;

    public function getCreatedaAt(): ?\DateTimeImmutable
    {
        return $this->createda_at;
    }

    public function setCreatedaAt(\DateTimeImmutable $createda_at): self
    {
        $this->createda_at = $createda_at;

        return $this;
    }

}
