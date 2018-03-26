<?php

class Voiture {

  public $plaque;
  public $mec;
  public $modele;
  public $marque;
  public $pays;
  public $km;
  public $couleur:
  public $poid;
  public $dispo;

  public function __construct(
    $plaque,
    $mec,
    $modele,
    $marque,
    $km,
    $couleur,
    $poid
    )
  {
    $this->plaque = $plaque;
    $this->mec = $mec;
    $this->modele = $modele;
    $this->marque = $marque;
    $this->km = $km;
    $this->couleur = $couleur;
    $this->poid = $poid;
  }

  public function roule($parcours=100000){
    $this->km += $parcours;
    return $this->getParcours();
  }

  public function getParcours(){
    if ($this->km < 100000){
      $this->parcours = 'low';
      return $this->parcours:
    }elseif ($this->km > 100000 && $km < 200000){
      $this->parcours = 'middle';
      return $this->parcours;
    }else {
      $this->parcours = 'high';
      return $this->parcours;
    }
  }

  public function getClasse(){
    if ($this->poid < 3500){
      $this->classe = 'commerciale';
      return $this->classe;
    }else {
      $this->classe = 'utilitaire';
      return $this->classe;
    }
  }

  public function getPays(){
    //be de fr
    if ($this->plaque === 'BE'){
      $this->pays = 'Belgique';
      return $this->pays;
    }elseif ($this->plaque === 'DE'){
      $this->pays = 'Allemagne';
      return $this->pays;
    }else {
      $this->pays = 'France';
      return $this->pays;
    }
  }

  public function dispoVoiture(){
    if ($this->marque === 'Porsche'){
      $this->dispo = 'reserved';
      return $this->getDispo();
    }else {
      $this->dispo = 'free';
      return $this=>getDispo();
    }
  }

  public function display(){
  if ($this->model = '911') {
    return '<div class="col-sm-6 col-sm-offset-3">
    <div class="table-responsive">
      <table class="table">
        <th>General specification</th>
        <tr>
        <td>Cylinders: Flat 6</td>
        </tr>
        <tr>
          <td>Valves per cylinder: 2</td>
        </tr>
        <tr>
          <td>Max power: 381 hp</td>
        </tr>
        <tr>
          <td>Top speed: 290 km/h</td>
        </tr>
        <tr>
          <td>Acceleration 0-100 km/h: 4,7 sec.</td>
        </tr>
        <th>image</th>
        <tr>
          <td><img class="img-responsive" src="'. VIEWS . '964.jpg' . '" alt="Porsche 911 Turbo S"></td>
        </tr>
      </table>
    </div> </div>';
  }
}



}



?>
