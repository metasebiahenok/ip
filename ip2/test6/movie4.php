<?php
class Movie
{
    private $id;
    private $title;
    private $rentalPrice;

    const DISCOUNT = 10;

    public function __construct($pId, $pTitle, $pRentalPrice)
    {
        $this->id = $pId;
        $this->title = $pTitle;
        $this->rentalPrice = $pRentalPrice;
    } 

    public function __get($id)
    {
        if ($id == 'id')
        return 'You do not have permission to access id.<br>';
        else
        return $this->$id;
    }
    public function __set($propertyToModify, $value)
    {
        if ($propertyToModify == 'rentalPrice' && $value > $this->rentalPrice)
        $this->rentalPrice = $value;
        else
        echo 'Failed to modify '.$propertyToModify.'<BR>';
    }
    public function __toString()
    {
        return 'Discount = '.self::DISCOUNT.'%'.'<br>Id = '.$this->id.'<br> Title = '.$this->title.
        '<br> Rental Price (USD) = '.$this->rentalPrice;
    }

    public function conversion($country)
    {
        $rate = 1;
        switch($country)
        {
            case 'UK':
                $rate = 0.76;
                break;
                case 'Japan':
                    $rate = 110;
                    break;
        }
        return round($rate * $this ->rentalPrice, 2);

    }

    public function getId()
    {
        return $this->id;
    }
    public function setId($movieId)	
	{
		$this->id = $movieId;
	}

    public function getRentalPrice()
    {
        return $this->rentalPrice;
    }

    public function setRentalPrice($rentalPrice)	
	{
        if($rentalPrice < 0)
        {
            $this->rentalPrice = 0;
        }
        else
        {
            $this->rentalPrice = $rentalPrice;
        }
		
	}
}
?>