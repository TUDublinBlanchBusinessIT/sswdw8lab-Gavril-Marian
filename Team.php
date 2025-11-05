<?php
class Team {
    private $teamName;
    private $totalPoints;
    private $totalGoals;
    private $totalGames;

    public function __construct($name) {
        $this->teamName = $name;
        $this->totalPoints = 0;
        $this->totalGoals = 0;
        $this->totalGames = 0;
    }

    public function finalScore($homeGoals, $opposingGoals) {
        $this->totalGoals += $homeGoals;
        $this->totalGames += 1;

        if ($homeGoals > $opposingGoals) {
            $this->totalPoints += 3;
        } elseif ($homeGoals == $opposingGoals) {
            $this->totalPoints += 1;
        }
    }
}
?>
