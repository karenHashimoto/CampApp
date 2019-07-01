<!DOCTYPE html>
<html lang="ja">

<head>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-142770356-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-142770356-1');
    </script>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>camcierge </title>

    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/date.css">
    <link rel="stylesheet" href="/css/reset.css">


    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP|Roboto|Noto+Serif+JP" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/hot-sneaks/jquery-ui.css">


    <!-- ファビコン -->
    <link rel="icon" href="/image/icon/favicon.ico">

    <!-- スマホ用アイコン -->
    <link rel="apple-touch-icon" sizes="180x180" href="/image/icon/sumaho.ico">


</head>

<body>
    <div class="fixed">
        <div class="header">
            <div class="before_button">
                <a href="{{ route('people', ['id' => $camps->id]) }}" class="button_color_glay"><i class="material-icons large-size">
                        navigate_before
                    </i> </a>
            </div>
            <div class="logo_area">
                <a class="logo" href="/"><img src="/image/logo.svg"></a>
            </div>
            <div class="next_button">

            </div>
        </div>
    </div>


    <div class="reserve_band">一括予約</div>
    <div class="stepper_wrap">
        <div class="stepper">
            <div class="circle">
                <div class="circle-inner">40%</div>
            </div>
        </div>
        <div class="purpose_unit">
            <div class="purpose">日にちを選択</div>
            <div class="purpose_next">次はアイテムレンタル選択</div>
        </div>
    </div>


    <div class="wrapper">


        <form action="{{url('/rental_item' )}}" method="post">

            <div class="date_picker_unit">
                {{ csrf_field()}}

                <div class="check_inout_wrap">
                    <div class="check_inout_unit">
                        <div class="align_left">
                            <div>チェックイン</div>
                        </div>

                        <div class="align_center">
                            <div class="staydays" id="staydays">
                                合計宿泊数
                            </div>
                        </div>

                        <div class="align_right size_fourty-percent">
                            <div class="-is-width-maxcontent align_right">チェックアウト</div></span>
                        </div>




                    </div>




                    <div class="date_pick_unit">
                        <div class="date_inputbox date_inputbox_borderright">
                            <input type="text" class="js-inDate" id="inDate" name="inDate" value="CheckIn">

                        </div>
                        <div class="date_inputbox align_right -is-text-align_right">
                            <input class="-is-text-align_right js-outDate" type="text" id="outDate" name="outDate" value="CheckOut">

                        </div>
                    </div>
                </div>
            </div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <!-- <input type="submit" class="button_flat" value="選択した日付で予約する"> -->
            <div class="button_wrap">

                <button input type="submit" class="button_flat" value="選択した日付で予約する">
                    <div class="before_button">
                    </div>

                    <div class="center_button">次へ</div>

                    <div class="next_button">
                        <a href="◯◯" class="button_color_white"><i class="material-icons large-size">
                                navigate_next
                            </i> </a>
                    </div>
                </button>
            </div>
    </div>
    </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>


    <script type="text/javascript">
        // var inDate = new Date();

        // var yyyy = inDate.getFullYear();
        // var mm = ("0"+(inDate.getMonth()+1)).slice(-2);
        // var dd = ("0"+inDate.getDate()).slice(-2);

        // document.getElementById("today").value=yyyy+'-'+mm+'-'+dd;

        function assingStayDates(date) {

            var dates = stayDates(date);
            assignDate(dates);

        }

        function stayDates(date) {
            //  宿泊数を計算
            var inDateString = $(".js-inDate").val()
            var outDateString = $(".js-outDate").val()

            var inDate = moment(new Date(inDateString))
            console.log(inDate);
            var outDate = moment(new Date(outDateString))


            var stayDate = outDate.diff(inDate, "days");

            return stayDate;

            // 宿泊数という結果を返したい
        }

        function assignDate(sleepDate) {
            //  与えらたた引き数を、○泊○日の要素に適用
            var sleepDatedate = parseInt(sleepDate) + 1;
            var sleepDate = sleepDate + "泊" + sleepDatedate + "日";
            console.log(sleepDate);

            document.getElementById("staydays").innerHTML = sleepDate;
        }

        //  doc0.innerHTML= "staydaysの箇所にテキストを表示します。";  

        //  ○泊○日を表示する要素の内容をsleepDateObjectで置き換えたい。



        $(function() {
            $("#inDate").datepicker({
                changeMonth: true,
                numberOfMonths: 1,
                onClose: function(pDate) {
                    // console.log(pDate)
                    $("#outDate").datepicker("option", "minDate", pDate);
                    // ここで宿泊数計算の関数を実行する
                    // assingStayDates(pDate)
                }
            })
            $("#outDate").datepicker({
                changeMonth: true,
                numberOfMonths: 1,
                onClose: function(pDate) {
                    $("#inDate").datepicker("option", "maxDate", pDate);
                    // ここで宿泊数計算の関数を実行する
                    assingStayDates(pDate)
                }
            });
        });
    </script>
</body>

</html>