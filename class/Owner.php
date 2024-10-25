<?php

class Owner
{
    public string $name;
    public string $address;
    public string $zipCode;
    public string $phone;
    public string $email;


    public function __construct(string $name, $address, $zipCode, $phone, $email)
    {
        $this->name = $name;
        $this->address = $address;
        $this->zipCode = $zipCode;
        $this->phone = $phone;
        $this->email = $email;
    }

    public function setOwner(string $name, string $address, string $zipCode, string $phone, string $email): void
    {
        $this->name = $name;
        $this->address = $address;
        $this->zipCode = $zipCode;
        $this->phone = $phone;
        $this->email = $email;
    }
    
    public function getOwner(): string
    {
        
        return `<img src="img/proprietaire.jpg"  alt="Proprietaire">
                    <h3 class="card__title">Nom: <span>$this->name</span></h3>
                    <p>Adresse: <span>$this->address</span></p>
                    <p>Code Postal: <span>$this->zipCode</span></p>
                    <p>Telephone: <span>$this->phone</span></p>
                    <p>Courriel: <span>$this->email</span></p>`;
    }
}


?>