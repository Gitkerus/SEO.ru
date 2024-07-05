<div class="scroller" direction="left">
        <div class="scroller__inner">
            <?php 
                $rewards = [    
                    [ 
                        "text-header" => "1 место", 
                        "text-note" => "Рейтинг SEO-агентств: <br> 2022 (по городу Ульяновску)",
                        "img" => "./assets/scroller/RUWARD.png"
                    ],
                    [ 
                        "text-header" => "Награда", 
                        "text-note" => "Самый динамичный рост <br> в отраслевом SEO-рейтинге",
                        "img" => "./assets/scroller/OPTIMIZATION.png"
                    ],
                    [ 
                        "text-header" => "2 место", 
                        "text-note" => "Рейтинг лучших Digital <br> -агентств в поисковой выдаче",
                        "img" => "./assets/scroller/SUPERSTAT.png"
                    ],
                    [ 
                        "text-header" => "2 место", 
                        "text-note" => "Рейтинг Рунета по г. Ульяновск <br> в высоком ценовом сегменте",
                        "img" => "./assets/scroller/RAITING_RUNETA.png"
                    ],
                    [ 
                        "text-header" => "2 место", 
                        "text-note" => "Рейтинге упоминаемости <br> SEO-компаний по версии АиП",
                        "img" => "./assets/scroller/ASHMANOV_I_PARTNERU.png"
                    ],
                    [ 
                        "text-header" => "7 место", 
                        "text-note" => "Рейтинг Рунета по г. Москва <br> в высоком ценовом сегменте",
                        "img" => "./assets/scroller/RAITING_RUNETA.png"
                    ],
                    [ 
                        "text-header" => "8 место", 
                        "text-note" => "Ежегодный рейтинг SEO <br> глазами Клиентов 2023",
                        "img" => "./assets/scroller/SEO_NEWS.svg"
                    ],
                ];
                

                foreach($rewards as $reward) {
                    echo "<div class='reward__block'>
                            <img class='reward__block__img' src={$reward['img']} alt='blockImg'>
                                <div class='reward__block-wrapper'>
                                    <div class='reward__block__text'>
                                        <span class='reward__block__text-header'>
                                            {$reward['text-header']}
                                        </span>
                                        <span class='reward__block__text-note'>
                                            {$reward['text-note']}
                                        </span>
                                    </div>
                                    <img class='reward__block__lavrs' src='./assets/scroller/Lavrs.svg' alt='lavrs'>
                                </div>
                            </div>";
                };
            ?>
        </div>
</div>
<script src="./scroller.js"></script>