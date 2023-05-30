<?php

namespace App\Http\Controllers;

use App\Action\Player\ActionSaveGame;
use App\Models\Game;
use App\Models\Player;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;

class GameController extends Controller
{

    private function prepareGame()
    {
        $this->player1 = new Player();
        $this->player2 = new Player();
    }

    public function createGame(Request $request)
    {
        $player1 = Player::find($request->player1_id);
        $player2 = Player::find($request->player2_id);

        $game = (new Game())->makeGame($player1, $player2);

        $game = ActionSaveGame::saveGame($game);

        return response()->json($game);
    }

    public function createMove()
    {
        $game = request()->game; // represente um jogo salvo no banco
        // jogodar que esta jogando nesta jogada
        // a posicao
        // fazer a chamada para a classe game

        return $game; // json -> de todos os atributos e vinculos do game
    }
}
