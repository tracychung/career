<?php 

if (!isset($_SESSION['login'])) {
    header("location:index.php?do=signup");
}
?>
    <div class="row mt-3">
        <div class="col-md-4 mx-auto my-5 p-5 border shadow-sm">
            <h4 class='text-center'>心理測驗－別人眼中真實的你</h4>
            <form action="../api/test_insert.php" method="post">
                <div class="row-cols-1 mt-3 mb-3">
                    <div class="col">
                        <label class="form-check-label mb-1" for="q1">1. 你心情最好的時候是？</label>
                    </div>
                    <div class="col">
                        <input class="form-check-input" type="radio" value=2 name="q1" id="q11" required>
                        <label class="form-check-label" for="q11">早上</label>
                    </div>
                    <div class="col">
                        <input class="form-check-input" type="radio" value=4 name="q1" id="q12" required>
                        <label class="form-check-label" for="q12">下午</label>
                    </div>
                    <div class="col">
                        <input class="form-check-input" type="radio" value=6 name="q1" id="q13" required>
                        <label class="form-check-label" for="q13">晚上</label>
                    </div>
                </div>
                <div class="row-cols-1 mb-3">
                    <div class="col">
                        <label class="form-check-label mb-1" for="q2">2. 走路的時候，你會？</label>
                    </div>
                    <div class="col">
                        <input class="form-check-input" type="radio" value=6 name="q2" id="q21" required>
                        <label class="form-check-label" for="q21">步伐快，布幅大</label>
                    </div>
                    <div class="col">
                        <input class="form-check-input" type="radio" value=4 name="q2" id="q22" required>
                        <label class="form-check-label" for="q22">步伐快，布幅少</label>
                    </div>
                    <div class="col">
                        <input class="form-check-input" type="radio" value=7 name="q2" id="q23" required>
                        <label class="form-check-label" for="q23">看著前方，步伐不快</label>
                    </div>
                    <div class="col">
                        <input class="form-check-input" type="radio" value=2 name="q2" id="q24" required>
                        <label class="form-check-label" for="q24">看著地下，步伐不快</label>
                    </div>
                    <div class="col">
                        <input class="form-check-input" type="radio" value=1 name="q2" id="q25" required>
                        <label class="form-check-label" for="q25">步伐很慢</label>
                    </div>
                </div>
                <div class="row-cols-1 mb-3">
                    <div class="col">
                        <label class="form-check-label mb-1" for="q3">3. 和別人說話的時候，你會？</label>
                    </div>
                    <div class="col">
                        <input class="form-check-input" type="radio" value=4 name="q3" id="q31" required>
                        <label class="form-check-label" for="q31">把雙手交叉</label>
                    </div>
                    <div class="col">
                        <input class="form-check-input" type="radio" value=2 name="q3" id="q32" required>
                        <label class="form-check-label" for="q32">雙方合十</label>
                    </div>
                    <div class="col">
                        <input class="form-check-input" type="radio" value=5 name="q3" id="q33" required>
                        <label class="form-check-label" for="q33">一隻手或雙手放在腰上</label>
                    </div>
                    <div class="col">
                        <input class="form-check-input" type="radio" value=7 name="q3" id="q34" required>
                        <label class="form-check-label" for="q34">用手推或牽制對方</label>
                    </div>
                    <div class="col">
                        <input class="form-check-input" type="radio" value=6 name="q3" id="q35" required>
                        <label class="form-check-label" for="q35">一邊用手摸耳朵或下巴，再用另一隻手玩弄頭髮</label>
                    </div>
                </div>
                <div class="row-cols-1 mb-3">
                    <div class="col">
                        <label class="form-check-label mb-1" for="q4">4. 休息的時候，你會？</label>
                    </div>
                    <div class="col">
                        <input class="form-check-input" type="radio" value=4 name="q4" id="q41" required>
                        <label class="form-check-label" for="q41">躺著並把腳曲起來</label>
                    </div>
                    <div class="col">
                        <input class="form-check-input" type="radio" value=6 name="q4" id="q42" required>
                        <label class="form-check-label" for="q42">二郎腿</label>
                    </div>
                    <div class="col">
                        <input class="form-check-input" type="radio" value=2 name="q4" id="q43" required>
                        <label class="form-check-label" for="q43">伸直雙腳</label>
                    </div>
                    <div class="col">
                        <input class="form-check-input" type="radio" value=1 name="q4" id="q44" required>
                        <label class="form-check-label" for="q44">一隻腳曲起，一隻腳伸直</label>
                    </div>
                </div>
                <div class="row-cols-1 mb-3">
                    <div class="col">
                        <label class="form-check-label mb-1" for="q5">5. 遇到很有趣的事情時，你會？</label>
                    </div>
                    <div class="col">
                        <input class="form-check-input" type="radio" value=6 name="q5" id="q51" required>
                        <label class="form-check-label" for="q51">不會隱藏自己的笑聲，豪邁地笑</label>
                    </div>
                    <div class="col">
                        <input class="form-check-input" type="radio" value=4 name="q5" id="q52" required>
                        <label class="form-check-label" for="q52">會笑，但不會太大聲</label>
                    </div>
                    <div class="col">
                        <input class="form-check-input" type="radio" value=3 name="q5" id="q53" required>
                        <label class="form-check-label" for="q53">靜靜地笑</label>
                    </div>
                    <div class="col">
                        <input class="form-check-input" type="radio" value=5 name="q5" id="q54" required>
                        <label class="form-check-label" for="q54">害羞地微笑</label>
                    </div>
                </div>
                <div class="row-cols-1 mb-3">
                    <div class="col">
                        <label class="form-check-label mb-1" for="q6">6. 去派對或人多場合時，你會？</label>
                    </div>
                    <div class="col">
                        <input class="form-check-input" type="radio" value=6 name="q6" id="q61" required>
                        <label class="form-check-label" for="q61">打扮得華麗引人注目</label>
                    </div>
                    <div class="col">
                        <input class="form-check-input" type="radio" value=4 name="q6" id="q62" required>
                        <label class="form-check-label" for="q62">周圍找有沒有認識的人</label>
                    </div>
                    <div class="col">
                        <input class="form-check-input" type="radio" value=2 name="q6" id="q63" required>
                        <label class="form-check-label" for="q63">盡量不讓別人注目，安靜地入場</label>
                    </div>
                </div>
                <div class="row-cols-1 mb-3">
                    <div class="col">
                        <label class="form-check-label mb-1" for="q7">7. 集中於一件事但突然被阻礙時，你會？</label>
                    </div>
                    <div class="col">
                        <input class="form-check-input" type="radio" value=6 name="q7" id="q71" required>
                        <label class="form-check-label" for="q71">認為是一個休息的好機會</label>
                    </div>
                    <div class="col">
                        <input class="form-check-input" type="radio" value=2 name="q7" id="q72" required>
                        <label class="form-check-label" for="q72">感到非常煩躁</label>
                    </div>
                    <div class="col">
                        <input class="form-check-input" type="radio" value=4 name="q7" id="q73" required>
                        <label class="form-check-label" for="q73">於兩者之間</label>
                    </div>
                </div>
                <div class="row-cols-1 mb-3">
                    <div class="col">
                        <label class="form-check-label mb-1" for="q8">8. 以下最喜歡的顏色是？</label>
                    </div>
                    <div class="col">
                        <input class="form-check-input" type="radio" value=6 name="q8" id="q81" required>
                        <label class="form-check-label" for="q81">紅或澄</label>
                    </div>
                    <div class="col">
                        <input class="form-check-input" type="radio" value=7 name="q8" id="q82" required>
                        <label class="form-check-label" for="q82">黑</label>
                    </div>
                    <div class="col">
                        <input class="form-check-input" type="radio" value=5 name="q8" id="q83" required>
                        <label class="form-check-label" for="q83">黃或淺澄</label>
                    </div>
                    <div class="col">
                        <input class="form-check-input" type="radio" value=4 name="q8" id="q84" required>
                        <label class="form-check-label" for="q84">綠</label>
                    </div>
                    <div class="col">
                        <input class="form-check-input" type="radio" value=3 name="q8" id="q85" required>
                        <label class="form-check-label" for="q85">淺藍或紫</label>
                    </div>
                    <div class="col">
                        <input class="form-check-input" type="radio" value=2 name="q8" id="q86" required>
                        <label class="form-check-label" for="q86">白</label>
                    </div>
                    <div class="col">
                        <input class="form-check-input" type="radio" value=1 name="q8" id="q87" required>
                        <label class="form-check-label" for="q87">咖或灰</label>
                    </div>
                </div>
                <div class="row-cols-1 mb-3">
                    <div class="col">
                        <label class="form-check-label mb-1" for="q9">9. 睡覺時，你的姿勢是？</label>
                    </div>
                    <div class="col">
                        <input class="form-check-input" type="radio" value=7 name="q9" id="q91" required>
                        <label class="form-check-label" for="q91">躺平</label>
                    </div>
                    <div class="col">
                        <input class="form-check-input" type="radio" value=6 name="q9" id="q92" required>
                        <label class="form-check-label" for="q92">身體傾側向一面</label>
                    </div>
                    <div class="col">
                        <input class="form-check-input" type="radio" value=4 name="q9" id="q93" required>
                        <label class="form-check-label" for="q93">身體捲起</label>
                    </div>
                    <div class="col">
                        <input class="form-check-input" type="radio" value=2 name="q9" id="q94" required>
                        <label class="form-check-label" for="q94">把自己的手當枕頭</label>
                    </div>
                    <div class="col">
                        <input class="form-check-input" type="radio" value=1 name="q9" id="q95" required>
                        <label class="form-check-label" for="q95">用被子蓋過頭</label>
                    </div>
                </div>
                <div class="row-cols-1 mb-3">
                    <div class="col">
                        <label class="form-check-label mb-1" for="q10">10. 你經常做以下哪一種夢？</label>
                    </div>
                    <div class="col">
                        <input class="form-check-input" type="radio" value=4 name="q10" id="q101" required>
                        <label class="form-check-label" for="q101">墜下</label>
                    </div>
                    <div class="col">
                        <input class="form-check-input" type="radio" value=2 name="q10" id="q102" required>
                        <label class="form-check-label" for="q102">和別人爭吵</label>
                    </div>
                    <div class="col">
                        <input class="form-check-input" type="radio" value=3 name="q10" id="q103" required>
                        <label class="form-check-label" for="q103">尋找某東西或某人</label>
                    </div>
                    <div class="col">
                        <input class="form-check-input" type="radio" value=5 name="q10" id="q104" required>
                        <label class="form-check-label" for="q104">飛</label>
                    </div>
                    <div class="col">
                        <input class="form-check-input" type="radio" value=6 name="q10" id="q105" required>
                        <label class="form-check-label" for="q105">不常做夢</label>
                    </div>
                    <div class="col">
                        <input class="form-check-input" type="radio" value=1 name="q10" id="q106" required>
                        <label class="form-check-label" for="q106">經常做好夢</label>
                    </div>
                    <div class="mt-3 mb-3">
                        <button type="submit" class="btn btn-primary">送出</button>
                        <button type="reset" class="btn btn-primary">重置</button>
                    </div>
                </div>
        </div>
        </form>