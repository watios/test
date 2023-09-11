<style>
    .texto-animado {
  font-size: 36px;
  font-weight: bold;
  color: #333;
  text-align: center;
}

.letra {
  display: inline-block;
  animation-name: caida;
  animation-duration: 0.5s;
  animation-timing-function: ease-in-out;
}

@keyframes caida {
  from {
    transform: translateY(-100%);
    opacity: 0;
  }
  to {
    transform: translateY(0);
    opacity: 1;
  }
}

</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="texto-animado">
  <span class="letra">H</span>
  <span class="letra">o</span>
  <span class="letra">l</span>
  <span class="letra">a</span>
  <span class="letra">,</span>
  <br>
  <span class="letra">m</span>
  <span class="letra">u</span>
  <span class="letra">n</span>
  <span class="letra">d</span>
  <span class="letra">o</span>
  <span class="letra">.</span>
  <span class="letra">.</span>
  <span class="letra">.</span>
</div>

</body>
</html>