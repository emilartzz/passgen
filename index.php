<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Signika+Negative:wght@300;400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/main.css">

    <title>Passgen.tech - Random Password Generator</title>

    <meta name="title" content="Passgen.tech">
    <meta name="description" content="Generate a new random password.">

    <meta property="og:type" content="website">
    <meta property="og:url" content="https://passgen.tech/">
    <meta property="og:title" content="Passgen.tech">
    <meta property="og:description" content="Generate a new random password.">
    <meta property="og:image" content="./img/passgen.tech.png">
    <meta property="og:image" content="./img/passgen.tech.png">
    <meta property="og:image:width" content="1200px">
    <meta property="og:image:height" content="628px">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://passgen.tech/">
    <meta property="twitter:title" content="Passgen.tech">
    <meta property="twitter:description" content="Generate a new random password.">
    <meta property="twitter:image" content="./img/passgen.tech.png">

    <link rel="shortcut icon" href="./img/favicon.svg" sizes="any" type="image/svg+xml">
    <link rel=”mask-icon” href=”./img/favicon.svg” color=”#000000">

</head>
<body>

    <div class="container">

        <div class="brand">
            <img id="h1" src="./img/passgen.tech.svg" alt="Passgen.tech">
            <h2>Random password generator </h2>
        </div>


        <div class="passgen">

            <div class="main_passgen">
                
                <label for="outPass">Your Password :</label>

                <div class="generator">
                    <button title="Hide/Show password" alt="Hide/Show password" id="passVis" ><i id="passVisEye" class="fas fa-eye-slash"></i></button>
                    <input type="password" name="outPass" id="outPass" placeholder="secure password">
                    <button title="Copy password" alt="Copy password" id="copyPass"><i class="fas fa-copy"></i></button>
                </div>
            </div>

            <div class="settings">
                <div class="length">
                    <label for="length_selector" id="lblLength">Length:</label>
                    <select name="length_selector" id="length_selector" >
                        <option value="8">8 character</option>
                        <option value="12" selected="selected">12 character</option>
                        <option value="18">18 character</option>
                        <option value="20">20 character</option>
                        <option value="24">24 character</option>
                        <option value="28">28 character</option>
                        <option value="32">32 character</option>
                        <option value="0">Custom Value</option>
                    </select>
                    <input type="number" name="customLength" id="customLength" placeholder="Custom Value">
                </div>

                <div id="char_options">
                    <label class="checkbox_container special">Include Symbols
                        <input type="checkbox" name="specialChars" id="specialChars" checked>
                        <span class="checkmark"></span>
                      </label>
                      <label class="checkbox_container uppercase">Uppercase Characters
                        <input type="checkbox" name="upperChars" id="upperChars" checked>
                        <span class="checkmark"></span>
                      </label>
                      <label class="checkbox_container lowercase">Lowercase Characters
                        <input type="checkbox" name="lowerChars" id="lowerChars" checked>
                        <span class="checkmark"></span>
                      </label>
                </div>

                <div id="generateButton">
                    <button id="btnGenerator">Generate</button>
                </div>
                
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js" integrity="sha512-WNLxfP/8cVYL9sj8Jnp6et0BkubLP31jhTG9vhL/F5uEZmg5wEzKoXp1kJslzPQWwPT1eyMiSxlKCgzHLOTOTQ==" crossorigin="anonymous"></script>
    <script src="./js/app.js"></script>
    
</body>
</html>