<?php
$points = $original = [
    'top-left-container'    => '-100 -100',
    'top-right-corner'      => '100 -50',
    'top-right-corner-2'    => '100 -50',
    'center'                => '55 45',
    'bottom-right-corner'   => '100 150',
    'bottom-right-corner-2' => '100 150',
    'bottom-left-corner'    => '-100 200',
];
?>

<svg xmlns="http://www.w3.org/2000/svg" id="video-cover" version="1.1" baseProfile="full" width="100%" viewBox="0 0 100 100" preserveAspectRatio="none">
    <polygon points="{{ implode(',', $points) }}" fill="white">
        {{--ANIMATE OPEN--}}
        <?php
        $points = [
            'top-left-container'    => '-100 -100',
            'top-right-corner'      => '-100 50',
            'top-right-corner-2'    => '-100 50',
            'center'                => '55 45',
            'bottom-right-corner'   => '-100 50',
            'bottom-right-corner-2' => '-100 50',
            'bottom-left-corner'    => '-100 200',
        ];
        ?>
        <animate begin="shape.click" id="open-full-animation-part-1" begin="indefinite" fill="freeze" attributeName="points" dur="1000ms" to="{{ implode(',', $points) }}"></animate>

        {{--ANIMATE CLOSE--}}
        <animate begin="shape.click" id="close-full-animation-part-1" begin="indefinite" fill="freeze" attributeName="points" dur="1000ms" to="{{ implode(',', $original) }}"></animate>

        {{--ANIMATE SNAP--}}
        <?php
        $points = [
            'top-left-container'    => '-100 -100',
            'top-right-corner'      => '100 -50',
            'top-right-corner-2'    => '100 50',
            'center'                => '55 45',
            'bottom-right-corner'   => '100 50',
            'bottom-right-corner-2' => '100 150',
            'bottom-left-corner'    => '-100 200',
        ];
        ?>
        <animate begin="shape.click" id="snap-animation-part-1" begin="indefinite" fill="freeze" attributeName="points" dur="500ms" to="{{ implode(',', $points) }}"></animate>
        <animate begin="shape.click" id="snap-animation-part-2" begin="indefinite" fill="freeze" attributeName="points" dur="500ms" to="{{ implode(',', $original) }}"></animate>
    </polygon>
</svg>
