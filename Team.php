<?php
class Team {
    private $name;
    private $totalPoints = 0;
    private $totalGames = 0;
    private $totalGoals = 0;


    public function __construct($name) {
        $this->name = $name;
    }

    public function finalScore($homeScore, $opponentScore) {
       
        $this->totalGoals += $homeScore;

        
        $this->totalGames += 1;

        
        if ($homeScore > $opponentScore) {
          
            $this->totalPoints += 3;
        } elseif ($homeScore == $opponentScore) {
           
            $this->totalPoints += 1;
        }
      
    }

    public function getName() {
        return $this->name;
    }

    
    public function getTotalPoints() {
        return $this->totalPoints;
    }

    
    public function getTotalGames() {
        return $this->totalGames;
    }

    public function getTotalGoals() {
        return $this->totalGoals;
    }

    public function getGoalAverage() {
        if ($this->totalGames == 0) {
            return 0;
    }
        return $this->totalGoals / $this->totalGames;

    }

}
?>



