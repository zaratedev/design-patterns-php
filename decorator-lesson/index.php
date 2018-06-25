<?php

interface CardService {
  public function getCost();
  public function getDescription();
}

class BasicInspection implements CardService
{
  public function getCost()
  {
    return 25;
  }

    public function getDescription()
    {
        return 'Basic inspection';
    }
}

class OilChange implements CardService
{
  protected $cardService;

  public function __construct(CardService $cardService) {
    $this->cardService = $cardService;
  }
  public function getCost()
  {
    return 29 + $this->cardService->getCost();
  }

    public function getDescription()
    {
        return $this->cardService->getDescription() . ', and oil change';
    }
}

class TireRotation implements CardService
{
    protected $cardService;

    public function __construct(CardService $cardService) {
        $this->cardService = $cardService;
    }
    public function getCost()
    {
        return 15 + $this->cardService->getCost();
    }

    public function getDescription()
    {
        return $this->cardService->getDescription() . ', and a tire rotation';
    }
}

$service = new TireRotation(new BasicInspection());
echo $service->getDescription();

 ?>
