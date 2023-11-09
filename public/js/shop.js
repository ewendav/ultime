body = document.querySelector("body");
window.body.style.overflowY = "visible"
body.style.transition = "none";
body.style.backgroundColor = "#FAFAFA";
let navbar = document.querySelector("nav");
navbar.style.transform =" translateY(0)";

let jsSelector = document.querySelector(".jsSelector");

switch (jsSelector.value) {
    case 'shop' :
        let imgBackground = document.querySelector('.big-image-shop-container');
        imgBackground.style.backgroundImage = `url(${imgBackground.id})`

        break;

    case 'product' :

        const button = document.querySelector('.product-submit');

        let addToCartEvent = () =>{

            let form = document.forms["product-form"].elements["product-size"]

            let produitChoisit = null;

            if(form.length > 0){
                for (var i = 0; i < form.length; i++) {
                    console.log("oe")

                    if (form[i].checked) {
                        produitChoisit = form[i].value;
                        break;
                    }
                }
            }else{
                if (form.checked) {
                    produitChoisit = form.value;
                }
            }



            if (produitChoisit !== null){
                fetch(`/ajouterAuPanier/${produitChoisit}`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },

                }).then((response)=>{
                    if (response.ok) {
                        button.classList.add("product-added")
                        button.innerHTML="Produit ajouté au panier"
                        document.querySelector('.size-warning').style.display="none";
                        button.removeEventListener('click', addToCartEvent)

                        document.querySelectorAll(".taille-choice-label").forEach(el=>{
                            el.style.cursor = "auto"
                        })
                        document.querySelector('.size-warning.erreur').style.display="none";


                        if(form.length > 0){
                            form.forEach(el =>{
                                el.disabled = true;
                            })

                        }

                    }else{
                        document.querySelector('.size-warning.erreur').style.display="block";
                    }

                })
                    .catch(function(error) {
                        console.error(error);
                    });

            }else{
                document.querySelector('.size-warning.taille').style.display="block";
            }


        }

        document.addEventListener('DOMContentLoaded', function() {

            button.addEventListener('click', addToCartEvent);

        });



        let productContainer =  document.querySelector('.product-container');
        productContainer.style.marginTop = navbar.getBoundingClientRect().height + "px"

        window.addEventListener("resize", ()=>{
            productContainer.style.marginTop = navbar.getBoundingClientRect().height + "px";
            description.style.height = descriptionHeader.getBoundingClientRect().height + "px"
            livraison.style.height = livraisonHeader.getBoundingClientRect().height + "px"

            descriptionOpen = false;
            livraisonOpen = false;
        })


        let description = document.querySelector(".product-extra-description-container")
        let descriptionInnerHTML = document.querySelector(".product-extra-description-container > .innerHTML");
        let descriptionHeader = document.querySelector(".product-extra-description-container > .product-extra-header")

        description.style.height = descriptionHeader.getBoundingClientRect().height + "px"
        let descriptionOpen = false;

        let descriptionPlus = document.querySelector(".product-extra-description-container " +
            "> .product-extra-header > .plus")
        description.addEventListener("click", ()=>{

            if(descriptionOpen){
                descriptionOpen = false
                description.style.height = descriptionHeader.getBoundingClientRect().height + "px";
                descriptionPlus.innerHTML = "+"
            }else{
                descriptionPlus.innerHTML = "-"

                descriptionOpen = true

                description.style.height = descriptionInnerHTML.getBoundingClientRect().height +
                    descriptionHeader.getBoundingClientRect().height + "px";
            }


        })

        let livraison = document.querySelector(".product-extra-livraison-container")
        let livraisonInnerHTML = document.querySelector(".product-extra-livraison-container > .innerHTML");
        let livraisonHeader = document.querySelector(".product-extra-livraison-container > .product-extra-header")

        livraison.style.height = livraisonHeader.getBoundingClientRect().height + "px"
        let livraisonOpen = false;

        let livraisonPlus = document.querySelector(".product-extra-livraison-container " +
            "> .product-extra-header > .plus")
        livraison.addEventListener("click", ()=>{

            if(livraisonOpen){
                livraisonOpen = false
                livraison.style.height = livraisonHeader.getBoundingClientRect().height + "px"; + "px";
                livraisonPlus.innerHTML = "+"
            }else{
                livraisonPlus.innerHTML = "-"

                livraisonOpen = true

                livraison.style.height = livraisonInnerHTML.getBoundingClientRect().height +
                    livraisonHeader.getBoundingClientRect().height + "px";
            }
        })

        break;

}





