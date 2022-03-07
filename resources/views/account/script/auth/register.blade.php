<script type="text/javascript">
    let element = document.querySelector('#account_stepper')
    let stepper = new KTStepper(element)
    let button_next = document.querySelector('[data-kt-stepper-action="next"]')
    let div = {
        comite: document.querySelector('#result_type_cpt_comite'),
        cse: document.querySelector('#result_type_cpt_cse'),
        collectivite: document.querySelector('#result_type_cpt_collectivite'),
        part: document.querySelector('#result_type_cpt_part'),
        pro: document.querySelector('#result_type_cpt_pro'),
    }

    div.comite.classList.add('d-none')
    div.cse.classList.add('d-none')
    div.collectivite.classList.add('d-none')
    div.part.classList.add('d-none')
    div.pro.classList.add('d-none')

        // Handle next step
    stepper.on("kt.stepper.next", function (stepper) {
        stepper.goNext(); // go next step
    });

    // Handle previous step
    stepper.on("kt.stepper.previous", function (stepper) {
        stepper.goPrevious(); // go previous step
    });

    let inputCode = document.querySelector('#kt_share_earn_link_input')
    let buttonCode = document.querySelector('#kt_share_earn_link_copy_button')

    buttonCode.addEventListener('click', e => {
        e.preventDefault()
        inputCode.value = e.target.dataset.value
    })

    Inputmask({
        mask: '+33 9 99 99 99 99'
    }).mask('#field_phone');

    const verifSiret = () => {
        let field_siret = document.querySelector('#field_siret');
        let help_siret = document.querySelector("#help_siret");
        console.log(field_siret.value.length)

        if(field_siret.value.length == 14) {
            $.ajax({
                url: '/api/verif/siret',
                method: 'POST',
                data: {"siret": field_siret.value},
                success: data => {
                    console.log(data)
                    if(data.header.statut == 404) {
                        help_siret.classList.add('text-danger')
                        help_siret.classList.remove('text-success')
                        help_siret.innerHTML = data.header.message
                        button_next.setAttribute('disabled', true)
                    } else {
                        help_siret.classList.add('text-success')
                        help_siret.classList.remove('text-danger')
                        help_siret.innerHTML = "OK"
                        button_next.removeAttribute('disabled')
                        document.querySelector('[name="company"]').value = data.etablissement.uniteLegale.denominationUniteLegale
                        document.querySelector('[name="address_pro"]').value = `${data.etablissement.adresseEtablissement.numeroVoieEtablissement} ${data.etablissement.adresseEtablissement.typeVoieEtablissement} ${data.etablissement.adresseEtablissement.libelleVoieEtablissement}`
                        document.querySelector('[name="postal_pro"]').value = `${data.etablissement.adresseEtablissement.codePostalEtablissement}`
                        document.querySelector('[name="city_pro"]').value = `${data.etablissement.adresseEtablissement.libelleCommuneEtablissement}`
                    }
                }
            })
        }
    }

    const selectTypeAccount = (select) => {

        console.log(select.value)

        if(select.value == 0) {
            console.log("comite")
            div.comite.classList.remove('d-none')
            div.cse.classList.add('d-none')
            div.collectivite.classList.add('d-none')
            div.part.classList.add('d-none')
            div.pro.classList.add('d-none')
        } else if(select.value == 1) {
            console.log("cse")
            div.comite.classList.add('d-none')
            div.cse.classList.remove('d-none')
            div.collectivite.classList.add('d-none')
            div.part.classList.add('d-none')
            div.pro.classList.add('d-none')
        } else if(select.value == 2) {
            console.log("collectif")
            div.comite.classList.add('d-none')
            div.cse.classList.add('d-none')
            div.collectivite.classList.remove('d-none')
            div.part.classList.add('d-none')
            div.pro.classList.add('d-none')
        } else if(select.value == 3) {
            console.log("tpe")
            div.comite.classList.add('d-none')
            div.cse.classList.add('d-none')
            div.collectivite.classList.add('d-none')
            div.part.classList.add('d-none')
            div.pro.classList.remove('d-none')
        } else if(select.value == 4) {
            console.log("pro")
            div.comite.classList.add('d-none')
            div.cse.classList.add('d-none')
            div.collectivite.classList.add('d-none')
            div.part.classList.add('d-none')
            div.pro.classList.remove('d-none')
        } else {
            console.log("pro")
            div.comite.classList.add('d-none')
            div.cse.classList.add('d-none')
            div.collectivite.classList.add('d-none')
            div.part.classList.remove('d-none')
            div.pro.classList.add('d-none')
        }
    }

    (function ($) {

        $("kt_docs_repeater_basic").repeater({

            initEmpty: false,
            show: function () {
                $(this).slideDown();
            },

            hide: function (deleteElement) {
                $(this).slideUp(deleteElement);
            }
        })
    })(jQuery)
</script>
