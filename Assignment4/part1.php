<!DOCTYPE html>
<html>
  <head>
    <title>Part 1 | Format Text</title>
    <meta charset="utf-8">
    <style>
    div {
      border-radius: 10px;
      padding: 15px;
      background-color: #FFECE6;
      width: 96%;
    }

    fieldset {
      border: none;
    }

    h2 {
      font-family: sans-serif;
      letter-spacing: 2px;
    }

    label, p {
      font-family: sans-serif;
      font-size: 12px;
    }

    select {
      padding: 5px 10px;
      margin: 2px 0;
      display: inline-block;
      border: 1px solid #D9D9D9;
      background-color: #FFFFFF;
      border-radius: 5px;
    }

    input[type=submit] {
      width: 100%;
      border: 1px solid #CCCCCC;
      background-color: #F2F2F2;
      padding: 5px 10px;
      margin: 2px 0;
      border-radius: 5px;
      cursor: pointer;
    }

    label[for=bold] {
      font-weight: bold;
    }

    label[for=italicize] {
      font-style: italic;
    }

    label[for=underline] {
      text-decoration: underline;
    }

    .output {

    }
    </style>
  </head>

  <body>
    <?php
    $family = $size = $color = $fanciness = $paragraph = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $family = test($_POST["typefont"]);
      $size = test($_POST["sizefont"]);
      $color = test($_POST["colorfont"]);
      $fanciness = test($_POST["decoration"]);
      $paragraph = test($_POST["textparagraph"]);
    }

    function test($x) {
      $x = trim($x);
      $x = htmlspecialchars($x);
      $x = stripcslashes($x);
      return $x;
    }

    switch($fanciness) {
      case "none":
        $fanciness = "";
        break;
      case "b":
        $fanciness = "font-weight: bold;";
        break;
      case "i":
        $fanciness = "font-style: italic;";
        break;
      case "u":
        $fanciness = "text-decoration: underline;";
        break;
      default:
        break;
    }
    ?>

    <div>
      <form action="#" method="post">
        <fieldset>
          <legend><h2>STYLING ATTRIBUTES</h2></legend>
          <label for="fontfam">Font Type</label><br>
          <select id="fontfam" name="typefont">
            <option value="blank"></option>
            <option value="Arial">Arial</option>
            <option value="Georgia">Georgia</option>
            <option value="Helvetica">Helvetica</option>
            <option value="Impact">Impact</option>
            <option value="Tahoma">Tahoma</option>
            <option value="Times New Roman">Times New Roman</option>
            <option value="Verdana">Verdana</option>
          </select>

          <br>
          <label for="fontsiz">Font Size</label><br>
          <select id="fontsiz" name="sizefont">
            <option value="blank"></option>
            <option value="8">8</option>
            <option value="12">12</option>
            <option value="16">16</option>
            <option value="20">20</option>
            <option value="24">24</option>
            <option value="28">28</option>
            <option value="32">32</option>
            <option value="36">36</option>
            <option value="40">40</option>
            <option value="44">44</option>
            <option value="48">48</option>
            <option value="52">52</option>
            <option value="56">56</option>
            <option value="60">60</option>
          </select>

          <br>
          <label for="fontcol">Font Color</label><br>
          <select id="fontcol" name="colorfont">
            <option value="blank"></option>
            <option value="black">black</option>
            <option value="white">white</option>
            <option value="red">red</option>
            <option value="blue">blue</option>
            <option value="green">green</option>
            <option value="purple">purple</option>
            <option value="pink">pink</option>
          </select>

          <br>
          <label>Emphasis</label><br>
          <input type="radio" name="decoration" id="none" value="no" checked="checked"><label for="none"> None</label>
          <input type="radio" name="decoration" id="bold" value="b"><label for="bold"> Bold</label>
          <input type="radio" name="decoration" id="italicize" value="i"><label for="italicize"> Italics</label>
          <input type="radio" name="decoration" id="underline" value="u"><label for="underline">Underline</label>
        </fieldset>
      </div>
      <br>

      <div>
        <fieldset>
          <legend><h2>TYPE HERE<h2></legend>
          <textarea name="textparagraph" rows="10" cols="100"></textarea>
          <br><input type="submit">
        </fieldset>
      </div>
      <br>
    </form>

    <div>
      <fieldset>
        <legend><h2>OUTPUT</h2></legend>
        <?php
        echo "<span style='font-family: ".$family."; font-size: ".$size."px; color: ".$color."; ".$fanciness."'>".$paragraph."</span>";
        ?>
      </fieldset>
    </div>
  </body>
</html>
