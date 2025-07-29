<h2 class="mb-4 text-center">Teremfoglalás</h2>

<div class="card p-4 shadow-sm"> <h3 class="card-title mb-4  text-dark">Teremfoglalás felvétele</h3> <div id="formMessage" class="alert d-none" role="alert"></div>

    <form id="jegyzekForm">
        <input type="hidden" name="id" id="recordId" value="">
        
        <div class="row g-3 mb-4"> <div class="col-md-6">
                <label for="court_name" class="form-label">Terem neve</label>
                <select class="form-select form-select-sm" id="court_name" name="court_name" required title="A tárgyalás helyszínéül szolgáló bíróság neve.">
                    <option value="">Válasszon...</option>
                    <?php
                    // Ide illeszd be a PHP foreach ciklust a $courts tömbhöz
                    if (!empty($courts)) {
                        foreach ($courts as $court): ?>
                            <option value="<?php echo htmlspecialchars($court); ?>"><?php echo htmlspecialchars($court); ?></option>
                        <?php endforeach;
                    }
                    ?>
                </select>
            </div>
            
            <div class="col-md-6">
                <label for="council_name" class="form-label">Rendezvény jellege</label>
                <select class="form-select form-select-sm" id="council_name" name="council_name" required title="A tárgyalást vezető bíró.">
                    <option value="">Válasszon...</option>
                    <?php
                    if (!empty($councils)) {
                        foreach ($councils as $council): ?>
                            <option value="<?php echo htmlspecialchars($council); ?>"><?php echo htmlspecialchars($council); ?></option>
                        <?php endforeach;
                    }
                    ?>
                </select>
            </div>
        </div>

        <div class="row g-3 mb-4">
            <div class="col-md-6">
                <label for="date" class="form-label">Dátum</label>
                <input type="date" class="form-control form-control-sm" id="date" name="date" required title="A tárgyalás dátuma.">
            </div>
           <div class="col-md-6">
    <div class="row g-2"> <div class="col-md-6"> <label for="kezdeti-ido" class="form-label">Idő (kezdés)</label>
            <input type="time" class="form-control form-control-sm" id="kezdeti-ido" name="kezdeti_ido"
                   placeholder="Pl. 13:00" required title="A tárgyalás kezdési időpontja.">
        </div>
        <div class="col-md-6"> <label for="befejezo-ido" class="form-label">Idő (befejezés)</label>
            <input type="time" class="form-control form-control-sm" id="befejezo-ido" name="befejezo_ido"
                   placeholder="Pl. 14:30" required title="A tárgyalás befejezési időpontja.">
        </div>
    </div>
</div>
            
        </div>

        <hr class="my-4">

        <h3 class="card-title mb-3">Személyhez köthető igények</h3>
        
        <div class="row g-3 mb-4">
    <div class="col-md-4">
        <label for="sorszam" class="form-label">Létszám</label>
        <input type="text" class="form-control form-control-sm" id="sorszam" name="sorszam" value="1" title="A tárgyalás sorszáma az adott napon.">
    </div>

    <div class="col-md-4">
        <label for="parkolo" class="form-label">Parkoló</label>
        <input type="text" class="form-control form-control-sm" id="parkolo" name="parkolo" placeholder="Pl. P1, mélygarázs" title="A parkoló azonosítója vagy leírása.">
    </div>

    <div class="col-md-4">
        <label for="rendszam" class="form-label">Rendszám</label>
        <input type="text" class="form-control form-control-sm" id="rendszam" name="rendszam" placeholder="Pl. ABC-123" required title="A jármű rendszáma.">
    </div>
</div>
        
        
        <h3 class="card-title mb-3">Eszközigények</h3>

        <div class="row g-3 mb-4">
    <div class="col-md-3"> <div class="form-check">
            <input class="form-check-input" type="checkbox" id="kave-tea-pipa" value="kave-tea" name="kave_tea">
            <label class="form-check-label" for="kave-tea-pipa">
                Kávé/Tea
            </label>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="szavazolada-pipa" value="szavazolada" name="szavazolada">
            <label class="form-check-label" for="szavazolada-pipa">
                Szavazóláda
            </label>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="kave-tea-terito" value="terito" name="terito">
            <label class="form-check-label" for="kave-tea-terito">
                Terítő
            </label>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="nevtabla" value="nevtabla" name="nevtabla">
            <label class="form-check-label" for="nevtabla">
                Névtábla (db, nevek)
            </label>
        </div>
    </div>
</div>

<div class="row g-3 mb-6">
    <div class="col-md-6">
        <label for="pogacsa-suti-kg" class="form-label">Pogácsa, édes sütemény (kg)</label>
        <textarea class="form-control form-control-sm" id="pogacsa-suti-kg" name="pogacsa_suti_kg" rows="2" placeholder="Pl. 2 kg" title="A pogácsa és édes sütemény mennyisége kilogrammban."></textarea>
    </div>

    <div class="col-md-6">
        <label for="viz-l" class="form-label">Víz (l) mentes v savas</label>
        <textarea class="form-control form-control-sm" id="viz-l" name="viz_l" rows="2" placeholder="Pl. 5 liter mentes, 3 liter savas" title="A kért víz mennyisége literben és típusa (mentes/savas)."></textarea>
    </div>

    <div class="col-md-6">
        </div>
</div>

<div class="row g-3 mb-6">
    <div class="col-md-6">
        <label for="poharak-db" class="form-label">Papír v rendes pohár (db)</label>
        <textarea class="form-control form-control-sm" id="poharak-db" name="poharak_db" rows="2" placeholder="Pl. 100 db papírpohár" title="A kért poharak száma és típusa (papír/rendes)."></textarea>
    </div>

    <div class="col-md-6">
        <label for="tanyer-db" class="form-label">Papír v rendes tányér (db)</label>
        <textarea class="form-control form-control-sm" id="tanyer-db" name="tanyer_db" rows="2" placeholder="Pl. 50 db rendes tányér" title="A kért tányérok száma és típusa (papír/rendes)."></textarea>
    </div>

    <div class="col-md-6">
        


                
</div>
 <h3 class="card-title mb-3">Teremrendezés</h3>

     <div class="row g-3 mb-4">
    <div class="col-md-4">
        <label for="asztal-db-elrendezes" class="form-label">Asztal (db, elrendezés)</label>
        <textarea class="form-control form-control-sm" id="asztal-db-elrendezes" name="asztal_db_elrendezes" rows="3" placeholder="Pl. 10 db kerek asztal, U alakban" title="Az asztalok száma és kívánt elrendezése."></textarea>
    </div>

    <div class="col-md-4">
        <label for="szek-db-elrendezes" class="form-label">Szék (db, elrendezés)</label>
        <textarea class="form-control form-control-sm" id="szek-db-elrendezes" name="szek_db_elrendezes" rows="3" placeholder="Pl. 50 db szék, színházi elrendezésben" title="A székek száma és kívánt elrendezése."></textarea>
    </div>

    <div class="col-md-4">
        <label for="blokk-igenyles" class="form-label">Hány blokkot igényel (díszterem leválasztása)</label>
        <textarea class="form-control form-control-sm" id="blokk-igenyles" name="blokk_igenyles" rows="3" placeholder="Pl. 2 blokk a terem leválasztásához" title="A díszterem leválasztásához szükséges blokkok száma és egyéb részletek."></textarea>
    </div>
</div>

        <div class="d-grid gap-2 col-6 mx-auto mt-4"> <button type="submit" class="btn btn-success btn-lg" id="jegyzekFormSubmitBtn">Rögzítés és Mentés</button>
            <button type="button" class="btn btn-secondary btn-lg" id="cancelEditBtn">Mégse</button>
        </div>
    </form>
</div>