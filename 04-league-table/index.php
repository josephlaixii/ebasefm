<?php

class LeagueTable
{
	public function __construct(array $players)
	{
		$this->standings = [];
		foreach ($players as $index => $p) {
			$this->standings[$p] = [
				'index'        => $index,
				'games_played' => 0,
				'score'        => 0
			];
		}
	}

	public function recordResult($player, $score)
	{
		$this->standings[$player]['games_played']++;
		$this->standings[$player]['score'] += $score;
	}

	public function playerRank($rank)
	{
		return '';
	}
}

$table = new LeagueTable(array('Mike', 'Chris', 'Arnold'));
$table->recordResult('Mike', 2);
$table->recordResult('Mike', 3);
$table->recordResult('Arnold', 5);
$table->recordResult('Chris', 5);
echo $table->playerRank(1);
