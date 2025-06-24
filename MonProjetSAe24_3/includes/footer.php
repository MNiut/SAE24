<?php
// English comments as requested.
// This file contains the shared footer.
// It uses a PHP variable $path_prefix to correctly locate images
// whether it's included from the root or a subdirectory.
?>
    </div> <!-- Closes .main-container from the header -->
    <footer>
        <p>Cabinet Paramédicale Groupe C</p>
        <p>AIT OUARET, DUBOS, EL JAHJOUKI, NUADI</p>
        
        <aside id="last">
            <hr />
            <p><em>Validation de la page HTML5 - CSS3</em></p>
            <a href="https://validator.w3.org/" target="_blank"> 
                <img class="validator-badge" src="<?php echo $path_prefix; ?>images/html5-validator-badge-blue.png" alt="HTML5 Valide !" />
            </a>
            <a href="https://jigsaw.w3.org/css-validator/" target="_blank">
                <img class="validator-badge" src="https://jigsaw.w3.org/css-validator/images/vcss-blue" alt="CSS Valide !" />
            </a>
        </aside>
    </footer>
</body>
</html>