<?php

use App\Services\InterventionService;

test('extracts the type correctly', function ($message, $village) {
    expect(resolve(InterventionService::class)->extractType($message))->toBe($village);
})->with([
    ['DECLENCHEMENT SYSTEMATIQUE DEPART : TP2_PYRO 22 [V_TP1000] - ALARME AUTOMATIQUE (BOGIS-BOSSEY - INSTITUT OECUMENIQUE (ALR);BATIMENT PRINCIPAL;CHEMIN CHENEVIERE 2)', 'ALARME AUTOMATIQUE'],
    ['DECLENCHEMENT SYSTEMATIQUE DEPART : TP2_PYRO 22 [V_TP1000] - TECHNIQUE FUMEE SUSPECTE (CHAVANNES-DES-BOIS - TRONCON - ROUTE DE LA BRANVAUDE)', 'TECHNIQUE FUMEE SUSPECTE'],
    ['DECLENCHEMENT SYSTEMATIQUE DEPART : VCI_PYRO 01 - OFFICIER DE SERVICE (COMMUGNY - ROUTE DE COPPET 8)', 'OFFICIER DE SERVICE'],
    ['DECLENCHEMENT SYSTEMATIQUE DEPART : VTU_PYRO 72 [MIS_HYD] - HYDROCARBURE ROUTE (FOUNEX - CARREFOUR CHAMPS BLANCS)', 'HYDROCARBURE ROUTE'],
    ['DECLENCHEMENT SYSTEMATIQUE DEPART : PONT_PYRO 73 [MIS_INOND] - TECHNIQUE INONDATION DE CHAUFFERIE (MIES - CHEMIN DE LA FAVERGE 10A)', 'TECHNIQUE INONDATION DE CHAUFFERIE'],
    ['DECLENCHEMENT SYSTEMATIQUE DEPART : TP2_PYRO 22, M_ACCOMP 01, VM_PYRO 61 [V_MOD-ACC] - FEU DE CHAUFFERIE (TANNAY - ROUTE DE MALCROISSANT 11)', 'FEU DE CHAUFFERIE'],
    ['DECLENCHEMENT SYSTEMATIQUE DEPART : EA_PYRO 11 - TENTATIVE DE SUICIDE (EYSINS - ROUTE DU PETIT-EYSINS 10)', 'TENTATIVE DE SUICIDE'],
]);

test('extracts the village correctly', function ($message, $village) {
    expect(resolve(InterventionService::class)->extractVillage($message))->toBe($village);
})->with([
    ['DECLENCHEMENT SYSTEMATIQUE DEPART : TP2_PYRO 22 [V_TP1000] - ALARME AUTOMATIQUE (BOGIS-BOSSEY - INSTITUT OECUMENIQUE (ALR);BATIMENT PRINCIPAL;CHEMIN CHENEVIERE 2)', 'Bogis-Bossey'],
    ['DECLENCHEMENT SYSTEMATIQUE DEPART : TP2_PYRO 22 [V_TP1000] - ALARME AUTOMATIQUE (CHAVANNES-DE-BOGIS - MANOR CENTRE COMMERCIAL (ALR);MALL ET BOUTIQUE;CHEMIN INDUSTRIEL 1)', 'Chavannes-de-Bogis'],
    ['DECLENCHEMENT SYSTEMATIQUE DEPART : TP2_PYRO 22 [V_TP1000] - TECHNIQUE FUMEE SUSPECTE (CHAVANNES-DES-BOIS - TRONCON - ROUTE DE LA BRANVAUDE)', 'Chavannes-des-Bois'],
    ['DECLENCHEMENT SYSTEMATIQUE DEPART : VCI_PYRO 01 - OFFICIER DE SERVICE (COMMUGNY - ROUTE DE COPPET 8)', 'Commugny'],
    ['DECLENCHEMENT SYSTEMATIQUE DEPART : TP2_PYRO 22 [V_TP1000] - TECHNIQUE ODEUR DE GAZ (COPPET - CHEMIN DES PESSULES 21A)', 'Coppet'],
    ['DECLENCHEMENT SYSTEMATIQUE DEPART : VTU_PYRO 72 [MIS_HYD] - HYDROCARBURE ROUTE (FOUNEX - CARREFOUR CHAMPS BLANCS)', 'Founex'],
    ['DECLENCHEMENT SYSTEMATIQUE DEPART : PONT_PYRO 73 [MIS_INOND] - TECHNIQUE INONDATION DE CHAUFFERIE (MIES - CHEMIN DE LA FAVERGE 10A)', 'Mies'],
    ['DECLENCHEMENT SYSTEMATIQUE DEPART : TP2_PYRO 22, M_ACCOMP 01, VM_PYRO 61 [V_MOD-ACC] - FEU DE CHAUFFERIE (TANNAY - ROUTE DE MALCROISSANT 11)', 'Tannay'],
    ['DECLENCHEMENT SYSTEMATIQUE DEPART : EA_PYRO 11 - TENTATIVE DE SUICIDE (EYSINS - ROUTE DU PETIT-EYSINS 10)', null],
]);