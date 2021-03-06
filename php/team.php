<?php

/**
 * Models a Major League Baseball team using its name, wins and losses
 */
class Team {

  private $name;
  private $wins;
  private $loss;

  public function __construct($name, $wins, $loss) {
    $this->name = $name;
    $this->wins = $wins;
    $this->loss = $loss;
  }

  public function getName() {
    return $this->name;
  }

  public function getWins() {
    return $this->wins;
  }

  public function getLosses() {
    return $this->loss;
  }

  /**
   * Computes the team win percentage
   */
  public function getWinPercentage() {
    return $this->wins / ($this->wins + $this->loss);
  }

  public function __toString() {
    return $this->name . " (" . $this->wins . ", " . $this->loss . ")";
  }

}

?>