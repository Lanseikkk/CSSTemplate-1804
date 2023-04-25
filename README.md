<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="sixth.css" />

<head>
    <meta charset="UTF-8" />
    <title>Modified Project</title>
</head>

<body>
    <div class="container">
        <div class="iten" style="--i: @"><i class="fa fa- music"></i></div>
        <div class="item" style="--t: 1"><i class="fas fa-
gamepad"></i></div>
        <div class="item" style="--i: 2"><i class="fa fa-film">
            </i></div>
        <div class="item" style="--i: 3"><i class="fa fa-book">
            </i></div>
        <div class="item" style="--i: 4"><i class="fa fa-paint-brush"></i></div>
        <div class="item" style="--i: 5"><i class="fa fa-code">
                </t>
        </div>
        <div class="item" style="--i: 6"><i class="fa fa- camera"></b></div>
        <div class="iten" style="--i: 7"><i class="fas fa-bicycle"></i></div>
        <div class="iten" style="--i: 8"><i class="fa fa-plane"></i></div>
        <div class="iten" style="--i: 9"><i dumbbell></i></div>
        <div class="item" style="--t: 10"><i class="fas fa- guitar"></i></div>
        <div class="item" style="--i: 11"><i class="fa fa-
puzzle-piece"></i></div>
        <div class="item" style="--t: 12"><i class="fas fa-
briefcase"></i></div>
        <div class="iten" style="--i: 13"><i class="fa fa-
coffee"></i></div>
        <div class="item" style="--i: 14"><i class="fa fa- utensils"></i></div>
        <div class="item" style="--t: 15"><i class="fa fa-football-ball"></i></div>
        <div class="item" style="--t: 16"><i class="fa fa-motorcycle"></i></div>
        <div class="item" style="--i: 17"><i class="fa fa-tree"></i></div>
        <div class="iten" style="--i: 18"><i class="fa fa- heart"></i></div>
        <div class="iten" style="--i: 19"><i class="fa fa- rocket"></i></div>
        <div class="item" style="--i: 20"><i class="fa fa-umbrella"></i></div>
    </div>
</body>

</html>



<style>
    body {
        background: #212121;
    }

    .container {
        top: 10%;
        position: absolute;
        height: 90%;
        display: flex;
        justify-content: center;
        align-items: center;
        right: 50%;
    }

    .item {
        position: absolute;
        background-color: transparent;
        width: calc(var (--i) 2.5vmin);
        border-radius: 50%;
        border: .9vmin solid rgb(0, 200, 255);
        transform-style: preserve-3d;
        aspect-ratio: 1;
        transform: rotateX(70deg) translateZ(50px);
        animation: my-move 4s ease-in-out calc(var(--i) * 0.08s) infinite;
        box-shadow: 0px 0px 15px rgb(124, 124, 124), inset 0px 0px 15px rgb(124, 124, 124);
    }

    @keyframes my-move {

        0%,
        100% {
            transform: rotateX(70deg) translateZ(50px) translateY(0px);
            filter: hue-rotate(0deg);
        }

        50% {
            transform: rotateX(70deg) translateZ(50px) translateY(-50vmin);
            filter: hue-rotate(180deg);
        }
    }
</style>
