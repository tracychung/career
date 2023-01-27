<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>datatable</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
</head>

<body>
    <table id="example" class="display" style="width:100%">
        <thead>

            <tr>
                <th>no.</th>
                <th>課程名稱</th>
                <th>地點</th>
                <th>課程時間</th>
                <th>課程內容</th>
            </tr>
        </thead>
        <tbody>
            <!-- <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr> -->
        </tbody>
    </table>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js" integrity="sha512-tWHlutFnuG0C6nQRlpvrEhE4QpkG1nn2MOUMWmUeRePl4e3Aki0VB6W1v3oLjFtd0hVOtRQ9PHpSfN6u6/QXkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
    <script>
        $(function() {



            // const myBtn = $('#myBtn');
            const tbody = $('tbody');

            // ajax
            $.ajax({
                url: "./js/course.json",
                type: "get",
                dataType: 'json',
                success: function(res) {

                    let data = res;
                    console.log('data', data);
                    let contentText = "";

                    $.each(res, function(key, value) {
                        
                        let textContext = `
                            <tr>
                                <td>${key + 1}</td>
                                <td>${value.CLASSNAM}</td>
                                <td>${value.CTNAMEE}</td>
                                <td>${value.TRAINING_PERIOD}</td>
                              
                            </tr>
                        `;
                        tbody.append(textContext);
                    });
                    // tbody.append(contentText);
                    $('#example').DataTable({
                        language: {
                            "lengthMenu": "顯示 _MENU_ 筆資料",
                            "sProcessing": "處理中...",
                            "sZeroRecords": "没有匹配结果",
                            "sInfo": "目前有 _MAX_ 筆資料",
                            "sInfoEmpty": "目前共有 0 筆紀錄",
                            "sInfoFiltered": " ",
                            "sInfoPostFix": "",
                            "sSearch": "搜尋:",
                            "sUrl": "",
                            "sEmptyTable": "尚未有資料紀錄存在",
                            "sLoadingRecords": "載入資料中...",
                            "sInfoThousands": ",",
                            "oPaginate": {
                                "sFirst": "首頁",
                                "sPrevious": "上一頁",
                                "sNext": "下一頁",
                                "sLast": "末頁"
                            },
                            "order": [
                                [0, "desc"]
                            ],
                            "oAria": {
                                "sSortAscending": ": 以升序排列此列",
                                "sSortDescending": ": 以降序排列此列"
                            }
                        },

                    });


                    // let contentText = `
                    //     <tr>
                    //         <td>123</td>
                    //         <td>456</td>
                    //     </tr>
                    // `;


                    //key locationName

                    // $.each(res.records.location, function (key, value) {
                    //     console.log('key', key);
                    //     console.log('value', value);
                    //     console.log('value', value.locationName);
                    // });

                },
                error: function(jqXHR, textStatus, errorThrown) {
                    // console.log('jqXHR', jqXHR);
                    // console.log('textStatus', textStatus);
                    // console.log('errorThrown', errorThrown);
                }
            });
            // ajax end
        });
    </script>
</body>

</html>