<?php
include '../admin/config/config.php';
include '../admin/config/bdd.php';

        $id_piece = 7;
        $objets = array(44,45,46,47,66,67,68);

foreach ($objets as $id_objet) {
//            $sql = 'INSERT INTO objet_piece (id_piece, id_objet) VALUES ('. $id_piece .', '. $id_objet .')';
//            var_dump($sql);
//            $req = $bdd->prepare($sql);
//            $req->execute();
}

include '../include/head.php';
include '../include/menu.php';
?>
    <h1 class="text-center mt-5">Site web Locabox simulateur</h1>
    <div class="simulateur">
        <div class="objet my-2" data-surface="5" data-volume="2">
            <a href="" class="plus">+</a>
            <input type="text" class="nb" value="0">
            <a href="" class="moins">-</a>
            <span>objet 1</span>
            <img src="" alt="">
        </div>
        <div class="objet my-2" data-surface="4" data-volume="3">
            <a href="" class="plus">+</a>
            <input type="text" class="nb" value="0">
            <a href="" class="moins">-</a>
            <span>objet 2</span>
            <img src="" alt="">
        </div>
        <div class="objet my-2" data-surface="6" data-volume="8">
            <a href="" class="plus">+</a>
            <input type="text" class="nb" value="0">
            <a href="" class="moins">-</a>
            <span>objet 3</span>
            <img src="" alt="">
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="metrage" id="surface" value="">
            <label class="form-check-label" for="surface">
                m<sup>2</sup>
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="metrage" id="volume" value="">
            <label class="form-check-label" for="volume">
                m<sup>3</sup>
            </label>
        </div>
        <div class="form-group">
            <label for="resultat">Resultat :</label>
            <input type="text" value="" id="resultat"><span id="metrage_resultat">m²</span>
        </div>
    </div>


<?php
include '../include/bottom.php';
?>
<script>
    let btn_plus = $('.plus');
    btn_plus.click(function (e){
        e.preventDefault();
        let objet = $(this).parent();
        let input = objet.find('.nb');
        let nb = input.val();
        nb = parseInt(nb) + 1;
        input.val(nb);
        calcul();
    })

    let btn_moins = $('.moins');
    btn_moins.click(function (e){
        e.preventDefault();
        let input = $(this).parent().find('.nb');
        let nb = input.val();
        if (nb > 0){
            nb = parseInt(nb) - 1;
            input.val(nb);
        }
        calcul();
    })
    if ($('#surface').is(":checked")){
        alert('ok surface');
    }
    if ($('#volume').is(":checked")){
        alert('ok volume');
    }


    function calcul(){
        let total_surface = 0;
        let total_volume = 0;

        $(".nb").each(function () {
            let surface = parseFloat($(this).parent().attr('data-surface'));
            let volume = parseFloat($(this).parent().attr('data-volume'));
            let nb = parseInt($(this).parent().find('.nb').val());
            console.log(surface, volume, nb);
            total_surface = total_surface + (nb*surface);
            total_volume = total_volume + (nb*volume);
        });
        console.log('La surface total est de : ', total_surface);
        console.log('Le volume total est de : ', total_volume);
    }

</script>