<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class VisualizarTelaCadastroProfCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function buscarResultadosNaPaginaTest(AcceptanceTester $I)
    {
              $I->amOnPage('/');
              $I->click('Cadastre-se!');
              $I->click('Aluno');
              $I->seeCurrentURLEquals('/cadastroAluno.html');
    }
}
