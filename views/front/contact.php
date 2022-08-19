<?php 
$MyMailAdress="charlotte.christmas@escen.fr";
// si le bouton "Envoyer" est cliqué
if(isset($_POST['send'])) {
    //on vérifie que le champ mail est correctement rempli
    if(empty($_POST['mail'])) {
        echo "the field mail is empty";
    } else {
        //on vérifie que l'adresse est correcte
        if(!preg_match("#^[a-z0-9_-]+((\.[a-z0-9_-]+){1,})?@[a-z0-9_-]+((\.[a-z0-9_-]+){1,})?\.[a-z]{2,}$#i",$_POST['mail'])){
            echo "The email address is incorrect";
        }else{
            //on vérifie que le champ sujet est correctement rempli
            if(empty($_POST['sujet'])) {
                echo "L  sujet est vide";
            }else{
                //on vérifie que le champ message n'est pas vide
                if(empty($_POST['message'])) {
                    echo "Le champ message est vide";
                }else{
                    //tout est correctement renseigné, on envoi le mail
                    //on renseigne les entêtes de la fonction mail de PHP
                    $Entetes = "MIME-Version: 1.0\r\n";
                    $Entetes .= "Content-type: text/html; charset=UTF-8\r\n";
                    $Entetes .= "From: Nom de votre site <".$_POST['mail'].">\r\n";//de préférence une adresse avec le même domaine de là où, vous utilisez ce code, cela permet un envoie quasi certain jusqu'au destinataire
                    $Entetes .= "Reply-To: Nom de votre site <".$_POST['mail'].">\r\n";
                    //on prépare les champs:
                    $Mail=$_POST['mail']; 
                    $Sujet='=?UTF-8?B?'.base64_encode($_POST['sujet']).'?=';//Cet encodage (base64_encode) est fait pour permettre aux informations binaires d'être manipulées par les systèmes qui ne gèrent pas correctement les 8 bits (=?UTF-8?B? est une norme afin de transmettre correctement les caractères de la chaine)
                    $Message=htmlentities($_POST['message'],ENT_QUOTES,"UTF-8");//htmlentities() converti tous les accents en entités HTML, ENT_QUOTES Convertit en + les guillemets doubles et les guillemets simples, en entités HTML
                    //en fin, on envoi le mail
                    if(mail($MyMailAdress,$Sujet,nl2br($Message),$Entetes)){//la fonction nl2br permet de conserver les sauts de ligne et la fonction base64_encode de conserver les accents dans le titre
                        echo "Le mail à été envoyé avec succès!";
                    } else {
                        echo "Une erreur est survenue, le mail n'a pas été envoyé";
                    }
                }
            }
        }
    }
} ?>

<section class="formulaire">
            <h1>Get in Touch</h1>
            <p>Got a comment or a more general 
                question? Let me know</p>
            <form>
                <div>
                    <label for="firstname">First Name*</label>
                </div>
                <div>
                    <input class="firstname" type="firstname" id="firstname" name="firstname" placeholder="Your first name">
                </div>
                <div>
                    <label for="lastname">Last Name*</label>
                </div>
                <div>
                    <input class="lastname" type="lastname" id="lastname" name="lastname" placeholder="Your last name">
                </div>
                <div>
                    <label for="email">Email*</label>
                </div>
                <div>
                    <input class="mail" type="mail" id="mail" name="mail"placeholder="Your email address">
                </div>
                <div>
                    <label for="message">Your Message*</label>
                </div>
                <textarea name="comment" rows="12" cols="35" placeholder="Leave me your message here"></textarea>
                <div>
                    <input class="submitcontact" type="submit" name="SUBMIT" id="submit" value="SUBMIT">
                </div>
            </form>
        </section>
        <section class="emailform">
            <p>
                Business inquiries :
            </p>
<p> Partnerships - partners@charlie.com</p>
<p>Advertisers - advertising@charlie.com</p>
            
        </section>
   