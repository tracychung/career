<?php
echo "<div class='fs-3 fw-bold mt-5 text-center' style='padding-top:20px; color:rgb(80, 110, 170)'>測驗結果為 {$_SESSION['total']} 分</div>";
echo "<div class='container'>";
    switch ($_SESSION['total']) {
        case $_SESSION['total'] > 60:
            echo "<div class='d-flex'>";
            echo "<div>";
            echo "<img src='../img/test_01.jpg' style='width: 300px;'>";
            echo "</div>";
            echo "<div>60 分以上
            你在別人眼中是一個以利益為先的人，<br>
            你有虚榮之心，較自我中心，同時喜歡支配別人，<br>
            雖然有人會羨慕及仰望你，但其實你的信賴度很低，<br>
            真正相信你的人並不多。<br>";
            echo "</div>";
            echo "</div>";
            break;

        case $_SESSION['total'] > 50 && $_SESSION['total'] < 61:
            echo "<div class='d-flex'>";
            echo "<div>";
            echo "<img src='../img/test_02.jfif' style='width: 300px;'>";
            echo "</div>";
            echo "<div>51～60 分
            你在別人眼中是領導者，也是一個能在短時間內做出決定的人。<br>
            你是一個很容易興奮，而且情緒起伏很大、十分衝動的人。<br>
            另外，你勇敢、喜歡接受挑戰，只要有機會，你都會接受新嘗試，<br>
            和你親近的人，會被你的熱情吸引。<br>";
            echo "</div>";
            echo "</div>";
            break;

        case $_SESSION['total'] > 40 && $_SESSION['total'] < 51:
            echo "<div class='d-flex'>";
            echo "<div>";
            echo "<img src='../img/test_03.jfif' style='width: 300px;'>";
            echo "</div>";
            echo "<div>41～50分
                你身邊的人都認為你活潑、有魅力、有趣和開朗，<br>
                無論去到哪裡，你也受到注目，<br>
                但你很會看別人的眼色，所以不會變得驕傲自大。<br>
                另外，你在別人眼中亦是一個多情和親切的人，<br>
                在別人有困難時，第一時間都會想起你，因為你擁有樂於助人的形象。<br>";
            echo "</div>";
            echo "</div>";
            break;

        case $_SESSION['total'] > 30 && $_SESSION['total'] < 41:
            echo "<div class='d-flex'>";
            echo "<div>";
            echo "<img src='../img/test_04.jfif' style='width: 300px;'>";
            echo "</div>";
            echo "<div>31～40分
                    別人眼中的你，是一個賢明、慎重、小心、現實的人，<br>
                    而且十分聰明，有很高的能力和才能，為人謙虚。<br>
                    另外，你和別人交往時，不會以輕挑態度接近，<br>
                    而對認識的朋友十分真誠，希望別人亦能以相同的態度待你。<br>";
            echo "</div>";
            echo "</div>";
            break;

        case $_SESSION['total'] > 20 && $_SESSION['total'] < 31:
            echo "<div class='d-flex'>";
            echo "<div>";
            echo "<img src='../img/test_05.jpg' style='width: 300px;'>";
            echo "</div>";
            echo "<div>21～30分
                        在別人眼中，你是一個固執和非常小心的人。<br>
                        無論什麼事你也會慎重和小心，一旦遇上令你著迷的事，你會非常衝動地朝著目標前進。<br>
                        不過，因為做事實在太仔細，有時候會給人「太執著」、「太認真」的感覺，<br>
                        在適當時候記得要顧及別人的感受。<br>";
            echo "</div>";
            echo "</div>";
            break;
        case $_SESSION['total'] < 21:
            echo "<div class='d-flex'>";
            echo "<div>";
            echo "<img src='../img/test_06.jpg' style='width: 300px;'>";
            echo "</div>";
            echo "<div> 21 分以下
            你也是有「選擇困難」的人，任何事都要別人替你決定，而別人也盡量不想與你有牽連。在別人眼中的你，是十分害羞、膽小、柔弱的人，<br>
            此外，你的觀察力很高，經常發現到一些別人沒有發現的錯誤或問題，<br>
            所以和你不熟的人會以為你很高智慧，但和你親近的人就知道這不是事實。<br>";
            echo "</div>";
            echo "</div>";
            break;
    }
   
    echo "</div>";
    echo "</div>";
?>