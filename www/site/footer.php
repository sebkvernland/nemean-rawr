<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Ragnar
 * Date: 29.06.12
 * Time: 13:29
 * To change this template use File | Settings | File Templates.
 */
?>

        <div class="push"></div>

    </div>

    <footer>
        <br>


       <div id="navfooter"> <a href="?m=articles&act=view&artID=37"> Kontakt</a> - <a href="?m=articles&act=view&artID=36">Om oss</a> - <a href="https://www.facebook.com/nemeanlan"> Facebook </a> - <a href="https://twitter.com/NemeanLAN"> Twitter </a> - <a href=""> Sponsorer </a> </div>
      <br> <div id="copyright"> &copy; 2012 Nemean </div>
    </footer>

    <div id="qRegister">

        <a class="X" href="#">X</a>
        <form id="quickRegForm" action="?m=users&act=qReg" method="POST">
            <h4>Registrering</h4>
            <hr />
            <li>
                <label for="firstname">Fornavn:</label>
                <input name="firstname" type="text" />
                <span class="hidden"></span>
            </li>
            <li>
                <label for="lastname">Etternavn:</label>
                <input name="lastname" type="text" />
                <span class="hidden"></span>
            </li>
            <li>
                <label for="email">E-post:</label>
                <input id="regEmail" type="email" name="email" required="required"/>
                <span class="hidden"></span>
            </li>
            <li>
                <label for="password">Passord:</label>
                <input type="password" name="password" required="required"/>
                <span class="hidden"></span>
            </li>
            <li>
                <label for="confpassword">Bekreft passord:</label>
                <input type="password" name="confpassword" required="required"/>
                <span class="hidden"></span>
            </li>
            <li>
                <label for="birthdate">Fødselsdato:</label>
                <input type="text" name="birthdate" required="required" placeholder="dd/mm/yyyy" />
                <span class="hidden"></span>
            </li>
            <li>
                <label for="telephone">Telefon:</label>
                <input type="text" name="telephone" required="required"/>
                <span class="hidden"></span>
            </li>
            <li>
                <label for="zipcode">Postnr:</label>
                <input type="text" name="zipcode" required="required" />
                <span class="hidden"></span>
            </li>
            <li>
                <label for="streetadress">Gateadresse:</label>
                <input type="text" name="streetadress" required="required"/>
                <span class="hidden"></span>
            </li>
            <label for="zipcode">Betingelser:</label>


            <div id="terms">
                <p>
                For å opprette bruker i vårt system avhenger det av at du setter deg inn i, og godtar, de nedenforstående betingelser. Ved å hake av "Godta betingelser" samtykker du til følgende:
                </p>
                <ul>
                    <p>&bull; Bilder og video av deg kan brukes av Nemean i promoteringsøyemed</p><br>

                    <p>&bull; Om dette ikke er ønskelig må det leveres skriftlig beskjed om dette.</p><br>

                    <p>&bull; Om du er plassert i plasskartet idét det stenges, må du betale uansett om du ikke kommer på arrangementet</p><br>

                    <p>&bull; Hvis du er under 18 år må registrere en foresatt dersom du ønsker å plassere deg i vårt plasskart. En epost vil da bli sendt til den aktuelle foresatte, der vedkommende må bekrefte at du får delta.</p><br>

                    <p>&bull; Du er pliktig til å sette deg inn i Nemeans reglement.</p><br>

                    <p>&bull; Nemean reserverer seg retten til å kunne endre på arrangementsreglene uten varsel - det er opp til den enkelte å holde seg oppdatert på dette (Ordensregler kan ikke ha tilbakevirkende kraft).</p><br>

                    <p>&bull; Nemean tar vare på personlig informasjon (Adresse, telefonnummer osv.). Informasjonen vil brukes til å kontakte deltagere ved behov.</p><br>

                    <p>&bull; Ditt fulle navn vises på vår nettside</p><br>

                </ul>

            </div>

            <li>
                <label for="acceptTerms">Godta betingelser:</label>
                <input  type="checkbox" id="okTerms" name="acceptTerms" value="1" required="required" DISABLED="disabled"/>
                <span class="hidden"></span>
            </li>
            <li>
                <label>&nbsp;</label>
                <input type="submit" id="submitQReg" name="submitQReg" value="Registrer"/>
            </li>
            <div class="loader"><img src="resources/site/img/design/loader.gif" /></div>
        </form>

    </div>

    <div id="forgotPsw">
        <a class="X" href="#">X</a>
        <form id="forgotPswForm" action="" method="POST">
        <h4>Glemt passord</h4>
        <hr />
        <p>Skriv inn din e-postadresse og du vil motta en e-post med et midlertidig passord.</p>

            <li>
                <label for="email">E-post:</label>
                <input name="email" type="text" />
            </li>
            <li>
                <label for="submitForgot1">&nbsp;</label>
                <input name="submitForgot1" type="submit" value="Send" />
            </li>
            <div class="loader"><img src="resources/site/img/design/loader.gif" /></div>
        </form>
    </div>

    <div id="loginBox">
        <a class="X" href="#">X</a>

        <form id="loginBoxForm" action="" method="POST">
            <h4>Login</h4>
            <hr />
            <li>
                <label for="username">E-post:</label>
                <input name="username" type="text" autofocus="autofocus" />
            </li>
            <li>
                <label for="password">Passord:</label>
                <input name="password" type="password" />
            </li>
            <li>
                <label for="submit_login">&nbsp;</label>
                <input name="submit_login" type="hidden" value="Send" />
            </li>
            <li>
                <label for="submit_login">&nbsp;</label>
                <input name="submit_login" type="submit" value="Send" />
            </li>
            <div class="loader"><img src="resources/site/img/design/loader.gif" /></div>
        </form>
        <div class="buttons">
            <div>
                <button id="registerBtn">Registrer</button>
                <button id="forgotPswBtn">Glemt passord</button>
            </div>
        </div>
    </div>

    <div id="notify">
        <p id="notifyMsg"></p>
        <button id="notifyClose">Close</button>
    </div>

    <div id="completereg">
        <a class="X" href="#">X</a>

        <form id="cRegForm" action="" method="POST">
            <h4>Fullfør registrering</h4>
            <p>
                På grunn av din alder må du registrere en foresatt som ansvarlig for deg.
                Din foresatte vil motta en e-post med en bekrefelseslink. Du vil ikke kunne plassere deg før din
                foresatte har mottatt og besøkt bekreftelseslinken.
            </p>
            <hr />
            <li>
                <label>First name:</label>
                <input type="text" name="firstname" required="required"/>
            </li>

            <li>
                <label>Last name:</label>
                <input type="text" name="lastname" required="required"/>
            </li>

            <li>
                <label>Foresattes e-mail:</label>
                <input type="email" name="email" required="required"/>
            </li>

            <li>
                <label>Foresattes telefonnummer:</label>
                <input type="number" name="telephone" required="required"/>
            </li>
            <input id="cRegSID" name="seat_id" type="hidden" value="" />
            <li>
                <label for="submit_cReg">&nbsp;</label>
                <input name="submit_cReg" type="submit" value="Send" />
            </li>
            <div class="loader"><img src="resources/site/img/design/loader.gif" /></div>
        </form>
    </div>

    <div id="reserveSeat">
        <a class="X" href="#">X</a>

        <form id="reserveSeatForm" action="" method="POST">
            <h4></h4>
            <p>Skriv inn ditt passord for å reservere denne plassen.</p>
            <hr />
            <li>
                <label for="password">Passord:</label>
                <input name="password" type="password" autofocus="autofocus" />
            </li>
            <li>
                <label for="submit_reserve">&nbsp;</label>
                <input name="submit_reserve" type="submit" value="Reserver" />
            </li>
            <div class="loader"><img src="resources/site/img/design/loader.gif" /></div>
        </form>
    </div>

    <div id="removeRsv">
        <a class="X" href="#">X</a>

        <form id="removeRsvForm" action="" method="POST">
            <h4></h4>
            <p>Skriv inn ditt passord for å kansellere din reservasjon.</p>
            <hr />
            <li>
                <label for="password">Passord:</label>
                <input name="password" type="password" autofocus="autofocus" />
            </li>
            <li>
                <label for="submit_remove">&nbsp;</label>
                <input name="submit_remove" type="submit" value="Slett" />
            </li>
            <div class="loader"><img src="resources/site/img/design/loader.gif" /></div>
        </form>
    </div>



<div id="applicationForm">

    <a class="X" href="#">X</a>
    <form id="application" action="" method="POST">
        <h4>Søknadskjema for crewopptak</h4>
        <hr />
        <li>
            <label for="firstname">Fornavn:</label>
            <input name="firstname" type="text" />
            <span class="hidden"></span>
        </li>
        <li>
            <label for="lastname">Etternavn:</label>
            <input name="lastname" type="text" />
            <span class="hidden"></span>
        </li>

        <li>
            <label for="email">Epost:</label>
            <input name="email" type="text" />
            <span class="hidden"></span>
        </li>

        <li>
            <label for="byear">Fødselsår:</label>
            <input name="byear" type="text" />
            <span class="hidden"></span>
        </li>

        <li>
        <label for="why">Hvorfor?:</label>  <br /> <br />
        <textarea name="why"  cols="25" rows="7" placeholder="Hvorfor skal akkurat du være med i Nemean Crew? Ta med relevant utdanning eller andre erfaringer som du kan dra nytte av som Crew hos Nemean." ></textarea>
        <span class="hidden"></span>
    </li>

        <li>
            <label for="what">Hva?:</label>  <br /> <br />
            <textarea name="what" cols="25" rows="7" placeholder="Hvis du blir med i Nemean Crew, hva ønsker du å gjøre? Gaming, kiosk, underholdning, web, foto, etc?  Hvis du ønsker Gaming, er det noen spill du behersker?" ></textarea>
            <span class="hidden"></span>
        </li>

        <li>
            <label>&nbsp;</label>
            <input type="submit" id="submitCA" name="submitCA" value="Send"/>
        </li>
        <div class="loader"><img src="resources/site/img/design/loader.gif" /></div>
    </form>

</div>








<?php if ($session->isAuthorized(array('Developer', 'Crew'))) : ?>
        <a id="toAdminBtn" href="admin.php">Adminpanel</a>
    <?php endif; ?>

</body>


</html>