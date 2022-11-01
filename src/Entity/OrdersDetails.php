<?php

namespace App\Entity;

use App\Repository\OrdersDetailsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OrdersDetailsRepository::class)]
class OrdersDetails
{


    #[ORM\Column]
    private ?int $quantity = null;

    #[ORM\Id]
    #[ORM\ManyToOne(inversedBy: 'ordersDetails')]
    private ?orders $orders = null;

    #[ORM\Id]
    #[ORM\ManyToOne(inversedBy: 'ordersDetails')]
    #[ORM\JoinColumn(nullable: false)]
    private ?products $products = null;



    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getOrders(): ?orders
    {
        return $this->orders;
    }

    public function setOrders(?orders $orders): self
    {
        $this->orders = $orders;

        return $this;
    }

    public function getProducts(): ?products
    {
        return $this->products;
    }

    public function setProducts(?products $products): self
    {
        $this->products = $products;

        return $this;
    }
}
